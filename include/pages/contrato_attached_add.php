<?php
			$optionsArray = array( 'master' => array( 'contrato' => array( 'preview' => false ),
'q_bandejaentrada_supervisores' => array( 'preview' => false ),
'informe_intersup4' => array( 'preview' => false ),
'contrato_audit' => array( 'preview' => false ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'id_cont_fk',
'att_type',
'att_file',
'sys_user',
'sys_time',
'att_cod',
'cont_pre',
'cont_num',
'cont_vigencia' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'id_cont_fk' => array( 'integrated_edit_field' ),
'att_type' => array( 'integrated_edit_field1' ),
'att_file' => array( 'integrated_edit_field2' ),
'sys_user' => array( 'integrated_edit_field3' ),
'sys_time' => array( 'integrated_edit_field5' ),
'att_cod' => array( 'integrated_edit_field7' ),
'cont_pre' => array( 'integrated_edit_field4',
'edit_field_label' ),
'cont_num' => array( 'integrated_edit_field8' ),
'cont_vigencia' => array( 'integrated_edit_field9' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'add_header' ),
'above-grid' => array( 'add_message' ),
'below-grid' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'grid' => array( 'integrated_edit_field5',
'integrated_edit_field3',
'integrated_edit_field1',
'integrated_edit_field7',
'integrated_edit_field2',
'integrated_edit_field4',
'integrated_edit_field8',
'integrated_edit_field9',
'edit_field_label',
'integrated_edit_field' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'add_header' => 'top',
'add_message' => 'above-grid',
'add_save' => 'below-grid',
'add_back_list' => 'below-grid',
'add_cancel' => 'below-grid',
'integrated_edit_field5' => 'grid',
'integrated_edit_field3' => 'grid',
'integrated_edit_field1' => 'grid',
'integrated_edit_field7' => 'grid',
'integrated_edit_field2' => 'grid',
'integrated_edit_field4' => 'grid',
'integrated_edit_field8' => 'grid',
'integrated_edit_field9' => 'grid',
'edit_field_label' => 'grid',
'integrated_edit_field' => 'grid' ),
'itemLocations' => array( 'integrated_edit_field5' => array( 'location' => 'grid',
'cellId' => 'c3' ),
'integrated_edit_field3' => array( 'location' => 'grid',
'cellId' => 'c' ),
'integrated_edit_field1' => array( 'location' => 'grid',
'cellId' => 'c6' ),
'integrated_edit_field7' => array( 'location' => 'grid',
'cellId' => 'c7' ),
'integrated_edit_field2' => array( 'location' => 'grid',
'cellId' => 'c9' ),
'integrated_edit_field4' => array( 'location' => 'grid',
'cellId' => 'c10' ),
'integrated_edit_field8' => array( 'location' => 'grid',
'cellId' => 'c11' ),
'integrated_edit_field9' => array( 'location' => 'grid',
'cellId' => 'c13' ),
'edit_field_label' => array( 'location' => 'grid',
'cellId' => 'c15' ),
'integrated_edit_field' => array( 'location' => 'grid',
'cellId' => 'c16' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'add_header' => array( 'add_header' ),
'add_back_list' => array( 'add_back_list' ),
'add_cancel' => array( 'add_cancel' ),
'add_message' => array( 'add_message' ),
'add_save' => array( 'add_save' ),
'edit_field' => array( 'integrated_edit_field',
'integrated_edit_field3',
'integrated_edit_field5',
'integrated_edit_field4',
'integrated_edit_field8',
'integrated_edit_field9' ),
'integrated_edit_field' => array( 'integrated_edit_field1',
'integrated_edit_field2',
'integrated_edit_field7' ),
'edit_field_label' => array( 'edit_field_label' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c15' => array( 'cols' => array( 0,
1,
2,
3,
4 ),
'rows' => array( 0 ),
'tags' => array( 'cont_pre_fieldblock' ),
'items' => array( 'edit_field_label' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c10' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field4' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c11' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field8' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c13' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field9' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c18' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c17' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c6' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field1' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c7' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field7' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c14' => array( 'cols' => array( 2,
3,
4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c12' => array( 'cols' => array( 1,
2,
3,
4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c3' => array( 'cols' => array( 0 ),
'rows' => array( 4,
5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field5' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 4,
5 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field3' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c16' => array( 'cols' => array( 2,
3,
4 ),
'rows' => array( 4 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c19' => array( 'cols' => array( 2,
3,
4 ),
'rows' => array( 5 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 5,
'height' => 6 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'verticalBar' => false,
'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ),
'hasNotifications' => false,
'menus' => array(  ),
'calcTotalsFor' => 1 ),
'misc' => array( 'type' => 'add',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'add',
'type' => 'add',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'add-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'add-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'add-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add_save',
'add_back_list',
'add_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'section' => '',
'cells' => array( array( 'cell' => 'c15',
'colspan' => 5 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c10' ),
array( 'cell' => 'c11' ),
array( 'cell' => 'c13' ),
array( 'cell' => 'c18' ),
array( 'cell' => 'c17' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c6' ),
array( 'cell' => 'c7' ),
array( 'cell' => 'c14',
'colspan' => 3 ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c9' ),
array( 'cell' => 'c12',
'colspan' => 4 ) ) ),
array( 'cells' => array( array( 'cell' => 'c3',
'rowspan' => 2 ),
array( 'cell' => 'c',
'rowspan' => 2 ),
array( 'cell' => 'c16',
'colspan' => 3 ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c19',
'colspan' => 3 ) ) ) ),
'cells' => array( 'c3' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field5' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field3' ) ),
'c6' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field1' ) ),
'c7' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field7' ) ),
'c9' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field2' ) ),
'c10' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field4' ),
'background' => '#f7f7f7' ),
'c11' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field8' ),
'background' => '#f7f7f7' ),
'c13' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field9' ),
'background' => '#f7f7f7' ),
'c14' => array( 'model' => 'c3',
'items' => array(  ) ),
'c15' => array( 'model' => 'c3',
'items' => array( 'edit_field_label' ),
'align' => 'center',
'background' => '#336699',
'color' => '#000000' ),
'c16' => array( 'model' => 'c3',
'items' => array( 'integrated_edit_field' ) ),
'c12' => array( 'model' => 'c3',
'items' => array(  ) ),
'c17' => array( 'model' => 'c3',
'items' => array(  ),
'background' => '#f7f7f7' ),
'c18' => array( 'model' => 'c3',
'items' => array(  ),
'background' => '#f7f7f7' ),
'c19' => array( 'model' => 'c3',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'add_header' => array( 'type' => 'add_header' ),
'add_back_list' => array( 'type' => 'add_back_list' ),
'add_cancel' => array( 'type' => 'add_cancel' ),
'add_message' => array( 'type' => 'add_message' ),
'add_save' => array( 'type' => 'add_save' ),
'integrated_edit_field' => array( 'field' => 'id_cont_fk',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field1' => array( 'field' => 'att_type',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field2' => array( 'field' => 'att_file',
'type' => 'integrated_edit_field',
'orientation' => 0,
'tooltip' => array( 'field' => 'att_file',
'table' => 'contrato_attached',
'type' => 4 ) ),
'integrated_edit_field3' => array( 'field' => 'sys_user',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field5' => array( 'field' => 'sys_time',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field7' => array( 'field' => 'att_cod',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field4' => array( 'field' => 'cont_pre',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field8' => array( 'field' => 'cont_num',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'integrated_edit_field9' => array( 'field' => 'cont_vigencia',
'type' => 'edit_field',
'orientation' => 0,
'joined' => false,
'separated' => true ),
'edit_field_label' => array( 'type' => 'edit_field_label',
'field' => 'cont_pre',
'separated' => true,
'label' => array( 'field' => 'cont_pre',
'table' => 'contrato_attached',
'type' => 3 ) ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>