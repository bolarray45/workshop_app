<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			'Station',
			'status',
			'year',
			'total' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'Station' => array( 
				'integrated_edit_field8',
				'integrated_edit_field',
				'integrated_edit_field9' 
			),
			'status' => array( 
				'integrated_edit_field22',
				'integrated_edit_field1',
				'integrated_edit_field23' 
			),
			'year' => array( 
				'edit_field',
				'edit_field_label' 
			),
			'total' => array( 
				'edit_field1',
				'edit_field_label1' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => true,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'below-grid' => array( 
					'view_back_list',
					'view_close',
					'hamburger' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'integrated_edit_field8',
					'integrated_edit_field',
					'integrated_edit_field9',
					'integrated_edit_field22',
					'integrated_edit_field1',
					'integrated_edit_field23',
					'edit_field_label',
					'edit_field',
					'edit_field_label1',
					'edit_field1' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'view_back_list' => 'below-grid',
				'view_close' => 'below-grid',
				'hamburger' => 'below-grid',
				'view_header' => 'top',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field22' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field23' => 'grid',
				'edit_field_label' => 'grid',
				'edit_field' => 'grid',
				'edit_field_label1' => 'grid',
				'edit_field1' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c4' 
				),
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c2' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c' 
				),
				'integrated_edit_field22' => array(
					'location' => 'grid',
					'cellId' => 'c22' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c23' 
				),
				'integrated_edit_field23' => array(
					'location' => 'grid',
					'cellId' => 'c24' 
				),
				'edit_field_label' => array(
					'location' => 'grid',
					'cellId' => 'c7' 
				),
				'edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c8' 
				),
				'edit_field_label1' => array(
					'location' => 'grid',
					'cellId' => 'c9' 
				),
				'edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c10' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'view_header' => array( 
				'view_header' 
			),
			'view_back_list' => array( 
				'view_back_list' 
			),
			'view_close' => array( 
				'view_close' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'view_edit' => array( 
				'view_edit' 
			),
			'edit_field_label' => array( 
				'integrated_edit_field8',
				'integrated_edit_field22',
				'edit_field_label',
				'edit_field_label1' 
			),
			'edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'edit_field',
				'edit_field1' 
			),
			'edit_field_tooltip' => array( 
				'integrated_edit_field9',
				'integrated_edit_field23' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'Station_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c2' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field9' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c5' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c6' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c19' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c20' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c21' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c22' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'status_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c23' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c24' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field23' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'year_fieldblock' 
						),
						'items' => array( 
							'edit_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c9' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'total_fieldblock' 
						),
						'items' => array( 
							'edit_field_label1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c10' => array(
						'cols' => array( 
							3,
							4,
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 6,
				'height' => 3 
			) 
		) 
	),
	'loginForm' => array(
		'loginForm' => 3 
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
	'misc' => array(
		'type' => 'view',
		'breadcrumb' => false,
		'nextPrev' => false 
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
	'id' => 'view',
	'type' => 'view',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'view-above-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1',
							'colspan' => 2 
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
		'below-grid' => array(
			'modelId' => 'view-below-grid',
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
						'view_back_list',
						'view_close' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'hamburger' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'view-header',
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
						'view_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c4' 
						),
						array(
							'cell' => 'c2' 
						),
						array(
							'cell' => 'c' 
						),
						array(
							'cell' => 'c5' 
						),
						array(
							'cell' => 'c3' 
						),
						array(
							'cell' => 'c6' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c19' 
						),
						array(
							'cell' => 'c20' 
						),
						array(
							'cell' => 'c21' 
						),
						array(
							'cell' => 'c22' 
						),
						array(
							'cell' => 'c23' 
						),
						array(
							'cell' => 'c24' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c7' 
						),
						array(
							'cell' => 'c8' 
						),
						array(
							'cell' => 'c9' 
						),
						array(
							'cell' => 'c10',
							'colspan' => 3 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field8' 
					),
					'field' => 'Station',
					'align' => 'left' 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field' 
					),
					'field' => 'Station' 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field9' 
					),
					'field' => 'Station' 
				),
				'c5' => array(
					'model' => 'c4',
					'items' => array( 
						 
					),
					'field' => 'vehNo',
					'align' => 'left' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'vehNo' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'vehNo' 
				),
				'c19' => array(
					'model' => 'c4',
					'items' => array( 
						 
					),
					'field' => 'requestedon',
					'align' => 'left' 
				),
				'c20' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'requestedon' 
				),
				'c21' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'requestedon' 
				),
				'c22' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field22' 
					),
					'field' => 'status',
					'align' => 'left' 
				),
				'c23' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field1' 
					),
					'field' => 'status' 
				),
				'c24' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field23' 
					),
					'field' => 'status' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field_label' 
					),
					'field' => 'year' 
				),
				'c8' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field' 
					),
					'field' => 'year' 
				),
				'c9' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field_label1' 
					),
					'field' => 'total' 
				),
				'c10' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field1' 
					),
					'field' => 'total' 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 2,
			'inlineLabels' => true,
			'separateLabels' => true 
		) 
	),
	'items' => array(
		'view_header' => array(
			'type' => 'view_header' 
		),
		'view_back_list' => array(
			'type' => 'view_back_list' 
		),
		'view_close' => array(
			'type' => 'view_close' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'view_edit' 
			) 
		),
		'view_edit' => array(
			'type' => 'view_edit' 
		),
		'integrated_edit_field8' => array(
			'type' => 'edit_field_label',
			'field' => 'Station' 
		),
		'integrated_edit_field' => array(
			'field' => 'Station',
			'type' => 'edit_field' 
		),
		'integrated_edit_field9' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'Station' 
		),
		'integrated_edit_field22' => array(
			'type' => 'edit_field_label',
			'field' => 'status' 
		),
		'integrated_edit_field1' => array(
			'field' => 'status',
			'type' => 'edit_field' 
		),
		'integrated_edit_field23' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'status' 
		),
		'edit_field' => array(
			'field' => 'year',
			'type' => 'edit_field' 
		),
		'edit_field_label' => array(
			'type' => 'edit_field_label',
			'field' => 'year' 
		),
		'edit_field1' => array(
			'field' => 'total',
			'type' => 'edit_field' 
		),
		'edit_field_label1' => array(
			'type' => 'edit_field_label',
			'field' => 'total' 
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