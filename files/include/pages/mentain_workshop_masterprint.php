<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
			'reqID',
			'Station',
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
			'workorder_id',
			'workDate',
			'partsUsed',
			'reccomendation',
			'submittedby',
			'submittedOn',
			'total_days_at_wkshop',
			'REGION',
			'REGION_ID' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'reqID' => array( 
				'simple_grid_field',
				'simple_grid_field27' 
			),
			'Station' => array( 
				'simple_grid_field1',
				'simple_grid_field28' 
			),
			'vehNo' => array( 
				'simple_grid_field3',
				'simple_grid_field29' 
			),
			'servicetype' => array( 
				'simple_grid_field4',
				'simple_grid_field30' 
			),
			'description' => array( 
				'simple_grid_field5',
				'simple_grid_field31' 
			),
			'KMR' => array( 
				'simple_grid_field6',
				'simple_grid_field32' 
			),
			'requestedby' => array( 
				'simple_grid_field7',
				'simple_grid_field33' 
			),
			'requestedon' => array( 
				'simple_grid_field8',
				'simple_grid_field34' 
			),
			'arrivaltime' => array( 
				'simple_grid_field9',
				'simple_grid_field35' 
			),
			'arrivaldate' => array( 
				'simple_grid_field10',
				'simple_grid_field36' 
			),
			'vehType' => array( 
				'simple_grid_field11',
				'simple_grid_field37' 
			),
			'chasisNo' => array( 
				'simple_grid_field12',
				'simple_grid_field38' 
			),
			'repairInstruction' => array( 
				'simple_grid_field13',
				'simple_grid_field39' 
			),
			'KMRin' => array( 
				'simple_grid_field14',
				'simple_grid_field40' 
			),
			'KMRout' => array( 
				'simple_grid_field15',
				'simple_grid_field41' 
			),
			'WOreqBy' => array( 
				'simple_grid_field16',
				'simple_grid_field42' 
			),
			'WOreqOn' => array( 
				'simple_grid_field17',
				'simple_grid_field43' 
			),
			'status' => array( 
				'simple_grid_field18',
				'simple_grid_field44' 
			),
			'workorder_id' => array( 
				'simple_grid_field19',
				'simple_grid_field45' 
			),
			'workDate' => array( 
				'simple_grid_field20',
				'simple_grid_field46' 
			),
			'partsUsed' => array( 
				'simple_grid_field21',
				'simple_grid_field47' 
			),
			'reccomendation' => array( 
				'simple_grid_field22',
				'simple_grid_field48' 
			),
			'submittedby' => array( 
				'simple_grid_field23',
				'simple_grid_field49' 
			),
			'submittedOn' => array( 
				'simple_grid_field24',
				'simple_grid_field50' 
			),
			'total_days_at_wkshop' => array( 
				'simple_grid_field25',
				'simple_grid_field51' 
			),
			'REGION' => array( 
				'simple_grid_field2',
				'simple_grid_field52' 
			),
			'REGION_ID' => array( 
				'simple_grid_field26',
				'simple_grid_field53' 
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
				'above-grid' => array( 
					'inline_add' 
				),
				'below-grid' => array( 
					 
				),
				'top' => array( 
					'masterprint_header' 
				),
				'grid' => array( 
					'simple_grid_field27',
					'simple_grid_field',
					'simple_grid_field28',
					'simple_grid_field1',
					'simple_grid_field29',
					'simple_grid_field3',
					'simple_grid_field30',
					'simple_grid_field4',
					'simple_grid_field31',
					'simple_grid_field5',
					'simple_grid_field32',
					'simple_grid_field6',
					'simple_grid_field33',
					'simple_grid_field7',
					'simple_grid_field34',
					'simple_grid_field8',
					'simple_grid_field35',
					'simple_grid_field9',
					'simple_grid_field36',
					'simple_grid_field10',
					'simple_grid_field37',
					'simple_grid_field11',
					'simple_grid_field38',
					'simple_grid_field12',
					'simple_grid_field39',
					'simple_grid_field13',
					'simple_grid_field40',
					'simple_grid_field14',
					'simple_grid_field41',
					'simple_grid_field15',
					'simple_grid_field42',
					'simple_grid_field16',
					'simple_grid_field43',
					'simple_grid_field17',
					'simple_grid_field44',
					'simple_grid_field18',
					'simple_grid_field45',
					'simple_grid_field19',
					'simple_grid_field46',
					'simple_grid_field20',
					'simple_grid_field47',
					'simple_grid_field21',
					'simple_grid_field48',
					'simple_grid_field22',
					'simple_grid_field49',
					'simple_grid_field23',
					'simple_grid_field50',
					'simple_grid_field24',
					'simple_grid_field51',
					'simple_grid_field25',
					'simple_grid_field52',
					'simple_grid_field2',
					'simple_grid_field53',
					'simple_grid_field26',
					'grid_inline_cancel' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'inlineadd_link' 
				),
				'below-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'inline_add' => 'above-grid',
				'masterprint_header' => 'top',
				'simple_grid_field27' => 'grid',
				'simple_grid_field' => 'grid',
				'simple_grid_field28' => 'grid',
				'simple_grid_field1' => 'grid',
				'simple_grid_field29' => 'grid',
				'simple_grid_field3' => 'grid',
				'simple_grid_field30' => 'grid',
				'simple_grid_field4' => 'grid',
				'simple_grid_field31' => 'grid',
				'simple_grid_field5' => 'grid',
				'simple_grid_field32' => 'grid',
				'simple_grid_field6' => 'grid',
				'simple_grid_field33' => 'grid',
				'simple_grid_field7' => 'grid',
				'simple_grid_field34' => 'grid',
				'simple_grid_field8' => 'grid',
				'simple_grid_field35' => 'grid',
				'simple_grid_field9' => 'grid',
				'simple_grid_field36' => 'grid',
				'simple_grid_field10' => 'grid',
				'simple_grid_field37' => 'grid',
				'simple_grid_field11' => 'grid',
				'simple_grid_field38' => 'grid',
				'simple_grid_field12' => 'grid',
				'simple_grid_field39' => 'grid',
				'simple_grid_field13' => 'grid',
				'simple_grid_field40' => 'grid',
				'simple_grid_field14' => 'grid',
				'simple_grid_field41' => 'grid',
				'simple_grid_field15' => 'grid',
				'simple_grid_field42' => 'grid',
				'simple_grid_field16' => 'grid',
				'simple_grid_field43' => 'grid',
				'simple_grid_field17' => 'grid',
				'simple_grid_field44' => 'grid',
				'simple_grid_field18' => 'grid',
				'simple_grid_field45' => 'grid',
				'simple_grid_field19' => 'grid',
				'simple_grid_field46' => 'grid',
				'simple_grid_field20' => 'grid',
				'simple_grid_field47' => 'grid',
				'simple_grid_field21' => 'grid',
				'simple_grid_field48' => 'grid',
				'simple_grid_field22' => 'grid',
				'simple_grid_field49' => 'grid',
				'simple_grid_field23' => 'grid',
				'simple_grid_field50' => 'grid',
				'simple_grid_field24' => 'grid',
				'simple_grid_field51' => 'grid',
				'simple_grid_field25' => 'grid',
				'simple_grid_field52' => 'grid',
				'simple_grid_field2' => 'grid',
				'simple_grid_field53' => 'grid',
				'simple_grid_field26' => 'grid',
				'grid_inline_cancel' => 'grid' 
			),
			'itemLocations' => array(
				'simple_grid_field27' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field' 
				),
				'simple_grid_field' => array(
					'location' => 'grid',
					'cellId' => 'cell_field' 
				),
				'simple_grid_field28' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field1' 
				),
				'simple_grid_field1' => array(
					'location' => 'grid',
					'cellId' => 'cell_field1' 
				),
				'simple_grid_field29' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field2' 
				),
				'simple_grid_field3' => array(
					'location' => 'grid',
					'cellId' => 'cell_field2' 
				),
				'simple_grid_field30' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field3' 
				),
				'simple_grid_field4' => array(
					'location' => 'grid',
					'cellId' => 'cell_field3' 
				),
				'simple_grid_field31' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field4' 
				),
				'simple_grid_field5' => array(
					'location' => 'grid',
					'cellId' => 'cell_field4' 
				),
				'simple_grid_field32' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field5' 
				),
				'simple_grid_field6' => array(
					'location' => 'grid',
					'cellId' => 'cell_field5' 
				),
				'simple_grid_field33' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field6' 
				),
				'simple_grid_field7' => array(
					'location' => 'grid',
					'cellId' => 'cell_field6' 
				),
				'simple_grid_field34' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field7' 
				),
				'simple_grid_field8' => array(
					'location' => 'grid',
					'cellId' => 'cell_field7' 
				),
				'simple_grid_field35' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field8' 
				),
				'simple_grid_field9' => array(
					'location' => 'grid',
					'cellId' => 'cell_field8' 
				),
				'simple_grid_field36' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field9' 
				),
				'simple_grid_field10' => array(
					'location' => 'grid',
					'cellId' => 'cell_field9' 
				),
				'simple_grid_field37' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field10' 
				),
				'simple_grid_field11' => array(
					'location' => 'grid',
					'cellId' => 'cell_field10' 
				),
				'simple_grid_field38' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field11' 
				),
				'simple_grid_field12' => array(
					'location' => 'grid',
					'cellId' => 'cell_field11' 
				),
				'simple_grid_field39' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field12' 
				),
				'simple_grid_field13' => array(
					'location' => 'grid',
					'cellId' => 'cell_field12' 
				),
				'simple_grid_field40' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field13' 
				),
				'simple_grid_field14' => array(
					'location' => 'grid',
					'cellId' => 'cell_field13' 
				),
				'simple_grid_field41' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field14' 
				),
				'simple_grid_field15' => array(
					'location' => 'grid',
					'cellId' => 'cell_field14' 
				),
				'simple_grid_field42' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field15' 
				),
				'simple_grid_field16' => array(
					'location' => 'grid',
					'cellId' => 'cell_field15' 
				),
				'simple_grid_field43' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field16' 
				),
				'simple_grid_field17' => array(
					'location' => 'grid',
					'cellId' => 'cell_field16' 
				),
				'simple_grid_field44' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field17' 
				),
				'simple_grid_field18' => array(
					'location' => 'grid',
					'cellId' => 'cell_field17' 
				),
				'simple_grid_field45' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field18' 
				),
				'simple_grid_field19' => array(
					'location' => 'grid',
					'cellId' => 'cell_field18' 
				),
				'simple_grid_field46' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field19' 
				),
				'simple_grid_field20' => array(
					'location' => 'grid',
					'cellId' => 'cell_field19' 
				),
				'simple_grid_field47' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field20' 
				),
				'simple_grid_field21' => array(
					'location' => 'grid',
					'cellId' => 'cell_field20' 
				),
				'simple_grid_field48' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field21' 
				),
				'simple_grid_field22' => array(
					'location' => 'grid',
					'cellId' => 'cell_field21' 
				),
				'simple_grid_field49' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field22' 
				),
				'simple_grid_field23' => array(
					'location' => 'grid',
					'cellId' => 'cell_field22' 
				),
				'simple_grid_field50' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field23' 
				),
				'simple_grid_field24' => array(
					'location' => 'grid',
					'cellId' => 'cell_field23' 
				),
				'simple_grid_field51' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field24' 
				),
				'simple_grid_field25' => array(
					'location' => 'grid',
					'cellId' => 'cell_field24' 
				),
				'simple_grid_field52' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field25' 
				),
				'simple_grid_field2' => array(
					'location' => 'grid',
					'cellId' => 'cell_field25' 
				),
				'simple_grid_field53' => array(
					'location' => 'grid',
					'cellId' => 'headcell_field26' 
				),
				'simple_grid_field26' => array(
					'location' => 'grid',
					'cellId' => 'cell_field26' 
				),
				'grid_inline_cancel' => array(
					'location' => 'grid',
					'cellId' => 'cell_icons' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'masterprint_header' => array( 
				'masterprint_header' 
			),
			'grid_field' => array( 
				'simple_grid_field',
				'simple_grid_field1',
				'simple_grid_field3',
				'simple_grid_field4',
				'simple_grid_field5',
				'simple_grid_field6',
				'simple_grid_field7',
				'simple_grid_field8',
				'simple_grid_field9',
				'simple_grid_field10',
				'simple_grid_field11',
				'simple_grid_field12',
				'simple_grid_field13',
				'simple_grid_field14',
				'simple_grid_field15',
				'simple_grid_field16',
				'simple_grid_field17',
				'simple_grid_field18',
				'simple_grid_field19',
				'simple_grid_field20',
				'simple_grid_field21',
				'simple_grid_field22',
				'simple_grid_field23',
				'simple_grid_field24',
				'simple_grid_field25',
				'simple_grid_field2',
				'simple_grid_field26' 
			),
			'grid_field_label' => array( 
				'simple_grid_field27',
				'simple_grid_field28',
				'simple_grid_field29',
				'simple_grid_field30',
				'simple_grid_field31',
				'simple_grid_field32',
				'simple_grid_field33',
				'simple_grid_field34',
				'simple_grid_field35',
				'simple_grid_field36',
				'simple_grid_field37',
				'simple_grid_field38',
				'simple_grid_field39',
				'simple_grid_field40',
				'simple_grid_field41',
				'simple_grid_field42',
				'simple_grid_field43',
				'simple_grid_field44',
				'simple_grid_field45',
				'simple_grid_field46',
				'simple_grid_field47',
				'simple_grid_field48',
				'simple_grid_field49',
				'simple_grid_field50',
				'simple_grid_field51',
				'simple_grid_field52',
				'simple_grid_field53' 
			),
			'inline_add' => array( 
				'inline_add' 
			),
			'grid_inline_cancel' => array( 
				'grid_inline_cancel' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'headcell_icons' => array(
						'cols' => array( 
							0 
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
					'headcell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'reqID_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field27' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'Station_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field28' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'vehNo_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field29' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'servicetype_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field30' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'description_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field31' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'KMR_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field32' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field6' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'requestedby_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field33' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field7' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'requestedon_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field34' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field8' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'arrivaltime_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field35' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field9' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'arrivaldate_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field36' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field10' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'vehType_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field37' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field11' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'chasisNo_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field38' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field12' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'repairInstruction_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field39' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field13' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'KMRin_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field40' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field14' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'KMRout_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field41' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field15' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'WOreqBy_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field42' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field16' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'WOreqOn_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field43' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field17' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'status_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field44' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field18' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'workorder_id_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field45' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field19' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'workDate_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field46' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field20' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'partsUsed_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field47' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field21' => array(
						'cols' => array( 
							22 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'reccomendation_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field48' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field22' => array(
						'cols' => array( 
							23 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'submittedby_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field49' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field23' => array(
						'cols' => array( 
							24 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'submittedOn_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field50' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field24' => array(
						'cols' => array( 
							25 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'total_days_at_wkshop_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field51' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field25' => array(
						'cols' => array( 
							26 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'REGION_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field52' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'headcell_field26' => array(
						'cols' => array( 
							27 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							'REGION_ID_fieldheadercolumn' 
						),
						'items' => array( 
							'simple_grid_field53' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_icons' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'inline_cancel' 
						),
						'items' => array( 
							'grid_inline_cancel' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field' => array(
						'cols' => array( 
							1 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'reqID_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field1' => array(
						'cols' => array( 
							2 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'Station_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field1' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field2' => array(
						'cols' => array( 
							3 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'vehNo_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field3' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field3' => array(
						'cols' => array( 
							4 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'servicetype_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field4' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field4' => array(
						'cols' => array( 
							5 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'description_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field5' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field5' => array(
						'cols' => array( 
							6 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'KMR_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field6' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field6' => array(
						'cols' => array( 
							7 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'requestedby_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field7' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field7' => array(
						'cols' => array( 
							8 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'requestedon_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field8' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field8' => array(
						'cols' => array( 
							9 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'arrivaltime_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field9' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field9' => array(
						'cols' => array( 
							10 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'arrivaldate_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field10' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field10' => array(
						'cols' => array( 
							11 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'vehType_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field11' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field11' => array(
						'cols' => array( 
							12 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'chasisNo_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field12' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field12' => array(
						'cols' => array( 
							13 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'repairInstruction_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field13' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field13' => array(
						'cols' => array( 
							14 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'KMRin_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field14' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field14' => array(
						'cols' => array( 
							15 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'KMRout_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field15' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field15' => array(
						'cols' => array( 
							16 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'WOreqBy_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field16' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field16' => array(
						'cols' => array( 
							17 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'WOreqOn_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field17' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field17' => array(
						'cols' => array( 
							18 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'status_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field18' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field18' => array(
						'cols' => array( 
							19 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'workorder_id_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field19' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field19' => array(
						'cols' => array( 
							20 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'workDate_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field20' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field20' => array(
						'cols' => array( 
							21 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'partsUsed_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field21' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field21' => array(
						'cols' => array( 
							22 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'reccomendation_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field22' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field22' => array(
						'cols' => array( 
							23 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'submittedby_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field23' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field23' => array(
						'cols' => array( 
							24 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'submittedOn_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field24' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field24' => array(
						'cols' => array( 
							25 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'total_days_at_wkshop_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field25' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field25' => array(
						'cols' => array( 
							26 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'REGION_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field2' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'cell_field26' => array(
						'cols' => array( 
							27 
						),
						'rows' => array( 
							1 
						),
						'tags' => array( 
							'REGION_ID_fieldcolumn' 
						),
						'items' => array( 
							'simple_grid_field26' 
						),
						'fixedAtServer' => false,
						'fixedAtClient' => false 
					),
					'footcell_icons' => array(
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
					'footcell_field' => array(
						'cols' => array( 
							1 
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
					'footcell_field1' => array(
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
					'footcell_field2' => array(
						'cols' => array( 
							3 
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
					'footcell_field3' => array(
						'cols' => array( 
							4 
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
					'footcell_field4' => array(
						'cols' => array( 
							5 
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
					'footcell_field5' => array(
						'cols' => array( 
							6 
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
					'footcell_field6' => array(
						'cols' => array( 
							7 
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
					'footcell_field7' => array(
						'cols' => array( 
							8 
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
					'footcell_field8' => array(
						'cols' => array( 
							9 
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
					'footcell_field9' => array(
						'cols' => array( 
							10 
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
					'footcell_field10' => array(
						'cols' => array( 
							11 
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
					'footcell_field11' => array(
						'cols' => array( 
							12 
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
					'footcell_field12' => array(
						'cols' => array( 
							13 
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
					'footcell_field13' => array(
						'cols' => array( 
							14 
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
					'footcell_field14' => array(
						'cols' => array( 
							15 
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
					'footcell_field15' => array(
						'cols' => array( 
							16 
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
					'footcell_field16' => array(
						'cols' => array( 
							17 
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
					'footcell_field17' => array(
						'cols' => array( 
							18 
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
					'footcell_field18' => array(
						'cols' => array( 
							19 
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
					'footcell_field19' => array(
						'cols' => array( 
							20 
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
					'footcell_field20' => array(
						'cols' => array( 
							21 
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
					'footcell_field21' => array(
						'cols' => array( 
							22 
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
					'footcell_field22' => array(
						'cols' => array( 
							23 
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
					'footcell_field23' => array(
						'cols' => array( 
							24 
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
					'footcell_field24' => array(
						'cols' => array( 
							25 
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
					'footcell_field25' => array(
						'cols' => array( 
							26 
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
					'footcell_field26' => array(
						'cols' => array( 
							27 
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
					) 
				),
				'width' => 28,
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
		'gridType' => 0,
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
		'type' => 'masterprint',
		'breadcrumb' => false 
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
	'id' => 'masterprint',
	'type' => 'masterprint',
	'layoutId' => 'masterprint',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
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
						'inline_add' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'empty-above-grid',
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
			'modelId' => 'masterlist-top',
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
						'masterprint_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'horizontal-grid',
			'grid' => array( 
				array(
					'section' => 'head',
					'cells' => array( 
						array(
							'cell' => 'headcell_icons' 
						),
						array(
							'cell' => 'headcell_field' 
						),
						array(
							'cell' => 'headcell_field1' 
						),
						array(
							'cell' => 'headcell_field2' 
						),
						array(
							'cell' => 'headcell_field3' 
						),
						array(
							'cell' => 'headcell_field4' 
						),
						array(
							'cell' => 'headcell_field5' 
						),
						array(
							'cell' => 'headcell_field6' 
						),
						array(
							'cell' => 'headcell_field7' 
						),
						array(
							'cell' => 'headcell_field8' 
						),
						array(
							'cell' => 'headcell_field9' 
						),
						array(
							'cell' => 'headcell_field10' 
						),
						array(
							'cell' => 'headcell_field11' 
						),
						array(
							'cell' => 'headcell_field12' 
						),
						array(
							'cell' => 'headcell_field13' 
						),
						array(
							'cell' => 'headcell_field14' 
						),
						array(
							'cell' => 'headcell_field15' 
						),
						array(
							'cell' => 'headcell_field16' 
						),
						array(
							'cell' => 'headcell_field17' 
						),
						array(
							'cell' => 'headcell_field18' 
						),
						array(
							'cell' => 'headcell_field19' 
						),
						array(
							'cell' => 'headcell_field20' 
						),
						array(
							'cell' => 'headcell_field21' 
						),
						array(
							'cell' => 'headcell_field22' 
						),
						array(
							'cell' => 'headcell_field23' 
						),
						array(
							'cell' => 'headcell_field24' 
						),
						array(
							'cell' => 'headcell_field25' 
						),
						array(
							'cell' => 'headcell_field26' 
						) 
					) 
				),
				array(
					'section' => 'body',
					'cells' => array( 
						array(
							'cell' => 'cell_icons' 
						),
						array(
							'cell' => 'cell_field' 
						),
						array(
							'cell' => 'cell_field1' 
						),
						array(
							'cell' => 'cell_field2' 
						),
						array(
							'cell' => 'cell_field3' 
						),
						array(
							'cell' => 'cell_field4' 
						),
						array(
							'cell' => 'cell_field5' 
						),
						array(
							'cell' => 'cell_field6' 
						),
						array(
							'cell' => 'cell_field7' 
						),
						array(
							'cell' => 'cell_field8' 
						),
						array(
							'cell' => 'cell_field9' 
						),
						array(
							'cell' => 'cell_field10' 
						),
						array(
							'cell' => 'cell_field11' 
						),
						array(
							'cell' => 'cell_field12' 
						),
						array(
							'cell' => 'cell_field13' 
						),
						array(
							'cell' => 'cell_field14' 
						),
						array(
							'cell' => 'cell_field15' 
						),
						array(
							'cell' => 'cell_field16' 
						),
						array(
							'cell' => 'cell_field17' 
						),
						array(
							'cell' => 'cell_field18' 
						),
						array(
							'cell' => 'cell_field19' 
						),
						array(
							'cell' => 'cell_field20' 
						),
						array(
							'cell' => 'cell_field21' 
						),
						array(
							'cell' => 'cell_field22' 
						),
						array(
							'cell' => 'cell_field23' 
						),
						array(
							'cell' => 'cell_field24' 
						),
						array(
							'cell' => 'cell_field25' 
						),
						array(
							'cell' => 'cell_field26' 
						) 
					) 
				),
				array(
					'section' => 'foot',
					'cells' => array( 
						array(
							'cell' => 'footcell_icons' 
						),
						array(
							'cell' => 'footcell_field' 
						),
						array(
							'cell' => 'footcell_field1' 
						),
						array(
							'cell' => 'footcell_field2' 
						),
						array(
							'cell' => 'footcell_field3' 
						),
						array(
							'cell' => 'footcell_field4' 
						),
						array(
							'cell' => 'footcell_field5' 
						),
						array(
							'cell' => 'footcell_field6' 
						),
						array(
							'cell' => 'footcell_field7' 
						),
						array(
							'cell' => 'footcell_field8' 
						),
						array(
							'cell' => 'footcell_field9' 
						),
						array(
							'cell' => 'footcell_field10' 
						),
						array(
							'cell' => 'footcell_field11' 
						),
						array(
							'cell' => 'footcell_field12' 
						),
						array(
							'cell' => 'footcell_field13' 
						),
						array(
							'cell' => 'footcell_field14' 
						),
						array(
							'cell' => 'footcell_field15' 
						),
						array(
							'cell' => 'footcell_field16' 
						),
						array(
							'cell' => 'footcell_field17' 
						),
						array(
							'cell' => 'footcell_field18' 
						),
						array(
							'cell' => 'footcell_field19' 
						),
						array(
							'cell' => 'footcell_field20' 
						),
						array(
							'cell' => 'footcell_field21' 
						),
						array(
							'cell' => 'footcell_field22' 
						),
						array(
							'cell' => 'footcell_field23' 
						),
						array(
							'cell' => 'footcell_field24' 
						),
						array(
							'cell' => 'footcell_field25' 
						),
						array(
							'cell' => 'footcell_field26' 
						) 
					) 
				) 
			),
			'cells' => array(
				'headcell_field' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field27' 
					),
					'field' => 'reqID',
					'columnName' => 'field' 
				),
				'cell_field' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field' 
					),
					'field' => 'reqID',
					'columnName' => 'field' 
				),
				'footcell_field' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field1' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field28' 
					),
					'field' => 'Station',
					'columnName' => 'field' 
				),
				'cell_field1' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field1' 
					),
					'field' => 'Station',
					'columnName' => 'field' 
				),
				'footcell_field1' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field2' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field29' 
					),
					'field' => 'vehNo',
					'columnName' => 'field' 
				),
				'cell_field2' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field3' 
					),
					'field' => 'vehNo',
					'columnName' => 'field' 
				),
				'footcell_field2' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field3' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field30' 
					),
					'field' => 'servicetype',
					'columnName' => 'field' 
				),
				'cell_field3' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field4' 
					),
					'field' => 'servicetype',
					'columnName' => 'field' 
				),
				'footcell_field3' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field4' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field31' 
					),
					'field' => 'description',
					'columnName' => 'field' 
				),
				'cell_field4' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field5' 
					),
					'field' => 'description',
					'columnName' => 'field' 
				),
				'footcell_field4' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field5' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field32' 
					),
					'field' => 'KMR',
					'columnName' => 'field' 
				),
				'cell_field5' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field6' 
					),
					'field' => 'KMR',
					'columnName' => 'field' 
				),
				'footcell_field5' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field6' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field33' 
					),
					'field' => 'requestedby',
					'columnName' => 'field' 
				),
				'cell_field6' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field7' 
					),
					'field' => 'requestedby',
					'columnName' => 'field' 
				),
				'footcell_field6' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field7' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field34' 
					),
					'field' => 'requestedon',
					'columnName' => 'field' 
				),
				'cell_field7' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field8' 
					),
					'field' => 'requestedon',
					'columnName' => 'field' 
				),
				'footcell_field7' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field8' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field35' 
					),
					'field' => 'arrivaltime',
					'columnName' => 'field' 
				),
				'cell_field8' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field9' 
					),
					'field' => 'arrivaltime',
					'columnName' => 'field' 
				),
				'footcell_field8' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field9' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field36' 
					),
					'field' => 'arrivaldate',
					'columnName' => 'field' 
				),
				'cell_field9' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field10' 
					),
					'field' => 'arrivaldate',
					'columnName' => 'field' 
				),
				'footcell_field9' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field10' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field37' 
					),
					'field' => 'vehType',
					'columnName' => 'field' 
				),
				'cell_field10' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field11' 
					),
					'field' => 'vehType',
					'columnName' => 'field' 
				),
				'footcell_field10' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field11' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field38' 
					),
					'field' => 'chasisNo',
					'columnName' => 'field' 
				),
				'cell_field11' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field12' 
					),
					'field' => 'chasisNo',
					'columnName' => 'field' 
				),
				'footcell_field11' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field12' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field39' 
					),
					'field' => 'repairInstruction',
					'columnName' => 'field' 
				),
				'cell_field12' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field13' 
					),
					'field' => 'repairInstruction',
					'columnName' => 'field' 
				),
				'footcell_field12' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field13' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field40' 
					),
					'field' => 'KMRin',
					'columnName' => 'field' 
				),
				'cell_field13' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field14' 
					),
					'field' => 'KMRin',
					'columnName' => 'field' 
				),
				'footcell_field13' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field14' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field41' 
					),
					'field' => 'KMRout',
					'columnName' => 'field' 
				),
				'cell_field14' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field15' 
					),
					'field' => 'KMRout',
					'columnName' => 'field' 
				),
				'footcell_field14' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field15' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field42' 
					),
					'field' => 'WOreqBy',
					'columnName' => 'field' 
				),
				'cell_field15' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field16' 
					),
					'field' => 'WOreqBy',
					'columnName' => 'field' 
				),
				'footcell_field15' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field16' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field43' 
					),
					'field' => 'WOreqOn',
					'columnName' => 'field' 
				),
				'cell_field16' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field17' 
					),
					'field' => 'WOreqOn',
					'columnName' => 'field' 
				),
				'footcell_field16' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field17' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field44' 
					),
					'field' => 'status',
					'columnName' => 'field' 
				),
				'cell_field17' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field18' 
					),
					'field' => 'status',
					'columnName' => 'field' 
				),
				'footcell_field17' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field18' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field45' 
					),
					'field' => 'workorder_id',
					'columnName' => 'field' 
				),
				'cell_field18' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field19' 
					),
					'field' => 'workorder_id',
					'columnName' => 'field' 
				),
				'footcell_field18' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field19' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field46' 
					),
					'field' => 'workDate',
					'columnName' => 'field' 
				),
				'cell_field19' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field20' 
					),
					'field' => 'workDate',
					'columnName' => 'field' 
				),
				'footcell_field19' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field20' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field47' 
					),
					'field' => 'partsUsed',
					'columnName' => 'field' 
				),
				'cell_field20' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field21' 
					),
					'field' => 'partsUsed',
					'columnName' => 'field' 
				),
				'footcell_field20' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field21' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field48' 
					),
					'field' => 'reccomendation',
					'columnName' => 'field' 
				),
				'cell_field21' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field22' 
					),
					'field' => 'reccomendation',
					'columnName' => 'field' 
				),
				'footcell_field21' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field22' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field49' 
					),
					'field' => 'submittedby',
					'columnName' => 'field' 
				),
				'cell_field22' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field23' 
					),
					'field' => 'submittedby',
					'columnName' => 'field' 
				),
				'footcell_field22' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field23' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field50' 
					),
					'field' => 'submittedOn',
					'columnName' => 'field' 
				),
				'cell_field23' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field24' 
					),
					'field' => 'submittedOn',
					'columnName' => 'field' 
				),
				'footcell_field23' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field24' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field51' 
					),
					'field' => 'total_days_at_wkshop',
					'columnName' => 'field' 
				),
				'cell_field24' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field25' 
					),
					'field' => 'total_days_at_wkshop',
					'columnName' => 'field' 
				),
				'footcell_field24' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field25' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field52' 
					),
					'field' => 'REGION',
					'columnName' => 'field' 
				),
				'cell_field25' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field2' 
					),
					'field' => 'REGION',
					'columnName' => 'field' 
				),
				'footcell_field25' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_field26' => array(
					'model' => 'headcell_field',
					'items' => array( 
						'simple_grid_field53' 
					),
					'field' => 'REGION_ID',
					'columnName' => 'field' 
				),
				'cell_field26' => array(
					'model' => 'cell_field',
					'items' => array( 
						'simple_grid_field26' 
					),
					'field' => 'REGION_ID',
					'columnName' => 'field' 
				),
				'footcell_field26' => array(
					'model' => 'footcell_field',
					'items' => array( 
						 
					) 
				),
				'headcell_icons' => array(
					'model' => 'headcell_icons',
					'items' => array( 
						 
					) 
				),
				'cell_icons' => array(
					'model' => 'cell_icons',
					'items' => array( 
						'grid_inline_cancel' 
					) 
				),
				'footcell_icons' => array(
					'model' => 'footcell_icons',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'masterprint_header' => array(
			'type' => 'masterprint_header' 
		),
		'simple_grid_field' => array(
			'field' => 'reqID',
			'type' => 'grid_field' 
		),
		'simple_grid_field27' => array(
			'type' => 'grid_field_label',
			'field' => 'reqID' 
		),
		'simple_grid_field1' => array(
			'field' => 'Station',
			'type' => 'grid_field' 
		),
		'simple_grid_field28' => array(
			'type' => 'grid_field_label',
			'field' => 'Station' 
		),
		'simple_grid_field3' => array(
			'field' => 'vehNo',
			'type' => 'grid_field' 
		),
		'simple_grid_field29' => array(
			'type' => 'grid_field_label',
			'field' => 'vehNo' 
		),
		'simple_grid_field4' => array(
			'field' => 'servicetype',
			'type' => 'grid_field' 
		),
		'simple_grid_field30' => array(
			'type' => 'grid_field_label',
			'field' => 'servicetype' 
		),
		'simple_grid_field5' => array(
			'field' => 'description',
			'type' => 'grid_field' 
		),
		'simple_grid_field31' => array(
			'type' => 'grid_field_label',
			'field' => 'description' 
		),
		'simple_grid_field6' => array(
			'field' => 'KMR',
			'type' => 'grid_field' 
		),
		'simple_grid_field32' => array(
			'type' => 'grid_field_label',
			'field' => 'KMR' 
		),
		'simple_grid_field7' => array(
			'field' => 'requestedby',
			'type' => 'grid_field' 
		),
		'simple_grid_field33' => array(
			'type' => 'grid_field_label',
			'field' => 'requestedby' 
		),
		'simple_grid_field8' => array(
			'field' => 'requestedon',
			'type' => 'grid_field' 
		),
		'simple_grid_field34' => array(
			'type' => 'grid_field_label',
			'field' => 'requestedon' 
		),
		'simple_grid_field9' => array(
			'field' => 'arrivaltime',
			'type' => 'grid_field' 
		),
		'simple_grid_field35' => array(
			'type' => 'grid_field_label',
			'field' => 'arrivaltime' 
		),
		'simple_grid_field10' => array(
			'field' => 'arrivaldate',
			'type' => 'grid_field' 
		),
		'simple_grid_field36' => array(
			'type' => 'grid_field_label',
			'field' => 'arrivaldate' 
		),
		'simple_grid_field11' => array(
			'field' => 'vehType',
			'type' => 'grid_field' 
		),
		'simple_grid_field37' => array(
			'type' => 'grid_field_label',
			'field' => 'vehType' 
		),
		'simple_grid_field12' => array(
			'field' => 'chasisNo',
			'type' => 'grid_field' 
		),
		'simple_grid_field38' => array(
			'type' => 'grid_field_label',
			'field' => 'chasisNo' 
		),
		'simple_grid_field13' => array(
			'field' => 'repairInstruction',
			'type' => 'grid_field' 
		),
		'simple_grid_field39' => array(
			'type' => 'grid_field_label',
			'field' => 'repairInstruction' 
		),
		'simple_grid_field14' => array(
			'field' => 'KMRin',
			'type' => 'grid_field' 
		),
		'simple_grid_field40' => array(
			'type' => 'grid_field_label',
			'field' => 'KMRin' 
		),
		'simple_grid_field15' => array(
			'field' => 'KMRout',
			'type' => 'grid_field' 
		),
		'simple_grid_field41' => array(
			'type' => 'grid_field_label',
			'field' => 'KMRout' 
		),
		'simple_grid_field16' => array(
			'field' => 'WOreqBy',
			'type' => 'grid_field' 
		),
		'simple_grid_field42' => array(
			'type' => 'grid_field_label',
			'field' => 'WOreqBy' 
		),
		'simple_grid_field17' => array(
			'field' => 'WOreqOn',
			'type' => 'grid_field' 
		),
		'simple_grid_field43' => array(
			'type' => 'grid_field_label',
			'field' => 'WOreqOn' 
		),
		'simple_grid_field18' => array(
			'field' => 'status',
			'type' => 'grid_field' 
		),
		'simple_grid_field44' => array(
			'type' => 'grid_field_label',
			'field' => 'status' 
		),
		'simple_grid_field19' => array(
			'field' => 'workorder_id',
			'type' => 'grid_field' 
		),
		'simple_grid_field45' => array(
			'type' => 'grid_field_label',
			'field' => 'workorder_id' 
		),
		'simple_grid_field20' => array(
			'field' => 'workDate',
			'type' => 'grid_field' 
		),
		'simple_grid_field46' => array(
			'type' => 'grid_field_label',
			'field' => 'workDate' 
		),
		'simple_grid_field21' => array(
			'field' => 'partsUsed',
			'type' => 'grid_field' 
		),
		'simple_grid_field47' => array(
			'type' => 'grid_field_label',
			'field' => 'partsUsed' 
		),
		'simple_grid_field22' => array(
			'field' => 'reccomendation',
			'type' => 'grid_field' 
		),
		'simple_grid_field48' => array(
			'type' => 'grid_field_label',
			'field' => 'reccomendation' 
		),
		'simple_grid_field23' => array(
			'field' => 'submittedby',
			'type' => 'grid_field' 
		),
		'simple_grid_field49' => array(
			'type' => 'grid_field_label',
			'field' => 'submittedby' 
		),
		'simple_grid_field24' => array(
			'field' => 'submittedOn',
			'type' => 'grid_field' 
		),
		'simple_grid_field50' => array(
			'type' => 'grid_field_label',
			'field' => 'submittedOn' 
		),
		'simple_grid_field25' => array(
			'field' => 'total_days_at_wkshop',
			'type' => 'grid_field' 
		),
		'simple_grid_field51' => array(
			'type' => 'grid_field_label',
			'field' => 'total_days_at_wkshop' 
		),
		'simple_grid_field2' => array(
			'field' => 'REGION',
			'type' => 'grid_field' 
		),
		'simple_grid_field52' => array(
			'type' => 'grid_field_label',
			'field' => 'REGION' 
		),
		'simple_grid_field26' => array(
			'field' => 'REGION_ID',
			'type' => 'grid_field' 
		),
		'simple_grid_field53' => array(
			'type' => 'grid_field_label',
			'field' => 'REGION_ID' 
		),
		'inline_add' => array(
			'type' => 'inline_add',
			'detailsOnly' => true 
		),
		'grid_inline_cancel' => array(
			'type' => 'grid_inline_cancel' 
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