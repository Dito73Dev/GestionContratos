<?php
			$optionsArray = array( 'totals' => array( 'inf_id' => array( 'totalsType' => '' ),
'id_cont_fk' => array( 'totalsType' => '' ),
'inf_consecutivo' => array( 'totalsType' => '' ),
'inf_fecharep_i' => array( 'totalsType' => '' ),
'inf_fecharep_f' => array( 'totalsType' => '' ),
'inf_valorcontrato' => array( 'totalsType' => '' ),
'inf_valor_pago' => array( 'totalsType' => '' ),
'dias_calculados' => array( 'totalsType' => '' ),
'dias_fiscales' => array( 'totalsType' => '' ),
'valor_a_pagar' => array( 'totalsType' => '' ),
'avgavance' => array( 'totalsType' => '' ),
'inf_st' => array( 'totalsType' => '' ),
'inf_mes' => array( 'totalsType' => '' ),
'inf_tipopago' => array( 'totalsType' => '' ),
'sysuser' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'inf_consecutivo',
'inf_fecharep_i',
'inf_fecharep_f',
'inf_valor_pago',
'avgavance',
'inf_st',
'inf_mes',
'inf_tipopago',
'sysuser' ),
'exportFields' => array( 'inf_consecutivo',
'inf_fecharep_i',
'inf_fecharep_f',
'inf_valor_pago',
'avgavance',
'inf_st',
'inf_mes',
'inf_tipopago',
'sysuser' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'inf_consecutivo' => array( 'export_field2' ),
'inf_fecharep_i' => array( 'export_field3' ),
'inf_fecharep_f' => array( 'export_field4' ),
'inf_valor_pago' => array( 'export_field6' ),
'avgavance' => array( 'export_field' ),
'inf_st' => array( 'export_field1' ),
'inf_mes' => array( 'export_field5' ),
'inf_tipopago' => array( 'export_field7' ),
'sysuser' => array( 'export_field8' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array(  ),
'top' => array( 'export_header' ),
'grid' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field6',
'export_field',
'export_field1',
'export_field5',
'export_field7',
'export_field8' ),
'footer' => array( 'export_export',
'export_cancel' ) ),
'formXtTags' => array( 'supertop' => array(  ) ),
'itemForms' => array( 'export_header' => 'top',
'export_field2' => 'grid',
'export_field3' => 'grid',
'export_field4' => 'grid',
'export_field6' => 'grid',
'export_field' => 'grid',
'export_field1' => 'grid',
'export_field5' => 'grid',
'export_field7' => 'grid',
'export_field8' => 'grid',
'export_export' => 'footer',
'export_cancel' => 'footer' ),
'itemLocations' => array(  ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'export_header' => array( 'export_header' ),
'export_export' => array( 'export_export' ),
'export_cancel' => array( 'export_cancel' ),
'export_field' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field6',
'export_field',
'export_field1',
'export_field5',
'export_field7',
'export_field8' ) ),
'cellMaps' => array(  ) ),
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
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'export' => array( 'format' => 2,
'selectFields' => false,
'delimiter' => ',',
'selectDelimiter' => false,
'exportFileTypes' => array( 'excel' => true,
'word' => true,
'csv' => true,
'xml' => false ) ) );
			$pageArray = array( 'id' => 'export',
'type' => 'export',
'layoutId' => 'first',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'panel-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'export-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'export-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'export_field2',
'export_field3',
'export_field4',
'export_field6',
'export_field',
'export_field1',
'export_field5',
'export_field7',
'export_field8' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'footer' => array( 'modelId' => 'export-footer',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array(  ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'export_export',
'export_cancel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'export_header' => array( 'type' => 'export_header' ),
'export_export' => array( 'type' => 'export_export' ),
'export_cancel' => array( 'type' => 'export_cancel' ),
'export_field2' => array( 'field' => 'inf_consecutivo',
'type' => 'export_field' ),
'export_field3' => array( 'field' => 'inf_fecharep_i',
'type' => 'export_field' ),
'export_field4' => array( 'field' => 'inf_fecharep_f',
'type' => 'export_field' ),
'export_field6' => array( 'field' => 'inf_valor_pago',
'type' => 'export_field' ),
'export_field' => array( 'field' => 'avgavance',
'type' => 'export_field' ),
'export_field1' => array( 'field' => 'inf_st',
'type' => 'export_field' ),
'export_field5' => array( 'field' => 'inf_mes',
'type' => 'export_field' ),
'export_field7' => array( 'field' => 'inf_tipopago',
'type' => 'export_field' ),
'export_field8' => array( 'field' => 'sysuser',
'type' => 'export_field' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1,
'exportFormat' => 2,
'exportDelimiter' => ',',
'exportSelectDelimiter' => false,
'exportSelectFields' => false );
		?>