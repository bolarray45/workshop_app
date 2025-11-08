<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'reqID',
			'Station',
			'region',
			'vehNo',
			'servicetype',
			'description',
			'KMR',
			'requestedby',
			'requestedon',
			'arrivaltime',
			'arrivaldate',
			'vehType',
			'chasisNo',
			'repairInstruction',
			'KMRin',
			'KMRout',
			'WOreqBy',
			'WOreqOn',
			'status',
			'workorder_id' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'reqID' => array( 
				'import_field' 
			),
			'Station' => array( 
				'import_field1' 
			),
			'region' => array( 
				'import_field2' 
			),
			'vehNo' => array( 
				'import_field3' 
			),
			'servicetype' => array( 
				'import_field4' 
			),
			'description' => array( 
				'import_field5' 
			),
			'KMR' => array( 
				'import_field6' 
			),
			'requestedby' => array( 
				'import_field7' 
			),
			'requestedon' => array( 
				'import_field8' 
			),
			'arrivaltime' => array( 
				'import_field9' 
			),
			'arrivaldate' => array( 
				'import_field10' 
			),
			'vehType' => array( 
				'import_field11' 
			),
			'chasisNo' => array( 
				'import_field12' 
			),
			'repairInstruction' => array( 
				'import_field13' 
			),
			'KMRin' => array( 
				'import_field14' 
			),
			'KMRout' => array( 
				'import_field15' 
			),
			'WOreqBy' => array( 
				'import_field16' 
			),
			'WOreqOn' => array( 
				'import_field17' 
			),
			'status' => array( 
				'import_field18' 
			),
			'workorder_id' => array( 
				'import_field19' 
			) 
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
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field',
					'import_field1',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13',
					'import_field14',
					'import_field15',
					'import_field16',
					'import_field17',
					'import_field18',
					'import_field19' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid',
				'import_field14' => 'grid',
				'import_field15' => 'grid',
				'import_field16' => 'grid',
				'import_field17' => 'grid',
				'import_field18' => 'grid',
				'import_field19' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field',
				'import_field1',
				'import_field2',
				'import_field3',
				'import_field4',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13',
				'import_field14',
				'import_field15',
				'import_field16',
				'import_field17',
				'import_field18',
				'import_field19' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'page' => array(
		'verticalBar' => false,
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
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
			'grid' => array( 
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
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'import-header',
			'grid' => array( 
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
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
			'grid' => array( 
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
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_field',
						'import_field1',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13',
						'import_field14',
						'import_field15',
						'import_field16',
						'import_field17',
						'import_field18',
						'import_field19' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field' => array(
			'field' => 'reqID',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'Station',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'region',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'vehNo',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'servicetype',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'description',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'KMR',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'requestedby',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'requestedon',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'arrivaltime',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'arrivaldate',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'vehType',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'chasisNo',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'repairInstruction',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'KMRin',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'KMRout',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'WOreqBy',
			'type' => 'import_field' 
		),
		'import_field17' => array(
			'field' => 'WOreqOn',
			'type' => 'import_field' 
		),
		'import_field18' => array(
			'field' => 'status',
			'type' => 'import_field' 
		),
		'import_field19' => array(
			'field' => 'workorder_id',
			'type' => 'import_field' 
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