<?php
// api/commission-stats.php
// Outputs: { normName: { region_id, name, total, working, ooc, pct_working, pct_ooc, stations:[] }, ... }
@header('Content-Type: application/json; charset=utf-8');
require_once dirname(__DIR__) . "/include/dbcommon.php"; // adjust if needed

function fetchAll($sql){ $out=[]; $rs=DB::Query($sql); while($rs && ($r=$rs->fetchAssoc())) $out[]=$r; return $out; }
function norm_key($s){
  $u = strtoupper((string)$s);
  $u = str_replace(['&','/','\\','.','-','_'], ' ', $u);
  $u = preg_replace('/\bREGION\b/', '', $u);
  $u = preg_replace('/\s+/', '', $u);
  return preg_replace('/[^A-Z]/', '', $u);
}

// 1) Regions list with best-name
$regRows = fetchAll("
  SELECT REGION_ID,
         COALESCE(NULLIF(TRIM(region_name),''), NULLIF(TRIM(REGION),''), CONCAT('Region ', REGION_ID)) AS region_name
  FROM regions
  GROUP BY REGION_ID
  ORDER BY REGION_ID
");
$ridToName = [];
foreach($regRows as $r){
  $ridToName[(int)$r['REGION_ID']] = (string)$r['region_name'];
}

// 2) Station snapshot w/ OOC detection (same logic as your dashboard)
$rows = fetchAll("
  SELECT s.REGION_ID, s.STATION, s.VehicleNo, s.Avail, s.gps,
         CASE
           WHEN s.VehicleNo IS NULL OR s.VehicleNo='' THEN 1
           WHEN EXISTS (SELECT 1 FROM mentain_workshop w WHERE w.Station=s.STATION AND w.status=3 LIMIT 1) THEN 1
           ELSE 0
         END AS is_ooc,
         CASE
           WHEN s.VehicleNo IS NULL OR s.VehicleNo='' THEN 'No Vehicle'
           WHEN EXISTS (SELECT 1 FROM mentain_workshop w2 WHERE w2.Station=s.STATION AND w2.status=3 LIMIT 1) THEN 'In Workshop'
           ELSE 'Working'
         END AS ooc_reason
  FROM stations s
  WHERE UPPER(TRIM(COALESCE(s.OfficeType,'')))='STATION'
");

$byRid = [];
foreach($rows as $r){
  $rid = (int)$r['REGION_ID'];
  if(!isset($byRid[$rid])){
    $byRid[$rid] = [
      'rid'      => $rid,
      'name'     => $ridToName[$rid] ?? ('Region '.$rid),
      'total'    => 0,
      'working'  => 0,
      'ooc'      => 0,
      'stations' => []
    ];
  }
  $byRid[$rid]['total']++;
  if(((int)$r['is_ooc'])===1) $byRid[$rid]['ooc']++; else $byRid[$rid]['working']++;
  $byRid[$rid]['stations'][] = [
    'station' => (string)$r['STATION'],
    'vehicle' => (string)$r['VehicleNo'],
    'avail'   => (string)$r['Avail'],
    'gps'     => (string)$r['gps'],
    'status'  => (string)$r['ooc_reason']
  ];
}

// 3) Build name-keyed dictionary (client matches via GeoJSON.shapeName → norm_key)
$nameStats = [];
foreach($byRid as $rid=>$st){
  $k = norm_key($st['name']);
  $total = max(0,(int)$st['total']);
  $w     = (int)$st['working'];
  $pctW  = $total>0 ? round(($w/$total)*100,1) : 0.0;
  $nameStats[$k] = [
    'region_id'   => $rid,
    'name'        => $st['name'],
    'total'       => $total,
    'working'     => $w,
    'ooc'         => (int)$st['ooc'],
    'pct_working' => $pctW,
    'pct_ooc'     => round(100 - $pctW, 1),
    'stations'    => $st['stations']
  ];
}

// 4) Output JSON
echo json_encode($nameStats, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
