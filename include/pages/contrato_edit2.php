<?php
			$optionsArray = array( 'details' => array( 'contrato_attached' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'polizas_master' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'interventor_interno' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_cdp' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_rp' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_oe' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica_prorroga' => array( 'displayPreview' => 1,
'previewPageId' => 'list' ),
'contrato_modifica_cesion' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica_track' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_dependencia' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_paa' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'informe_intersup_plan_pagos' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'contrato_modifica_suspension' => array( 'displayPreview' => 2,
'previewPageId' => '' ),
'informe_intersup4' => array( 'displayPreview' => 2,
'previewPageId' => '' ) ),
'captcha' => array( 'captcha' => false ),
'fields' => array( 'gridFields' => array( 'cont_modifica',
'cont_fechafinal' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'updateOnEditFields' => array(  ),
'fieldItems' => array( 'cont_modifica' => array( 'integrated_edit_field' ),
'cont_fechafinal' => array( 'integrated_edit_field30' ) ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => true,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'edit_header' ),
'above-grid' => array( 'edit_message' ),
'below-grid' => array( 'edit_save',
'edit_back_list',
'edit_close',
'hamburger' ),
'grid' => array( 'tabs' ),
'section' => array( 'integrated_edit_field',
'details_preview',
'integrated_edit_field30' ) ),
'formXtTags' => array( 'above-grid' => array( 'message_block' ) ),
'itemForms' => array( 'edit_header' => 'top',
'edit_message' => 'above-grid',
'edit_save' => 'below-grid',
'edit_back_list' => 'below-grid',
'edit_close' => 'below-grid',
'hamburger' => 'below-grid',
'tabs' => 'grid',
'integrated_edit_field' => 'section',
'details_preview' => 'section',
'integrated_edit_field30' => 'section' ),
'itemLocations' => array( 'tabs' => array( 'location' => 'grid',
'cellId' => 'c4' ),
'integrated_edit_field' => array( 'location' => 'section',
'cellId' => 'c1' ),
'details_preview' => array( 'location' => 'section',
'cellId' => 'c4' ),
'integrated_edit_field30' => array( 'location' => 'section',
'cellId' => 'c8' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'edit_header' => array( 'edit_header' ),
'hamburger' => array( 'hamburger' ),
'edit_reset' => array( 'edit_reset' ),
'edit_message' => array( 'edit_message' ),
'edit_save' => array( 'edit_save' ),
'edit_back_list' => array( 'edit_back_list' ),
'edit_close' => array( 'edit_close' ),
'edit_view' => array( 'edit_view' ),
'integrated_edit_field' => array( 'integrated_edit_field',
'integrated_edit_field30' ),
'tabs' => array( 'tabs' ),
'details_preview' => array( 'details_preview' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'c4' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'tabs' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 1,
'height' => 1 ),
'section' => array( 'cells' => array( 'c1' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c8' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array( 'integrated_edit_field30' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'c9' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'c4' => array( 'cols' => array( 0,
1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview' ),
'fixedAtServer' => true,
'fixedAtClient' => false ) ),
'width' => 2,
'height' => 3 ) ) ),
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
'misc' => array( 'type' => 'edit',
'breadcrumb' => false,
'nextPrev' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'edit' => array( 'updateSelected' => false ) );
			$pageArray = array( 'id' => 'edit2',
'type' => 'edit',
'layoutId' => 'nomenu',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'edit-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_header' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'edit-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_message' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'edit-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'edit_save',
'edit_back_list',
'edit_close' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'hamburger' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c4',
'colspan' => 1 ) ),
'section' => '' ) ),
'cells' => array( 'c4' => array( 'model' => 'c3',
'items' => array( 'tabs' ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ),
'section' => array( 'modelId' => 'simple-edit',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c' ) ),
'section' => '' ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c8' ),
array( 'cell' => 'c9' ) ) ),
array( 'section' => '',
'cells' => array( array( 'cell' => 'c4',
'colspan' => 2 ) ) ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c' => array( 'model' => 'c1',
'items' => array(  ) ),
'c4' => array( 'model' => 'c1',
'items' => array( 'details_preview' ) ),
'c8' => array( 'model' => 'c1',
'items' => array( 'integrated_edit_field30' ) ),
'c9' => array( 'model' => 'c1',
'items' => array(  ) ) ),
'deferredItems' => array(  ),
'columnCount' => 1,
'inlineLabels' => false,
'separateLabels' => false ) ),
'items' => array( 'edit_header' => array( 'type' => 'edit_header' ),
'hamburger' => array( 'type' => 'hamburger',
'items' => array( 'edit_reset',
'edit_view' ) ),
'edit_reset' => array( 'type' => 'edit_reset' ),
'edit_message' => array( 'type' => 'edit_message' ),
'edit_save' => array( 'type' => 'edit_save',
'label' => array( 'type' => 0,
'text' => 'Guardar cambios' ),
'icon' => array( 'glyph' => 'saved' ),
'buttonSize' => 'large',
'buttonStyle' => 'success' ),
'edit_back_list' => array( 'type' => 'edit_back_list',
'icon' => array( 'fa' => 'angle-double-left' ),
'buttonStyle' => 'info',
'buttonSize' => 'large' ),
'edit_close' => array( 'type' => 'edit_close',
'icon' => array( 'fa' => 'hand-stop-o' ),
'buttonStyle' => 'default',
'buttonSize' => 'large' ),
'edit_view' => array( 'type' => 'edit_view' ),
'integrated_edit_field' => array( 'field' => 'cont_modifica',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'integrated_edit_field30' => array( 'field' => 'cont_fechafinal',
'type' => 'integrated_edit_field',
'orientation' => 0 ),
'tabs' => array( 'type' => 'tabs',
'titles' => array( array( 'text' => 'Prórroga',
'type' => 0 ) ),
'locations' => array( 'section' ),
'bsStyle' => 'default',
'panelType' => 2 ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'contrato_modifica_prorroga',
'items' => array(  ),
'popup' => false,
'pageId' => 'list' ) ),
'dbProps' => array(  ),
'version' => 14,
'imageItem' => array( 'type' => 'page_image' ),
'imageBgColor' => '#f2f2f2',
'controlsBgColor' => 'white',
'imagePosition' => 'right',
'listTotals' => 1 );
		?>