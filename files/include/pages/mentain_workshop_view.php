<?php
			$optionsArray = array(
	'pdf' => array(
		'pdfView' => false 
	),
	'details' => array(
		'crew_workdone' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list' 
		),
		'parts_used' => array(
			'displayPreview' => 1,
			'previewPageId' => 'list' 
		) 
	),
	'master' => array(
		'Vehicle Search' => array(
			'preview' => false 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			'Station',
			'vehNo',
			'vehType',
			'servicetype',
			'description',
			'KMR',
			'requestedon',
			'requestedby',
			'arrivaldate',
			'chasisNo',
			'repairInstruction',
			'WOreqOn',
			'workorder_id',
			'WOreqBy',
			'workDate',
			'partsUsed',
			'submittedby',
			'reccomendation',
			'submittedOn',
			'REGION' 
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
			'vehNo' => array( 
				'integrated_edit_field12',
				'integrated_edit_field2',
				'integrated_edit_field13' 
			),
			'vehType' => array( 
				'edit_field25',
				'edit_field1',
				'edit_field26' 
			),
			'servicetype' => array( 
				'integrated_edit_field14',
				'integrated_edit_field3',
				'integrated_edit_field15' 
			),
			'description' => array( 
				'integrated_edit_field16',
				'integrated_edit_field4',
				'integrated_edit_field17' 
			),
			'KMR' => array( 
				'integrated_edit_field18',
				'integrated_edit_field5',
				'integrated_edit_field19' 
			),
			'requestedon' => array( 
				'integrated_edit_field22',
				'integrated_edit_field7',
				'integrated_edit_field23' 
			),
			'requestedby' => array( 
				'integrated_edit_field20',
				'integrated_edit_field6',
				'integrated_edit_field21' 
			),
			'arrivaldate' => array( 
				'edit_field9',
				'edit_field',
				'edit_field10' 
			),
			'chasisNo' => array( 
				'edit_field11',
				'edit_field2',
				'edit_field12' 
			),
			'repairInstruction' => array( 
				'edit_field15',
				'edit_field3',
				'edit_field16' 
			),
			'WOreqOn' => array( 
				'edit_field21',
				'edit_field5',
				'edit_field22' 
			),
			'workorder_id' => array( 
				'edit_field_label',
				'integrated_edit_field29',
				'edit_field_tooltip' 
			),
			'WOreqBy' => array( 
				'edit_field19',
				'edit_field4',
				'edit_field20' 
			),
			'workDate' => array( 
				'integrated_edit_field30',
				'integrated_edit_field24',
				'integrated_edit_field31' 
			),
			'partsUsed' => array( 
				'integrated_edit_field32',
				'integrated_edit_field25',
				'integrated_edit_field33' 
			),
			'reccomendation' => array( 
				'integrated_edit_field34',
				'integrated_edit_field35',
				'integrated_edit_field26' 
			),
			'submittedby' => array( 
				'integrated_edit_field36',
				'integrated_edit_field27',
				'integrated_edit_field37' 
			),
			'submittedOn' => array( 
				'integrated_edit_field38',
				'integrated_edit_field28',
				'integrated_edit_field39' 
			),
			'REGION' => array( 
				'integrated_edit_field1',
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
					'custom_button' 
				),
				'below-grid' => array( 
					'view_back_list',
					'view_close',
					'custom_button1',
					'hamburger' 
				),
				'top' => array( 
					'view_header' 
				),
				'grid' => array( 
					'section',
					'section1',
					'section2',
					'section3',
					'section4' 
				),
				'section' => array( 
					'integrated_edit_field8',
					'integrated_edit_field',
					'integrated_edit_field9',
					'edit_field_label1',
					'integrated_edit_field1',
					'integrated_edit_field12',
					'integrated_edit_field2',
					'integrated_edit_field13',
					'edit_field25',
					'edit_field1',
					'edit_field26',
					'integrated_edit_field14',
					'integrated_edit_field3',
					'integrated_edit_field15',
					'integrated_edit_field16',
					'integrated_edit_field4',
					'integrated_edit_field17',
					'integrated_edit_field18',
					'integrated_edit_field5',
					'integrated_edit_field19',
					'integrated_edit_field22',
					'integrated_edit_field7',
					'integrated_edit_field23',
					'integrated_edit_field20',
					'integrated_edit_field6',
					'integrated_edit_field21' 
				),
				'section1' => array( 
					'edit_field9',
					'edit_field',
					'edit_field10',
					'edit_field11',
					'edit_field2',
					'edit_field12',
					'edit_field15',
					'edit_field3',
					'edit_field16',
					'edit_field21',
					'edit_field5',
					'edit_field22',
					'edit_field_label',
					'integrated_edit_field29',
					'edit_field_tooltip',
					'edit_field19',
					'edit_field4',
					'edit_field20' 
				),
				'section2' => array( 
					'integrated_edit_field30',
					'integrated_edit_field24',
					'integrated_edit_field31',
					'integrated_edit_field32',
					'integrated_edit_field25',
					'integrated_edit_field33',
					'integrated_edit_field34',
					'integrated_edit_field35',
					'integrated_edit_field36',
					'integrated_edit_field27',
					'integrated_edit_field37',
					'integrated_edit_field26',
					'integrated_edit_field38',
					'integrated_edit_field28',
					'integrated_edit_field39' 
				),
				'section3' => array( 
					'details_preview' 
				),
				'section4' => array( 
					'details_preview1' 
				) 
			),
			'formXtTags' => array(
				 
			),
			'itemForms' => array(
				'custom_button' => 'above-grid',
				'view_back_list' => 'below-grid',
				'view_close' => 'below-grid',
				'custom_button1' => 'below-grid',
				'hamburger' => 'below-grid',
				'view_header' => 'top',
				'section' => 'grid',
				'section1' => 'grid',
				'section2' => 'grid',
				'section3' => 'grid',
				'section4' => 'grid',
				'integrated_edit_field8' => 'section',
				'integrated_edit_field' => 'section',
				'integrated_edit_field9' => 'section',
				'edit_field_label1' => 'section',
				'integrated_edit_field1' => 'section',
				'integrated_edit_field12' => 'section',
				'integrated_edit_field2' => 'section',
				'integrated_edit_field13' => 'section',
				'edit_field25' => 'section',
				'edit_field1' => 'section',
				'edit_field26' => 'section',
				'integrated_edit_field14' => 'section',
				'integrated_edit_field3' => 'section',
				'integrated_edit_field15' => 'section',
				'integrated_edit_field16' => 'section',
				'integrated_edit_field4' => 'section',
				'integrated_edit_field17' => 'section',
				'integrated_edit_field18' => 'section',
				'integrated_edit_field5' => 'section',
				'integrated_edit_field19' => 'section',
				'integrated_edit_field22' => 'section',
				'integrated_edit_field7' => 'section',
				'integrated_edit_field23' => 'section',
				'integrated_edit_field20' => 'section',
				'integrated_edit_field6' => 'section',
				'integrated_edit_field21' => 'section',
				'edit_field9' => 'section1',
				'edit_field' => 'section1',
				'edit_field10' => 'section1',
				'edit_field11' => 'section1',
				'edit_field2' => 'section1',
				'edit_field12' => 'section1',
				'edit_field15' => 'section1',
				'edit_field3' => 'section1',
				'edit_field16' => 'section1',
				'edit_field21' => 'section1',
				'edit_field5' => 'section1',
				'edit_field22' => 'section1',
				'edit_field_label' => 'section1',
				'integrated_edit_field29' => 'section1',
				'edit_field_tooltip' => 'section1',
				'edit_field19' => 'section1',
				'edit_field4' => 'section1',
				'edit_field20' => 'section1',
				'integrated_edit_field30' => 'section2',
				'integrated_edit_field24' => 'section2',
				'integrated_edit_field31' => 'section2',
				'integrated_edit_field32' => 'section2',
				'integrated_edit_field25' => 'section2',
				'integrated_edit_field33' => 'section2',
				'integrated_edit_field34' => 'section2',
				'integrated_edit_field35' => 'section2',
				'integrated_edit_field36' => 'section2',
				'integrated_edit_field27' => 'section2',
				'integrated_edit_field37' => 'section2',
				'integrated_edit_field26' => 'section2',
				'integrated_edit_field38' => 'section2',
				'integrated_edit_field28' => 'section2',
				'integrated_edit_field39' => 'section2',
				'details_preview' => 'section3',
				'details_preview1' => 'section4' 
			),
			'itemLocations' => array(
				'section' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'section1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'section2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'section3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'section4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'section',
					'cellId' => 'c4' 
				),
				'integrated_edit_field' => array(
					'location' => 'section',
					'cellId' => 'c2' 
				),
				'integrated_edit_field9' => array(
					'location' => 'section',
					'cellId' => 'c' 
				),
				'edit_field_label1' => array(
					'location' => 'section',
					'cellId' => 'c5' 
				),
				'integrated_edit_field1' => array(
					'location' => 'section',
					'cellId' => 'c3' 
				),
				'integrated_edit_field12' => array(
					'location' => 'section',
					'cellId' => 'c7' 
				),
				'integrated_edit_field2' => array(
					'location' => 'section',
					'cellId' => 'c8' 
				),
				'integrated_edit_field13' => array(
					'location' => 'section',
					'cellId' => 'c9' 
				),
				'edit_field25' => array(
					'location' => 'section',
					'cellId' => 'c10' 
				),
				'edit_field1' => array(
					'location' => 'section',
					'cellId' => 'c11' 
				),
				'edit_field26' => array(
					'location' => 'section',
					'cellId' => 'c12' 
				),
				'integrated_edit_field14' => array(
					'location' => 'section',
					'cellId' => 'c13' 
				),
				'integrated_edit_field3' => array(
					'location' => 'section',
					'cellId' => 'c14' 
				),
				'integrated_edit_field15' => array(
					'location' => 'section',
					'cellId' => 'c15' 
				),
				'integrated_edit_field16' => array(
					'location' => 'section',
					'cellId' => 'c16' 
				),
				'integrated_edit_field4' => array(
					'location' => 'section',
					'cellId' => 'c17' 
				),
				'integrated_edit_field17' => array(
					'location' => 'section',
					'cellId' => 'c18' 
				),
				'integrated_edit_field18' => array(
					'location' => 'section',
					'cellId' => 'c19' 
				),
				'integrated_edit_field5' => array(
					'location' => 'section',
					'cellId' => 'c20' 
				),
				'integrated_edit_field19' => array(
					'location' => 'section',
					'cellId' => 'c21' 
				),
				'integrated_edit_field22' => array(
					'location' => 'section',
					'cellId' => 'c25' 
				),
				'integrated_edit_field7' => array(
					'location' => 'section',
					'cellId' => 'c26' 
				),
				'integrated_edit_field23' => array(
					'location' => 'section',
					'cellId' => 'c27' 
				),
				'integrated_edit_field20' => array(
					'location' => 'section',
					'cellId' => 'c28' 
				),
				'integrated_edit_field6' => array(
					'location' => 'section',
					'cellId' => 'c29' 
				),
				'integrated_edit_field21' => array(
					'location' => 'section',
					'cellId' => 'c30' 
				),
				'edit_field9' => array(
					'location' => 'section1',
					'cellId' => 'c4' 
				),
				'edit_field' => array(
					'location' => 'section1',
					'cellId' => 'c2' 
				),
				'edit_field10' => array(
					'location' => 'section1',
					'cellId' => 'c' 
				),
				'edit_field11' => array(
					'location' => 'section1',
					'cellId' => 'c5' 
				),
				'edit_field2' => array(
					'location' => 'section1',
					'cellId' => 'c3' 
				),
				'edit_field12' => array(
					'location' => 'section1',
					'cellId' => 'c6' 
				),
				'edit_field15' => array(
					'location' => 'section1',
					'cellId' => 'c7' 
				),
				'edit_field3' => array(
					'location' => 'section1',
					'cellId' => 'c8' 
				),
				'edit_field16' => array(
					'location' => 'section1',
					'cellId' => 'c9' 
				),
				'edit_field21' => array(
					'location' => 'section1',
					'cellId' => 'c10' 
				),
				'edit_field5' => array(
					'location' => 'section1',
					'cellId' => 'c11' 
				),
				'edit_field22' => array(
					'location' => 'section1',
					'cellId' => 'c12' 
				),
				'edit_field_label' => array(
					'location' => 'section1',
					'cellId' => 'c19' 
				),
				'integrated_edit_field29' => array(
					'location' => 'section1',
					'cellId' => 'c20' 
				),
				'edit_field_tooltip' => array(
					'location' => 'section1',
					'cellId' => 'c21' 
				),
				'edit_field19' => array(
					'location' => 'section1',
					'cellId' => 'c22' 
				),
				'edit_field4' => array(
					'location' => 'section1',
					'cellId' => 'c23' 
				),
				'edit_field20' => array(
					'location' => 'section1',
					'cellId' => 'c24' 
				),
				'integrated_edit_field30' => array(
					'location' => 'section2',
					'cellId' => 'c4' 
				),
				'integrated_edit_field24' => array(
					'location' => 'section2',
					'cellId' => 'c2' 
				),
				'integrated_edit_field31' => array(
					'location' => 'section2',
					'cellId' => 'c' 
				),
				'integrated_edit_field32' => array(
					'location' => 'section2',
					'cellId' => 'c5' 
				),
				'integrated_edit_field25' => array(
					'location' => 'section2',
					'cellId' => 'c3' 
				),
				'integrated_edit_field33' => array(
					'location' => 'section2',
					'cellId' => 'c6' 
				),
				'integrated_edit_field34' => array(
					'location' => 'section2',
					'cellId' => 'c7' 
				),
				'integrated_edit_field35' => array(
					'location' => 'section2',
					'cellId' => 'c9' 
				),
				'integrated_edit_field36' => array(
					'location' => 'section2',
					'cellId' => 'c10' 
				),
				'integrated_edit_field27' => array(
					'location' => 'section2',
					'cellId' => 'c11' 
				),
				'integrated_edit_field37' => array(
					'location' => 'section2',
					'cellId' => 'c12' 
				),
				'integrated_edit_field26' => array(
					'location' => 'section2',
					'cellId' => 'c14' 
				),
				'integrated_edit_field38' => array(
					'location' => 'section2',
					'cellId' => 'c16' 
				),
				'integrated_edit_field28' => array(
					'location' => 'section2',
					'cellId' => 'c17' 
				),
				'integrated_edit_field39' => array(
					'location' => 'section2',
					'cellId' => 'c18' 
				),
				'details_preview' => array(
					'location' => 'section3',
					'cellId' => 'c1' 
				),
				'details_preview1' => array(
					'location' => 'section4',
					'cellId' => 'c1' 
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
			'section' => array( 
				'section',
				'section1',
				'section2',
				'section3',
				'section4' 
			),
			'edit_field_label' => array( 
				'integrated_edit_field8',
				'integrated_edit_field12',
				'edit_field25',
				'integrated_edit_field14',
				'integrated_edit_field16',
				'integrated_edit_field18',
				'integrated_edit_field22',
				'integrated_edit_field20',
				'edit_field9',
				'edit_field11',
				'edit_field15',
				'edit_field21',
				'edit_field_label',
				'edit_field19',
				'integrated_edit_field30',
				'integrated_edit_field32',
				'integrated_edit_field34',
				'integrated_edit_field36',
				'integrated_edit_field38',
				'edit_field_label1' 
			),
			'edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field2',
				'edit_field1',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field7',
				'integrated_edit_field6',
				'edit_field',
				'edit_field2',
				'edit_field3',
				'edit_field5',
				'integrated_edit_field29',
				'edit_field4',
				'integrated_edit_field24',
				'integrated_edit_field25',
				'integrated_edit_field27',
				'integrated_edit_field26',
				'integrated_edit_field28',
				'integrated_edit_field1' 
			),
			'edit_field_tooltip' => array( 
				'integrated_edit_field9',
				'integrated_edit_field13',
				'edit_field26',
				'integrated_edit_field15',
				'integrated_edit_field17',
				'integrated_edit_field19',
				'integrated_edit_field23',
				'integrated_edit_field21',
				'edit_field10',
				'edit_field12',
				'edit_field16',
				'edit_field22',
				'edit_field_tooltip',
				'edit_field20',
				'integrated_edit_field31',
				'integrated_edit_field33',
				'integrated_edit_field35',
				'integrated_edit_field37',
				'integrated_edit_field39' 
			),
			'details_preview' => array( 
				'details_preview',
				'details_preview1' 
			),
			'custom_button' => array( 
				'custom_button1',
				'custom_button' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'section',
							'section1',
							'section2',
							'section3',
							'section4' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			),
			'section' => array(
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
							'REGION_fieldblock' 
						),
						'items' => array( 
							'edit_field_label1' 
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
							'integrated_edit_field1' 
						),
						'fixedAtServer' => true,
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
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'vehNo_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field2' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c9' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field13' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c10' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'vehType_fieldblock' 
						),
						'items' => array( 
							'edit_field25' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c11' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c12' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field26' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c13' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'servicetype_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c14' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field3' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c15' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field15' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c16' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'description_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c17' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2,
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field4' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c18' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field17' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c19' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							'KMR_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c20' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field5' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c21' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field19' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c22' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c24' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							3 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c25' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'requestedon_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c26' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field7' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c27' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field23' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c28' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							'requestedby_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c29' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field6' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c30' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							4 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field21' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 6,
				'height' => 5 
			),
			'section1' => array(
				'cells' => array(
					'c4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'arrivaldate_fieldblock' 
						),
						'items' => array( 
							'edit_field9' 
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
							'edit_field' 
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
							'edit_field10' 
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
							'chasisNo_fieldblock' 
						),
						'items' => array( 
							'edit_field11' 
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
							'edit_field2' 
						),
						'fixedAtServer' => true,
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
							'edit_field12' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'repairInstruction_fieldblock' 
						),
						'items' => array( 
							'edit_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c8' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field3' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c9' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field16' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c10' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'WOreqOn_fieldblock' 
						),
						'items' => array( 
							'edit_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c11' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field5' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c12' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field22' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c19' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'workorder_id_fieldblock' 
						),
						'items' => array( 
							'edit_field_label' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c20' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field29' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c21' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field_tooltip' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c22' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'WOreqBy_fieldblock' 
						),
						'items' => array( 
							'edit_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c23' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field4' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c24' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'edit_field20' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 6,
				'height' => 3 
			),
			'section2' => array(
				'cells' => array(
					'c4' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'workDate_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field30' 
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
							'integrated_edit_field24' 
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
							'integrated_edit_field31' 
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
							'partsUsed_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field32' 
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
							'integrated_edit_field25' 
						),
						'fixedAtServer' => true,
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
							'integrated_edit_field33' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c7' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'reccomendation_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field34' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c14' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1,
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field26' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c9' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field35' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c10' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'submittedby_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field36' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c11' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field27' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c12' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field37' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c13' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c15' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c16' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							'submittedOn_fieldblock' 
						),
						'items' => array( 
							'integrated_edit_field38' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'c17' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field28' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					),
					'c18' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							2 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field39' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 6,
				'height' => 3 
			),
			'section3' => array(
				'cells' => array(
					'c1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			),
			'section4' => array(
				'cells' => array(
					'c1' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'details_preview1' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
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
		'hasCustomButtons' => true,
		'customButtons' => array( 
			495749,
			495749 
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
			495749,
			495749 
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
						'custom_button' 
					),
					'align' => 'center' 
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
						'view_close',
						'custom_button1' 
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
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'section',
						'section1',
						'section2',
						'section3',
						'section4' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => true,
			'separateLabels' => false 
		),
		'section' => array(
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
							'cell' => 'c7' 
						),
						array(
							'cell' => 'c8' 
						),
						array(
							'cell' => 'c9' 
						),
						array(
							'cell' => 'c10' 
						),
						array(
							'cell' => 'c11' 
						),
						array(
							'cell' => 'c12' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c13' 
						),
						array(
							'cell' => 'c14' 
						),
						array(
							'cell' => 'c15' 
						),
						array(
							'cell' => 'c16' 
						),
						array(
							'cell' => 'c17',
							'rowspan' => 2 
						),
						array(
							'cell' => 'c18' 
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
							'cell' => 'c24' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c25' 
						),
						array(
							'cell' => 'c26' 
						),
						array(
							'cell' => 'c27' 
						),
						array(
							'cell' => 'c28' 
						),
						array(
							'cell' => 'c29' 
						),
						array(
							'cell' => 'c30' 
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
						'edit_field_label1' 
					),
					'field' => 'region',
					'align' => 'left' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field1' 
					),
					'field' => 'region' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'region' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field12' 
					),
					'field' => 'vehNo',
					'align' => 'left' 
				),
				'c8' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field2' 
					),
					'field' => 'vehNo' 
				),
				'c9' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field13' 
					),
					'field' => 'vehNo' 
				),
				'c10' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field25' 
					),
					'field' => 'vehType',
					'align' => 'left' 
				),
				'c11' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field1' 
					),
					'field' => 'vehType' 
				),
				'c12' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field26' 
					),
					'field' => 'vehType' 
				),
				'c13' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field14' 
					),
					'field' => 'servicetype',
					'align' => 'left' 
				),
				'c14' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field3' 
					),
					'field' => 'servicetype' 
				),
				'c15' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field15' 
					),
					'field' => 'servicetype' 
				),
				'c16' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field16' 
					),
					'field' => 'description',
					'align' => 'left' 
				),
				'c17' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field4' 
					),
					'field' => 'description' 
				),
				'c18' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field17' 
					),
					'field' => 'description' 
				),
				'c19' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field18' 
					),
					'field' => 'KMR',
					'align' => 'left' 
				),
				'c20' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field5' 
					),
					'field' => 'KMR' 
				),
				'c21' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field19' 
					),
					'field' => 'KMR' 
				),
				'c22' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'requestedby',
					'align' => 'left' 
				),
				'c24' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'requestedby' 
				),
				'c25' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field22' 
					),
					'field' => 'requestedon',
					'align' => 'left' 
				),
				'c26' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field7' 
					),
					'field' => 'requestedon' 
				),
				'c27' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field23' 
					),
					'field' => 'requestedon' 
				),
				'c28' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field20' 
					),
					'align' => 'left' 
				),
				'c29' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field6' 
					) 
				),
				'c30' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field21' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 2,
			'inlineLabels' => true,
			'separateLabels' => true 
		),
		'section1' => array(
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
							'cell' => 'c7' 
						),
						array(
							'cell' => 'c8' 
						),
						array(
							'cell' => 'c9' 
						),
						array(
							'cell' => 'c10' 
						),
						array(
							'cell' => 'c11' 
						),
						array(
							'cell' => 'c12' 
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
				) 
			),
			'cells' => array(
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field9' 
					),
					'field' => 'arrivaldate',
					'align' => 'left' 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field' 
					),
					'field' => 'arrivaldate' 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field10' 
					),
					'field' => 'arrivaldate' 
				),
				'c5' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field11' 
					),
					'field' => 'chasisNo',
					'align' => 'left' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field2' 
					),
					'field' => 'chasisNo' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field12' 
					),
					'field' => 'chasisNo' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field15' 
					),
					'field' => 'garage',
					'align' => 'left' 
				),
				'c8' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field3' 
					),
					'field' => 'garage' 
				),
				'c9' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field16' 
					),
					'field' => 'garage' 
				),
				'c10' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field21' 
					),
					'field' => 'repairInstruction',
					'align' => 'left' 
				),
				'c11' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field5' 
					),
					'field' => 'repairInstruction' 
				),
				'c12' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field22' 
					),
					'field' => 'repairInstruction' 
				),
				'c19' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field_label' 
					),
					'field' => 'WOreqOn',
					'align' => 'left' 
				),
				'c20' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field29' 
					),
					'field' => 'WOreqOn' 
				),
				'c21' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field_tooltip' 
					),
					'field' => 'WOreqOn' 
				),
				'c22' => array(
					'model' => 'c4',
					'items' => array( 
						'edit_field19' 
					),
					'align' => 'left' 
				),
				'c23' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field4' 
					) 
				),
				'c24' => array(
					'model' => 'c2',
					'items' => array( 
						'edit_field20' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 2,
			'inlineLabels' => true,
			'separateLabels' => true 
		),
		'section2' => array(
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
							'cell' => 'c7' 
						),
						array(
							'cell' => 'c14',
							'rowspan' => 2 
						),
						array(
							'cell' => 'c9' 
						),
						array(
							'cell' => 'c10' 
						),
						array(
							'cell' => 'c11' 
						),
						array(
							'cell' => 'c12' 
						) 
					),
					'section' => '' 
				),
				array(
					'cells' => array( 
						array(
							'cell' => 'c13' 
						),
						array(
							'cell' => 'c15' 
						),
						array(
							'cell' => 'c16' 
						),
						array(
							'cell' => 'c17' 
						),
						array(
							'cell' => 'c18' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c4' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field30' 
					),
					'field' => 'workDate',
					'align' => 'left' 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field24' 
					),
					'field' => 'workDate' 
				),
				'c' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field31' 
					),
					'field' => 'workDate' 
				),
				'c5' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field32' 
					),
					'field' => 'partsUsed',
					'align' => 'left' 
				),
				'c3' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field25' 
					),
					'field' => 'partsUsed' 
				),
				'c6' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field33' 
					),
					'field' => 'partsUsed' 
				),
				'c7' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field34' 
					),
					'field' => 'reccomendation',
					'align' => 'left' 
				),
				'c9' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field35' 
					),
					'field' => 'reccomendation' 
				),
				'c10' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field36' 
					),
					'field' => 'submittedby',
					'align' => 'left' 
				),
				'c11' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field27' 
					),
					'field' => 'submittedby' 
				),
				'c12' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field37' 
					),
					'field' => 'submittedby' 
				),
				'c13' => array(
					'model' => 'c4',
					'items' => array( 
						 
					),
					'field' => 'submittedOn',
					'align' => 'left' 
				),
				'c14' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field26' 
					),
					'field' => 'submittedOn' 
				),
				'c15' => array(
					'model' => 'c2',
					'items' => array( 
						 
					),
					'field' => 'submittedOn' 
				),
				'c16' => array(
					'model' => 'c4',
					'items' => array( 
						'integrated_edit_field38' 
					),
					'align' => 'left' 
				),
				'c17' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field28' 
					) 
				),
				'c18' => array(
					'model' => 'c2',
					'items' => array( 
						'integrated_edit_field39' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 2,
			'inlineLabels' => true,
			'separateLabels' => true 
		),
		'section3' => array(
			'modelId' => 'simple-edit',
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
						'details_preview' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		),
		'section4' => array(
			'modelId' => 'simple-edit',
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
						'details_preview1' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
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
			'type' => 'view_close',
			'icon' => array(
				 
			) 
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
		'section' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'SERVICE REQUEST  DETAILS' 
			),
			'location' => 'section',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'integrated_edit_field8' => array(
			'type' => 'edit_field_label',
			'field' => 'Station' 
		),
		'integrated_edit_field' => array(
			'field' => 'Station',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field9' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'Station' 
		),
		'integrated_edit_field12' => array(
			'type' => 'edit_field_label',
			'field' => 'vehNo' 
		),
		'integrated_edit_field2' => array(
			'field' => 'vehNo',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field13' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'vehNo' 
		),
		'edit_field25' => array(
			'type' => 'edit_field_label',
			'field' => 'vehType' 
		),
		'edit_field1' => array(
			'field' => 'vehType',
			'type' => 'edit_field' 
		),
		'edit_field26' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'vehType' 
		),
		'integrated_edit_field14' => array(
			'type' => 'edit_field_label',
			'field' => 'servicetype' 
		),
		'integrated_edit_field3' => array(
			'field' => 'servicetype',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field15' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'servicetype' 
		),
		'integrated_edit_field16' => array(
			'type' => 'edit_field_label',
			'field' => 'description' 
		),
		'integrated_edit_field4' => array(
			'field' => 'description',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field17' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'description' 
		),
		'integrated_edit_field18' => array(
			'type' => 'edit_field_label',
			'field' => 'KMR' 
		),
		'integrated_edit_field5' => array(
			'field' => 'KMR',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field19' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'KMR' 
		),
		'integrated_edit_field22' => array(
			'type' => 'edit_field_label',
			'field' => 'requestedon' 
		),
		'integrated_edit_field7' => array(
			'field' => 'requestedon',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field23' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'requestedon' 
		),
		'integrated_edit_field20' => array(
			'type' => 'edit_field_label',
			'field' => 'requestedby' 
		),
		'integrated_edit_field6' => array(
			'field' => 'requestedby',
			'type' => 'edit_field',
			'updateOnEdit' => false 
		),
		'integrated_edit_field21' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'requestedby' 
		),
		'section1' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'WORK ORDER DETAILS' 
			),
			'location' => 'section1',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'edit_field9' => array(
			'type' => 'edit_field_label',
			'field' => 'arrivaldate' 
		),
		'edit_field' => array(
			'field' => 'arrivaldate',
			'type' => 'edit_field' 
		),
		'edit_field10' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'arrivaldate' 
		),
		'edit_field11' => array(
			'type' => 'edit_field_label',
			'field' => 'chasisNo' 
		),
		'edit_field2' => array(
			'field' => 'chasisNo',
			'type' => 'edit_field' 
		),
		'edit_field12' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'chasisNo' 
		),
		'edit_field15' => array(
			'type' => 'edit_field_label',
			'field' => 'repairInstruction' 
		),
		'edit_field3' => array(
			'field' => 'repairInstruction',
			'type' => 'edit_field' 
		),
		'edit_field16' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'repairInstruction' 
		),
		'edit_field21' => array(
			'type' => 'edit_field_label',
			'field' => 'WOreqOn',
			'label' => array(
				'field' => 'WOreqOn',
				'table' => 'mentain_workorder',
				'type' => 3 
			) 
		),
		'edit_field5' => array(
			'field' => 'WOreqOn',
			'type' => 'edit_field' 
		),
		'edit_field22' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'WOreqOn' 
		),
		'edit_field_label' => array(
			'type' => 'edit_field_label',
			'field' => 'workorder_id',
			'separated' => true 
		),
		'integrated_edit_field29' => array(
			'field' => 'workorder_id',
			'type' => 'edit_field',
			'orientation' => 1,
			'joined' => false,
			'separated' => true 
		),
		'edit_field_tooltip' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'workorder_id',
			'separated' => true 
		),
		'edit_field19' => array(
			'type' => 'edit_field_label',
			'field' => 'WOreqBy',
			'label' => array(
				'field' => 'WOreqBy',
				'table' => 'mentain_workorder',
				'type' => 3 
			) 
		),
		'edit_field4' => array(
			'field' => 'WOreqBy',
			'type' => 'edit_field' 
		),
		'edit_field20' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'WOreqBy' 
		),
		'section2' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'ACTUAL WORK DONE' 
			),
			'location' => 'section2',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'integrated_edit_field30' => array(
			'type' => 'edit_field_label',
			'field' => 'workDate' 
		),
		'integrated_edit_field24' => array(
			'field' => 'workDate',
			'type' => 'edit_field' 
		),
		'integrated_edit_field31' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'workDate' 
		),
		'integrated_edit_field32' => array(
			'type' => 'edit_field_label',
			'field' => 'partsUsed' 
		),
		'integrated_edit_field25' => array(
			'field' => 'partsUsed',
			'type' => 'edit_field' 
		),
		'integrated_edit_field33' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'partsUsed' 
		),
		'integrated_edit_field34' => array(
			'type' => 'edit_field_label',
			'field' => 'reccomendation' 
		),
		'integrated_edit_field35' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'reccomendation' 
		),
		'integrated_edit_field36' => array(
			'type' => 'edit_field_label',
			'field' => 'submittedby' 
		),
		'integrated_edit_field27' => array(
			'field' => 'submittedby',
			'type' => 'edit_field' 
		),
		'integrated_edit_field37' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'submittedby' 
		),
		'integrated_edit_field26' => array(
			'field' => 'reccomendation',
			'type' => 'edit_field' 
		),
		'integrated_edit_field38' => array(
			'type' => 'edit_field_label',
			'field' => 'submittedOn' 
		),
		'integrated_edit_field28' => array(
			'field' => 'submittedOn',
			'type' => 'edit_field' 
		),
		'integrated_edit_field39' => array(
			'type' => 'edit_field_tooltip',
			'field' => 'submittedOn' 
		),
		'section3' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'CREW THAT WORKED ON THE VEHICLE' 
			),
			'location' => 'section3',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'details_preview' => array(
			'type' => 'details_preview',
			'table' => 496336,
			'items' => array( 
				 
			),
			'popup' => false,
			'pageId' => 'list' 
		),
		'section4' => array(
			'type' => 'section',
			'title' => array(
				'type' => 0,
				'text' => 'SPARE PARTS/CONSUMABLES USED' 
			),
			'location' => 'section4',
			'bsStyle' => 'default',
			'panelType' => 3 
		),
		'details_preview1' => array(
			'type' => 'details_preview',
			'table' => 496390,
			'items' => array( 
				 
			),
			'popup' => false,
			'pageId' => 'list' 
		),
		'custom_button1' => array(
			'type' => 'custom_button',
			'eventGid' => 495749,
			'label' => array(
				'type' => 0,
				'text' => ' Finsih & Submit Final' 
			),
			'icon' => array(
				'glyph' => 'send' 
			),
			'buttonSize' => 'normal',
			'buttonStyle' => 'success',
			'tooltip' => array(
				'type' => 0,
				'text' => 'Click to submit as final record...' 
			) 
		),
		'custom_button' => array(
			'type' => 'custom_button',
			'eventGid' => 495749,
			'label' => array(
				'type' => 0,
				'text' => ' Finsih & Submit Final' 
			),
			'icon' => array(
				'glyph' => 'send' 
			),
			'buttonStyle' => 'success',
			'buttonSize' => 'normal',
			'tooltip' => array(
				'type' => 0,
				'text' => 'Click to submit as final record...' 
			) 
		),
		'integrated_edit_field1' => array(
			'field' => 'REGION',
			'type' => 'edit_field',
			'orientation' => 1,
			'joined' => false,
			'separated' => true 
		),
		'edit_field_label1' => array(
			'type' => 'edit_field_label',
			'field' => 'REGION',
			'separated' => true 
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