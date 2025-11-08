<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'grid' => array( 
					'text' 
				),
				'left' => array( 
					'logo',
					'expand_button',
					'menu' 
				),
				'supertop' => array( 
					'expand_menu_button',
					'collapse_button',
					'simple_search',
					'username_button' 
				),
				'top' => array( 
					 
				) 
			),
			'formXtTags' => array(
				'top' => array( 
					 
				) 
			),
			'itemForms' => array(
				'text' => 'grid',
				'logo' => 'left',
				'expand_button' => 'left',
				'menu' => 'left',
				'expand_menu_button' => 'supertop',
				'collapse_button' => 'supertop',
				'simple_search' => 'supertop',
				'username_button' => 'supertop' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'expand_menu_button' => 2,
				'expand_button' => 5 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'simple_search' => array( 
				'simple_search' 
			),
			'username_button' => array( 
				'username_button' 
			),
			'userinfo_link' => array( 
				'userinfo_link' 
			),
			'logout_link' => array( 
				'logout_link' 
			),
			'adminarea_link' => array( 
				'adminarea_link' 
			),
			'expand_menu_button' => array( 
				'expand_menu_button' 
			),
			'collapse_button' => array( 
				'collapse_button' 
			),
			'text' => array( 
				'text' 
			),
			'expand_button' => array( 
				'expand_button' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
	),
	'page' => array(
		'verticalBar' => true,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			array(
				'id' => 'main',
				'horizontal' => false 
			) 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'misc' => array(
		'type' => 'dashboard',
		'breadcrumb' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'dashboard' => array(
		'elements' => array( 
			 
		) 
	),
	'dashSearch' => array(
		'searchFields' => array(
			 
		),
		'allSearchFields' => array( 
			 
		),
		'googleLikeFields' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'dashboard',
	'type' => 'dashboard',
	'layoutId' => 'leftbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'grid' => array(
			'modelId' => 'dashboard-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 1 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'text' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'left' => array(
			'modelId' => 'leftbar-dashboard',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c0' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c0' => array(
					'model' => 'c0',
					'items' => array( 
						'logo',
						'expand_button' 
					) 
				),
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'menu' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'supertop' => array(
			'modelId' => 'leftbar-top-dashboard',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'expand_menu_button',
						'collapse_button' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'simple_search',
						'username_button' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'dashboard-top',
			'grid' => array( 
				 
			),
			'cells' => array(
				 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'simple_search' => array(
			'type' => 'simple_search' 
		),
		'username_button' => array(
			'type' => 'username_button',
			'items' => array( 
				'userinfo_link',
				'logout_link',
				'adminarea_link' 
			) 
		),
		'userinfo_link' => array(
			'type' => 'userinfo_link' 
		),
		'logout_link' => array(
			'type' => 'logout_link' 
		),
		'adminarea_link' => array(
			'type' => 'adminarea_link' 
		),
		'expand_menu_button' => array(
			'type' => 'expand_menu_button' 
		),
		'collapse_button' => array(
			'type' => 'collapse_button',
			'icon' => array(
				'glyph' => 'triangle-left',
				'style' => 0 
			) 
		),
		'text' => array(
			'type' => 'text',
			'label' => array(
				'text' => '<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Ghana — Stations Commission Status by Region</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.css"
    crossorigin="anonymous"
  />
  <style>
    body{margin:0;font-family:system-ui,-apple-system,Segoe UI,Roboto,Arial;background:#f6f8fb;color:#111827}
    .wrap{padding:16px}
    .title{margin:0 0 12px;font-size:20px;font-weight:800;display:flex;align-items:center;gap:8px}
    .panel{display:grid;grid-template-columns:minmax(280px,1fr) 420px;gap:14px}
    @media(max-width:1100px){.panel{grid-template-columns:1fr}}
    #ghanaMap{height:560px;border:1px solid #e5e7eb;border-radius:12px;background:#fff}
    .side{border:1px solid #e5e7eb;border-radius:12px;background:#fff;padding:12px}
    .legend{display:flex;align-items:center;gap:8px;margin:8px 0 12px}
    .sw{width:20px;height:12px;border-radius:2px;border:1px solid rgba(0,0,0,.15)}
    .row{display:flex;justify-content:space-between;gap:12px;padding:6px 0;border-bottom:1px dashed #eef2f7}
    .row:last-child{border-bottom:0}
    .pill{display:inline-block;padding:.2rem .5rem;border-radius:999px;font-size:.8rem;font-weight:700;border:1px solid transparent}
    .ok{background:#e6f4ea;color:#0f5132;border-color:#badbcc}
    .bad{background:#fee2e2;color:#991b1b;border-color:#fecaca}
    .note{color:#6b7280;font-size:12px}
    .leaflet-tooltip{font-weight:600}
  </style>
</head>
<body>
  <div class="wrap">
    <h3 class="title">🗺️ Ghana — Stations Commission Status by Region</h3>

    <div class="panel">
      <div id="ghanaMap"></div>

      <aside class="side">
        <div class="legend"><span class="sw" style="background:#a50f15"></span><small>&le; 40% in-commission</small></div>
        <div class="legend"><span class="sw" style="background:#f16913"></span><small>~ 60% in-commission</small></div>
        <div class="legend"><span class="sw" style="background:#31a354"></span><small>&ge; 85% in-commission</small></div>

        <div class="row"><span>Selected Region</span><strong id="selName">—</strong></div>
        <div class="row"><span>Working</span><span><span class="pill ok" id="selWorking">0</span></span></div>
        <div class="row"><span>Out of Commission</span><span><span class="pill bad" id="selOOC">0</span></span></div>
        <div class="row"><span>Total Stations</span><strong id="selTotal">0</strong></div>
        <div class="row"><span>In-Commission %</span><strong id="selPctW">0%</strong></div>
        <div class="row"><span>OOC %</span><strong id="selPctO">0%</strong></div>

        <p class="note" style="margin-top:10px">Hover to preview, click to lock. Data reflects current station &amp; workshop state.</p>
        <div id="selList" style="margin-top:10px;max-height:250px;overflow:auto;font-size:13px"></div>
      </aside>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.4/dist/leaflet.js" crossorigin="anonymous"></script>
  <script>
    // === Config: endpoints & files ===
    const GEOJSON_URL = "include/ghana_regions.geojson"; // must have property \'shapeName\'
    const DATA_URL    = "api/commission-stats.php";      // JSON from the PHP endpoint below

    // === Small helpers ===
    function esc(s){return String(s==null?\'\':s).replace(/&/g,\'&amp;\').replace(/</g,\'&lt;\')
      .replace(/>/g,\'&gt;\').replace(/"/g,\'&quot;\').replace(/\'/g,\'&#039;\');}

    // Normalizer: mirror of server-side (uppercase, drop "REGION", strip spaces & punctuation)
    function normName(s){
      return String(s||\'\')
        .toUpperCase()
        .replace(/[&/\\\\.\\-_]/g,\' \')
        .replace(/\\bREGION\\b/g,\'\')
        .replace(/\\s+/g,\'\')
        .replace(/[^A-Z]/g,\'\');
    }

    // Tiny Levenshtein for fuzzy fallback (≤25% of name length)
    function lev(a,b){
      const m=a.length,n=b.length; if(!m) return n; if(!n) return m;
      const dp=new Array(n+1); for(let j=0;j<=n;j++) dp[j]=j;
      for(let i=1;i<=m;i++){
        let prev=dp[0]; dp[0]=i;
        for(let j=1;j<=n;j++){
          const tmp=dp[j];
          dp[j]=Math.min(dp[j]+1, dp[j-1]+1, prev+(a[i-1]===b[j-1]?0:1));
          prev=tmp;
        }
      }
      return dp[n];
    }
    function closestKey(query, dict){
      const key = normName(query);
      if(dict[key]) return key;
      const keys = Object.keys(dict);
      let best=null, bestDist=1e9;
      for(const k of keys){ const d=lev(key,k); if(d<bestDist){best=k; bestDist=d;} }
      const maxAllowed = Math.ceil(Math.max(key.length, (best||\'\').length) * 0.25);
      return (bestDist<=maxAllowed) ? best : null;
    }

    function colorFor(pct){
      if(pct==null) return \'#d9d9d9\';
      if(pct<40) return \'#a50f15\';
      if(pct<60) return \'#f16913\';
      if(pct<75) return \'#f1c40f\';
      if(pct<85) return \'#7fc97f\';
      return \'#31a354\';
    }

    const el = {
      name: document.getElementById(\'selName\'),
      w:    document.getElementById(\'selWorking\'),
      o:    document.getElementById(\'selOOC\'),
      t:    document.getElementById(\'selTotal\'),
      pw:   document.getElementById(\'selPctW\'),
      po:   document.getElementById(\'selPctO\'),
      list: document.getElementById(\'selList\')
    };
    function setPanel(st){
      if(!st){ el.name.textContent=\'—\'; el.w.textContent=\'0\'; el.o.textContent=\'0\';
               el.t.textContent=\'0\'; el.pw.textContent=\'0%\'; el.po.textContent=\'0%\'; el.list.innerHTML=\'\'; return; }
      el.name.textContent = st.name||\'—\';
      el.w.textContent    = String(st.working||0);
      el.o.textContent    = String(st.ooc||0);
      el.t.textContent    = String(st.total||0);
      el.pw.textContent   = (st.pct_working!=null?Number(st.pct_working).toFixed(1):\'0.0\')+\'%\';
      el.po.textContent   = (st.pct_ooc!=null?Number(st.pct_ooc).toFixed(1):\'0.0\')+\'%\';
      el.list.innerHTML   = (st.stations||[]).slice().sort((a,b)=>(a.station||\'\').localeCompare(b.station||\'\'))
        .map(s=>`<div style="padding:6px 0;border-bottom:1px solid #f5f5f5">
                   <div><b>${esc(s.station||\'\')}</b> — <small>${esc(s.status||\'\')}</small></div>
                   <div class="note">Vehicle: ${esc(s.vehicle||\'—\')} · Avail: ${esc(s.avail||\'\')}</div>
                 </div>`).join(\'\');
    }

    // === Load data + draw map ===
    Promise.all([ fetch(GEOJSON_URL).then(r=>r.json()), fetch(DATA_URL).then(r=>r.json()) ])
      .then(([geo, stats])=>{
        // stats should be { normName: { name, total, working, ooc, pct_working, pct_ooc, stations[] } }
        const nameStats = stats || {};

        const map = L.map(\'ghanaMap\',{zoomControl:true,attributionControl:false}).setView([7.95,-1.03],6);
        L.tileLayer(\'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png\',{maxZoom:19}).addTo(map);

        const layer = L.geoJSON(geo, {
          style: f=>{
            const nm = f.properties.shapeName || f.properties.ShapeName || f.properties.name || \'\';
            let k = normName(nm);
            if(!nameStats[k]) k = closestKey(nm, nameStats) || k;
            const st = nameStats[k] || null;
            return { color:\'#8e8e8e\', weight:1, fillColor:colorFor(st?st.pct_working:null), fillOpacity:0.85 };
          },
          onEachFeature: (feature, lyr)=>{
            const nm = feature.properties.shapeName || feature.properties.ShapeName || feature.properties.name || \'\';
            let k = normName(nm);
            if(!nameStats[k]) k = closestKey(nm, nameStats) || k;
            const st = nameStats[k] || null;

            const tip = st
              ? `${esc(st.name)}<br>Working: <b>${st.working}</b> · OOC: <b>${st.ooc}</b><br>In-Comm: <b>${st.pct_working}%</b> · Total: <b>${st.total}</b>`
              : `${esc(nm)}<br><i>No matching data</i>`;
            lyr.bindTooltip(tip,{sticky:true});
            lyr.on({
              mouseover: e=>e.target.setStyle({weight:3}),
              mouseout:  e=>e.target.setStyle({weight:1}),
              click:     e=>setPanel(st)
            });
          }
        }).addTo(map);

        try{ map.fitBounds(layer.getBounds(), {padding:[10,10]}); }catch(e){}
      })
      .catch(err=>{
        console.error(\'Load failed\', err);
        alert(\'Failed to load map or data. Check console and file paths.\');
      });
  </script>
</body>
</html>
',
				'type' => 0 
			),
			'editedByRte' => false 
		),
		'expand_button' => array(
			'type' => 'expand_button' 
		) 
	),
	'dbProps' => array(
		 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>