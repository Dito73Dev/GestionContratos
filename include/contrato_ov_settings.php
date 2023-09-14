<?php
$tdatacontrato_ov = array();
$tdatacontrato_ov[".searchableFields"] = array();
$tdatacontrato_ov[".ShortName"] = "contrato_ov";
$tdatacontrato_ov[".OwnerID"] = "";
$tdatacontrato_ov[".OriginalTable"] = "contrato";


$tdatacontrato_ov[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\",\"edit1\",\"edit2\",\"edit3\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_ov[".originalPagesByType"] = $tdatacontrato_ov[".pagesByType"];
$tdatacontrato_ov[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\",\"edit1\",\"edit2\",\"edit3\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_ov[".originalPages"] = $tdatacontrato_ov[".pages"];
$tdatacontrato_ov[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_ov[".originalDefaultPages"] = $tdatacontrato_ov[".defaultPages"];

//	field labels
$fieldLabelscontrato_ov = array();
$fieldToolTipscontrato_ov = array();
$pageTitlescontrato_ov = array();
$placeHolderscontrato_ov = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_ov["Spanish"] = array();
	$fieldToolTipscontrato_ov["Spanish"] = array();
	$placeHolderscontrato_ov["Spanish"] = array();
	$pageTitlescontrato_ov["Spanish"] = array();
	$fieldLabelscontrato_ov["Spanish"]["id_cont"] = "Código Interno";
	$fieldToolTipscontrato_ov["Spanish"]["id_cont"] = "";
	$placeHolderscontrato_ov["Spanish"]["id_cont"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_hash"] = "Cont Hash";
	$fieldToolTipscontrato_ov["Spanish"]["cont_hash"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_hash"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_nit_contra_ta"] = "Contratista";
	$fieldToolTipscontrato_ov["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_paa_id"] = "PAA ID";
	$fieldToolTipscontrato_ov["Spanish"]["cont_paa_id"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_paa_id"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipscontrato_ov["Spanish"]["cont_estado"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_estado"] = "";
	$fieldLabelscontrato_ov["Spanish"]["prenumero"] = "Registro presupuestal | Compromiso";
	$fieldToolTipscontrato_ov["Spanish"]["prenumero"] = "";
	$placeHolderscontrato_ov["Spanish"]["prenumero"] = "";
	$fieldLabelscontrato_ov["Spanish"]["numregistro"] = "CDP";
	$fieldToolTipscontrato_ov["Spanish"]["numregistro"] = "";
	$placeHolderscontrato_ov["Spanish"]["numregistro"] = "";
	$fieldLabelscontrato_ov["Spanish"]["pre_contnumero"] = "Pre número";
	$fieldToolTipscontrato_ov["Spanish"]["pre_contnumero"] = "";
	$placeHolderscontrato_ov["Spanish"]["pre_contnumero"] = "";
	$fieldLabelscontrato_ov["Spanish"]["contnumero"] = "Número de contrato";
	$fieldToolTipscontrato_ov["Spanish"]["contnumero"] = "";
	$placeHolderscontrato_ov["Spanish"]["contnumero"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_tipo"] = "Tipo de CDP";
	$fieldToolTipscontrato_ov["Spanish"]["cont_tipo"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_tipo"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipscontrato_ov["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_ano"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_codrubro"] = "Rubro | Producto";
	$fieldToolTipscontrato_ov["Spanish"]["cont_codrubro"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_codrubro"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_catalogo_presupuestal"] = "Catálogo | Uso presupuestal";
	$fieldToolTipscontrato_ov["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_tipopre"] = "Unidad ejecutora";
	$fieldToolTipscontrato_ov["Spanish"]["cont_tipopre"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_tipopre"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_fechaapertura"] = "Fecha suscripción";
	$fieldToolTipscontrato_ov["Spanish"]["cont_fechaapertura"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_fecha_inicio"] = "Fecha de inicio del contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_fecha_inicio"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_fechafinal"] = "Fecha final del contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_fechafinal"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_fechavigencia"] = "Fecha vigencia del contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_fechavigencia"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_fechavigencia"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_periodicidad"] = "Periodicidad";
	$fieldToolTipscontrato_ov["Spanish"]["cont_periodicidad"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_informessug"] = "Informes sugeridos";
	$fieldToolTipscontrato_ov["Spanish"]["cont_informessug"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_informessug"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_valorant"] = "Valor total del contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_valorant"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_valorant"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_valorinicial"] = "Valor inicial del contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_valorinicial"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_valormensual"] = "Valor mensual a pagar";
	$fieldToolTipscontrato_ov["Spanish"]["cont_valormensual"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_valormensual"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_modalidad"] = "Modalidad";
	$fieldToolTipscontrato_ov["Spanish"]["cont_modalidad"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_modalidad"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_objeto"] = "Objeto del contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_objeto"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_objeto"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_tipoproceso"] = "Tipo de proceso";
	$fieldToolTipscontrato_ov["Spanish"]["cont_tipoproceso"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_tipoproceso"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_formapago"] = "Forma de pago";
	$fieldToolTipscontrato_ov["Spanish"]["cont_formapago"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_formapago"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_fechasistema"] = "Fecha del sistema";
	$fieldToolTipscontrato_ov["Spanish"]["cont_fechasistema"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_fechasistema"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_acta_liquidacion"] = "Requiere acta de liquidación?";
	$fieldToolTipscontrato_ov["Spanish"]["cont_acta_liquidacion"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_acta_liquidacion"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_tipoc"] = "Tipo de contrato";
	$fieldToolTipscontrato_ov["Spanish"]["cont_tipoc"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_tipoc"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_causalc"] = "Causal";
	$fieldToolTipscontrato_ov["Spanish"]["cont_causalc"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_causalc"] = "";
	$fieldLabelscontrato_ov["Spanish"]["nombre_cont"] = "Razón social / Nombre";
	$fieldToolTipscontrato_ov["Spanish"]["nombre_cont"] = "";
	$placeHolderscontrato_ov["Spanish"]["nombre_cont"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_obligaciones"] = "Obligaciones generales";
	$fieldToolTipscontrato_ov["Spanish"]["cont_obligaciones"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_obligaciones"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_plazo"] = "Plazo";
	$fieldToolTipscontrato_ov["Spanish"]["cont_plazo"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_plazo"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_vigencias_futuras"] = "¿Contrato con vigencias futuras?";
	$fieldToolTipscontrato_ov["Spanish"]["cont_vigencias_futuras"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_vigencias_futuras"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_secop_proceso"] = "Número de proceso SECOP";
	$fieldToolTipscontrato_ov["Spanish"]["cont_secop_proceso"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_secop_proceso"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_secop_enlace"] = "Enlace a SECOP";
	$fieldToolTipscontrato_ov["Spanish"]["cont_secop_enlace"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_sigep"] = "¿ Información en SIGEP?";
	$fieldToolTipscontrato_ov["Spanish"]["cont_sigep"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_sigep"] = "";
	$fieldLabelscontrato_ov["Spanish"]["vf_num_autorizacion"] = "Número de autorizacion";
	$fieldToolTipscontrato_ov["Spanish"]["vf_num_autorizacion"] = "";
	$placeHolderscontrato_ov["Spanish"]["vf_num_autorizacion"] = "";
	$fieldLabelscontrato_ov["Spanish"]["vf_fecha"] = "Fecha de autorización";
	$fieldToolTipscontrato_ov["Spanish"]["vf_fecha"] = "";
	$placeHolderscontrato_ov["Spanish"]["vf_fecha"] = "";
	$fieldLabelscontrato_ov["Spanish"]["vf_valor"] = "Valor de la vigencia futura";
	$fieldToolTipscontrato_ov["Spanish"]["vf_valor"] = "";
	$placeHolderscontrato_ov["Spanish"]["vf_valor"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_unspsc"] = "Códigos UNSPSC";
	$fieldToolTipscontrato_ov["Spanish"]["cont_unspsc"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_unspsc"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_tipo_rubro"] = "Tipo de rubro";
	$fieldToolTipscontrato_ov["Spanish"]["cont_tipo_rubro"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_tipo_rubro"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_munejec"] = "Municipio de ejecución";
	$fieldToolTipscontrato_ov["Spanish"]["cont_munejec"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_munejec"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_fecha_aprobgarantia"] = "Fecha aprobación garantía";
	$fieldToolTipscontrato_ov["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_numpoliza"] = "Número de póliza";
	$fieldToolTipscontrato_ov["Spanish"]["cont_numpoliza"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_numpoliza"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_modifica"] = "Habilitar modificación";
	$fieldToolTipscontrato_ov["Spanish"]["cont_modifica"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_modifica"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_cesion"] = "Habilitar Cesión";
	$fieldToolTipscontrato_ov["Spanish"]["cont_cesion"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_cesion"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_valorvigente"] = "Valor actual";
	$fieldToolTipscontrato_ov["Spanish"]["cont_valorvigente"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_valorvigente"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_depsup"] = "Dependencia general";
	$fieldToolTipscontrato_ov["Spanish"]["cont_depsup"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_depsup"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_dep"] = "Dependencia específica";
	$fieldToolTipscontrato_ov["Spanish"]["cont_dep"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_dep"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_valormensual_base"] = "Valor mensual base";
	$fieldToolTipscontrato_ov["Spanish"]["cont_valormensual_base"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_valormensual_base"] = "";
	$fieldLabelscontrato_ov["Spanish"]["cont_valormensual_iva"] = "Valor de IVA";
	$fieldToolTipscontrato_ov["Spanish"]["cont_valormensual_iva"] = "";
	$placeHolderscontrato_ov["Spanish"]["cont_valormensual_iva"] = "";
	if (count($fieldToolTipscontrato_ov["Spanish"]))
		$tdatacontrato_ov[".isUseToolTips"] = true;
}


	$tdatacontrato_ov[".NCSearch"] = true;



$tdatacontrato_ov[".shortTableName"] = "contrato_ov";
$tdatacontrato_ov[".nSecOptions"] = 0;

$tdatacontrato_ov[".mainTableOwnerID"] = "";
$tdatacontrato_ov[".entityType"] = 1;
$tdatacontrato_ov[".connId"] = "dbct_at_localhost";


$tdatacontrato_ov[".strOriginalTableName"] = "contrato";

	



$tdatacontrato_ov[".showAddInPopup"] = false;

$tdatacontrato_ov[".showEditInPopup"] = false;

$tdatacontrato_ov[".showViewInPopup"] = false;

$tdatacontrato_ov[".listAjax"] = false;
//	temporary
//$tdatacontrato_ov[".listAjax"] = false;

	$tdatacontrato_ov[".audit"] = true;

	$tdatacontrato_ov[".locking"] = true;


$pages = $tdatacontrato_ov[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_ov[".edit"] = true;
	$tdatacontrato_ov[".afterEditAction"] = 1;
	$tdatacontrato_ov[".closePopupAfterEdit"] = 1;
	$tdatacontrato_ov[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_ov[".add"] = true;
$tdatacontrato_ov[".afterAddAction"] = 0;
$tdatacontrato_ov[".closePopupAfterAdd"] = 1;
$tdatacontrato_ov[".afterAddActionDetTable"] = "contrato_attached";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_ov[".list"] = true;
}



$tdatacontrato_ov[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_ov[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_ov[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_ov[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_ov[".printFriendly"] = true;
}



$tdatacontrato_ov[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_ov[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_ov[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_ov[".isUseAjaxSuggest"] = true;



															

$tdatacontrato_ov[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_ov[".buttonsAdded"] = false;

$tdatacontrato_ov[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_ov[".isUseTimeForSearch"] = false;


$tdatacontrato_ov[".badgeColor"] = "CD5C5C";


$tdatacontrato_ov[".allSearchFields"] = array();
$tdatacontrato_ov[".filterFields"] = array();
$tdatacontrato_ov[".requiredSearchFields"] = array();

$tdatacontrato_ov[".googleLikeFields"] = array();
$tdatacontrato_ov[".googleLikeFields"][] = "id_cont";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_hash";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_ano";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_paa_id";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdatacontrato_ov[".googleLikeFields"][] = "nombre_cont";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_estado";
$tdatacontrato_ov[".googleLikeFields"][] = "prenumero";
$tdatacontrato_ov[".googleLikeFields"][] = "numregistro";
$tdatacontrato_ov[".googleLikeFields"][] = "pre_contnumero";
$tdatacontrato_ov[".googleLikeFields"][] = "contnumero";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_tipo";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_codrubro";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_tipopre";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_fechaapertura";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_fecha_inicio";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_fechafinal";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_fechavigencia";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_periodicidad";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_informessug";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_valorant";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_valorinicial";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_valormensual";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_tipoc";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_modalidad";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_causalc";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_objeto";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_tipoproceso";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_formapago";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_fechasistema";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_acta_liquidacion";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_obligaciones";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_plazo";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_vigencias_futuras";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_secop_proceso";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_secop_enlace";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_sigep";
$tdatacontrato_ov[".googleLikeFields"][] = "vf_num_autorizacion";
$tdatacontrato_ov[".googleLikeFields"][] = "vf_fecha";
$tdatacontrato_ov[".googleLikeFields"][] = "vf_valor";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_unspsc";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_tipo_rubro";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_munejec";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_fecha_aprobgarantia";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_numpoliza";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_modifica";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_cesion";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_valorvigente";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_depsup";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_dep";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_valormensual_base";
$tdatacontrato_ov[".googleLikeFields"][] = "cont_valormensual_iva";



$tdatacontrato_ov[".tableType"] = "list";

$tdatacontrato_ov[".printerPageOrientation"] = 0;
$tdatacontrato_ov[".nPrinterPageScale"] = 100;

$tdatacontrato_ov[".nPrinterSplitRecords"] = 40;

$tdatacontrato_ov[".geocodingEnabled"] = false;




$tdatacontrato_ov[".isDisplayLoading"] = true;

$tdatacontrato_ov[".isResizeColumns"] = true;





$tdatacontrato_ov[".pageSize"] = 20;

$tdatacontrato_ov[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_ov[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_ov[".orderindexes"] = array();


$tdatacontrato_ov[".sqlHead"] = "SELECT id_cont,  cont_hash,  cont_ano,  cont_paa_id,  cont_nit_contra_ta,  cont_nit_contra_ta AS nombre_cont,  cont_estado,  prenumero,  numregistro,  pre_contnumero,  contnumero,  cont_tipo,  cont_codrubro,  cont_catalogo_presupuestal,  cont_tipopre,  cont_fechaapertura,  cont_fecha_inicio,  cont_fechafinal,  cont_fechavigencia,  cont_periodicidad,  cont_informessug,  cont_valorant,  cont_valorinicial,  cont_valormensual,  cont_tipoc,  cont_modalidad,  cont_causalc,  cont_objeto,  cont_tipoproceso,  cont_formapago,  cont_fechasistema,  cont_acta_liquidacion,  cont_obligaciones,  cont_plazo,  cont_vigencias_futuras,  cont_secop_proceso,  cont_secop_enlace,  cont_sigep,  vf_num_autorizacion,  vf_fecha,  vf_valor,  cont_unspsc,  cont_tipo_rubro,  cont_munejec,  cont_fecha_aprobgarantia,  cont_numpoliza,  cont_modifica,  cont_cesion,  cont_valorvigente,  cont_depsup,  cont_dep,  cont_valormensual_base,  cont_valormensual_iva";
$tdatacontrato_ov[".sqlFrom"] = "FROM contrato";
$tdatacontrato_ov[".sqlWhereExpr"] = "(cont_ano < 2020)";
$tdatacontrato_ov[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_ov[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_ov[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_ov[".highlightSearchResults"] = true;

$tableKeyscontrato_ov = array();
$tableKeyscontrato_ov[] = "id_cont";
$tdatacontrato_ov[".Keys"] = $tableKeyscontrato_ov;


$tdatacontrato_ov[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","id_cont");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_cont";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["id_cont"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "id_cont";
//	cont_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_hash";
	$fdata["GoodName"] = "cont_hash";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_hash");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_hash";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_hash";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=10";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_hash"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_hash";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_ano");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "cont_ano";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_ano";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vigencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "vigencia";
	$edata["LinkFieldType"] = 2;
	$edata["DisplayField"] = "vigencia";

				$edata["LookupWhere"] = "vigencia < 2020";


	
	$edata["LookupOrderBy"] = "vigencia";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_paa_id";

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_ano"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_ano";
//	cont_paa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_paa_id";
	$fdata["GoodName"] = "cont_paa_id";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_paa_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_paa_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_paa_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "PAA_ID";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_ano", "lookup" => "vigencia" );

	
		$edata["SimpleAdd"] = true;


	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El Número PAA %value% ya se encuentra asociado a otro proceso", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_paa_id"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_paa_id";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_nit_contra_ta");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_nit_contra_ta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_doc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
	
		$edata["AllowToAdd"] = true;
			$edata["addPageId"] = "add";

	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_nit_contra_ta"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_nit_contra_ta";
//	nombre_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_cont";
	$fdata["GoodName"] = "nombre_cont";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","nombre_cont");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_nit_contra_ta";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contractor_master";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "contractor_doc_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "contractor_nombresfull";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["nombre_cont"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "nombre_cont";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_estado");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_estado";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_estado";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_estados";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "estado_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "estado_nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_estado"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_estado";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","prenumero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "prenumero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "prenumero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["prenumero"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","numregistro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numregistro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numregistro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["numregistro"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "numregistro";
//	pre_contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pre_contnumero";
	$fdata["GoodName"] = "pre_contnumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","pre_contnumero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "pre_contnumero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pre_contnumero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_pre";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "codigo";

	

	
	$edata["LookupOrderBy"] = "nombre";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["pre_contnumero"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "pre_contnumero";
//	contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contnumero";
	$fdata["GoodName"] = "contnumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","contnumero");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contnumero";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contnumero";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["contnumero"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "contnumero";
//	cont_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cont_tipo";
	$fdata["GoodName"] = "cont_tipo";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_tipo");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_tipo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_tipo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_tipo"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_tipo";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_codrubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_codrubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_codrubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "PRODUCTO";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "PRODUCTO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_codrubro"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_codrubro";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_catalogo_presupuestal");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_catalogo_presupuestal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_catalogo_presupuestal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "";
	$edata["LookupConnId"] = "";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "IDENTIFICACION";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "IDENTIFICACION";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
		$edata["Multiselect"] = true;

	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_catalogo_presupuestal"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_tipopre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_tipopre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipopre";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_tipo_unidad";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cod_tipounidad";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "cod_tipounidad";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
		$edata["Multiselect"] = true;

		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_tipopre"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_tipopre";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_fechaapertura");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechaapertura";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechaapertura";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 30;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_fechaapertura"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_fechaapertura";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_fecha_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fecha_inicio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_inicio";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 30;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_fecha_inicio"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_fechafinal");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechafinal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechafinal";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 30;
	$edata["LastYearFactor"] = 20;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_fechafinal"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_fechafinal";
//	cont_fechavigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cont_fechavigencia";
	$fdata["GoodName"] = "cont_fechavigencia";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_fechavigencia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fechavigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechavigencia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 30;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_fechavigencia"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_fechavigencia";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_periodicidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_periodicidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_periodicidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "interventor_periodos";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_periodo";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "periodo_name";

	

	
	$edata["LookupOrderBy"] = "periodo_name";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_periodicidad"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_periodicidad";
//	cont_informessug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cont_informessug";
	$fdata["GoodName"] = "cont_informessug";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_informessug");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_informessug";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_informessug";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_informessug"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_informessug";
//	cont_valorant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cont_valorant";
	$fdata["GoodName"] = "cont_valorant";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_valorant");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valorant";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorant";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_valorant"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_valorant";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_valorinicial");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valorinicial";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorinicial";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_valorinicial"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_valormensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valormensual";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Currency");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_valormensual"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_valormensual";
//	cont_tipoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cont_tipoc";
	$fdata["GoodName"] = "cont_tipoc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_tipoc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_tipoc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipo_ct_000";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ct_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ct_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "ct_tipo_nombre";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_modalidad";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_tipoc"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_tipoc";
//	cont_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cont_modalidad";
	$fdata["GoodName"] = "cont_modalidad";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_modalidad");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_modalidad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modalidad";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipo_ct_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cta_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cta_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "cta_tipo_nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_tipoc", "lookup" => "ct_tipo_id_fk" );

	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_causalc";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_modalidad"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_modalidad";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_causalc");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_causalc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_causalc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipo_ct_002";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ctb_tipo_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "ctb_tipo_nombre";

	

	
	$edata["LookupOrderBy"] = "ctb_tipo_nombre";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_modalidad", "lookup" => "cta_tipo_id_fk" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_causalc"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_causalc";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_objeto");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cont_objeto";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_objeto";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 250;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_objeto"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_objeto";
//	cont_tipoproceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cont_tipoproceso";
	$fdata["GoodName"] = "cont_tipoproceso";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_tipoproceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_tipoproceso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipoproceso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "cont_tipo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nom_tipocontrato";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_tipoproceso"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_tipoproceso";
//	cont_formapago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "cont_formapago";
	$fdata["GoodName"] = "cont_formapago";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_formapago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_formapago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_formapago";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "contrato_forma_pago";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "codigo";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_formapago"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_formapago";
//	cont_fechasistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_fechasistema";
	$fdata["GoodName"] = "cont_fechasistema";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_fechasistema");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "cont_fechasistema";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fechasistema";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
		$edata["autoUpdatable"] = true;

//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_fechasistema"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_fechasistema";
//	cont_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "cont_acta_liquidacion";
	$fdata["GoodName"] = "cont_acta_liquidacion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_acta_liquidacion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_acta_liquidacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_acta_liquidacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "sn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_acta_liquidacion"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_acta_liquidacion";
//	cont_obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cont_obligaciones";
	$fdata["GoodName"] = "cont_obligaciones";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_obligaciones");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cont_obligaciones";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_obligaciones";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_obligaciones"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_obligaciones";
//	cont_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_plazo";
	$fdata["GoodName"] = "cont_plazo";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_plazo");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "cont_plazo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_plazo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_plazo"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_plazo";
//	cont_vigencias_futuras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cont_vigencias_futuras";
	$fdata["GoodName"] = "cont_vigencias_futuras";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_vigencias_futuras");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_vigencias_futuras";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_vigencias_futuras";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_vigencias_futuras"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_vigencias_futuras";
//	cont_secop_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_secop_proceso";
	$fdata["GoodName"] = "cont_secop_proceso";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_secop_proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_secop_proceso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_proceso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=20";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "El proceso ingresado ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_secop_proceso"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_secop_proceso";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_secop_enlace");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_secop_enlace";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_enlace";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Hyperlink");

	
	
	
	
	
				$vdata["hlNewWindow"] = true;
	$vdata["hlType"] = 1;
	$vdata["hlLinkWordNameType"] = "Text";
	$vdata["hlLinkWordText"] = "Enlace a SECOP";
	$vdata["hlTitleField"] = "cont_secop_enlace";

	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "url";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
								$edata["validateAs"]["basicValidate"][] = "DenyDuplicated";
	$edata["validateAs"]["customMessages"]["DenyDuplicated"] = array("message" => "Enlace ya existe", "messageType" => "Text");

	
//	End validation

	
			
	
		$edata["denyDuplicates"] = true;

	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_secop_enlace"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_secop_enlace";
//	cont_sigep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_sigep";
	$fdata["GoodName"] = "cont_sigep";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_sigep");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_sigep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_sigep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tipo_si_no";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "sn_name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_sigep"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_sigep";
//	vf_num_autorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "vf_num_autorizacion";
	$fdata["GoodName"] = "vf_num_autorizacion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","vf_num_autorizacion");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "vf_num_autorizacion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vf_num_autorizacion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["vf_num_autorizacion"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "vf_num_autorizacion";
//	vf_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "vf_fecha";
	$fdata["GoodName"] = "vf_fecha";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","vf_fecha");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "vf_fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vf_fecha";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["vf_fecha"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "vf_fecha";
//	vf_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "vf_valor";
	$fdata["GoodName"] = "vf_valor";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","vf_valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "vf_valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vf_valor";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["vf_valor"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "vf_valor";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_unspsc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_unspsc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_unspsc";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=48";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_unspsc"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_unspsc";
//	cont_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "cont_tipo_rubro";
	$fdata["GoodName"] = "cont_tipo_rubro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_tipo_rubro");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_tipo_rubro";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_tipo_rubro";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tparam_tipo_ct_rubro";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "rubro_id";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "tipo_rubro";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_tipo_rubro"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_tipo_rubro";
//	cont_munejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "cont_munejec";
	$fdata["GoodName"] = "cont_munejec";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_munejec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_munejec";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_munejec";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_divipola";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_munejec"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_munejec";
//	cont_fecha_aprobgarantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "cont_fecha_aprobgarantia";
	$fdata["GoodName"] = "cont_fecha_aprobgarantia";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_fecha_aprobgarantia");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "cont_fecha_aprobgarantia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fecha_aprobgarantia";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 1;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_fecha_aprobgarantia"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_fecha_aprobgarantia";
//	cont_numpoliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "cont_numpoliza";
	$fdata["GoodName"] = "cont_numpoliza";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_numpoliza");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_numpoliza";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_numpoliza";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_numpoliza"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_numpoliza";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_modifica");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_modifica";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_modifica";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_modifica"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_modifica";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_cesion");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_cesion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_cesion";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_cesion"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_cesion";
//	cont_valorvigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cont_valorvigente";
	$fdata["GoodName"] = "cont_valorvigente";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_valorvigente");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valorvigente";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valorvigente";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_valorvigente"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_valorvigente";
//	cont_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_depsup";
	$fdata["GoodName"] = "cont_depsup";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_depsup");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_depsup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_depsup";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencias_001";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_depto_superior";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Departamento_superior";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "cont_dep";

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_depsup"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_depsup";
//	cont_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "cont_dep";
	$fdata["GoodName"] = "cont_dep";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_dep");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cont_dep";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_dep";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "dependencia";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "cont_depsup", "lookup" => "id_depto_superior" );

	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_dep"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_dep";
//	cont_valormensual_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "cont_valormensual_base";
	$fdata["GoodName"] = "cont_valormensual_base";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_valormensual_base");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valormensual_base";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual_base";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_valormensual_base"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_valormensual_base";
//	cont_valormensual_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "cont_valormensual_iva";
	$fdata["GoodName"] = "cont_valormensual_iva";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_ov","cont_valormensual_iva");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valormensual_iva";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual_iva";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Currency");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_ov["cont_valormensual_iva"] = $fdata;
		$tdatacontrato_ov[".searchableFields"][] = "cont_valormensual_iva";


$tables_data["contrato_ov"]=&$tdatacontrato_ov;
$field_labels["contrato_ov"] = &$fieldLabelscontrato_ov;
$fieldToolTips["contrato_ov"] = &$fieldToolTipscontrato_ov;
$placeHolders["contrato_ov"] = &$placeHolderscontrato_ov;
$page_titles["contrato_ov"] = &$pageTitlescontrato_ov;


changeTextControlsToDate( "contrato_ov" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_ov"] = array();
//	contrato_attached_ov
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_attached_ov";
		$detailsParam["dOriginalTable"] = "contrato_attached";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_attached_ov";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_attached_ov");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_ov"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_ov"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_ov"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_ov"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_ov"][$dIndex]["detailKeys"][]="id_cont_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_ov"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_ov()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  cont_hash,  cont_ano,  cont_paa_id,  cont_nit_contra_ta,  cont_nit_contra_ta AS nombre_cont,  cont_estado,  prenumero,  numregistro,  pre_contnumero,  contnumero,  cont_tipo,  cont_codrubro,  cont_catalogo_presupuestal,  cont_tipopre,  cont_fechaapertura,  cont_fecha_inicio,  cont_fechafinal,  cont_fechavigencia,  cont_periodicidad,  cont_informessug,  cont_valorant,  cont_valorinicial,  cont_valormensual,  cont_tipoc,  cont_modalidad,  cont_causalc,  cont_objeto,  cont_tipoproceso,  cont_formapago,  cont_fechasistema,  cont_acta_liquidacion,  cont_obligaciones,  cont_plazo,  cont_vigencias_futuras,  cont_secop_proceso,  cont_secop_enlace,  cont_sigep,  vf_num_autorizacion,  vf_fecha,  vf_valor,  cont_unspsc,  cont_tipo_rubro,  cont_munejec,  cont_fecha_aprobgarantia,  cont_numpoliza,  cont_modifica,  cont_cesion,  cont_valorvigente,  cont_depsup,  cont_dep,  cont_valormensual_base,  cont_valormensual_iva";
$proto0["m_strFrom"] = "FROM contrato";
$proto0["m_strWhere"] = "(cont_ano < 2020)";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cont_ano < 2020";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "< 2020";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "contrato_ov";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto8["m_sql"] = "cont_hash";
$proto8["m_srcTableName"] = "contrato_ov";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto10["m_sql"] = "cont_ano";
$proto10["m_srcTableName"] = "contrato_ov";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_paa_id",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto12["m_sql"] = "cont_paa_id";
$proto12["m_srcTableName"] = "contrato_ov";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto14["m_sql"] = "cont_nit_contra_ta";
$proto14["m_srcTableName"] = "contrato_ov";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto16["m_sql"] = "cont_nit_contra_ta";
$proto16["m_srcTableName"] = "contrato_ov";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "nombre_cont";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto18["m_sql"] = "cont_estado";
$proto18["m_srcTableName"] = "contrato_ov";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto20["m_sql"] = "prenumero";
$proto20["m_srcTableName"] = "contrato_ov";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto22["m_sql"] = "numregistro";
$proto22["m_srcTableName"] = "contrato_ov";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_contnumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto24["m_sql"] = "pre_contnumero";
$proto24["m_srcTableName"] = "contrato_ov";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contnumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto26["m_sql"] = "contnumero";
$proto26["m_srcTableName"] = "contrato_ov";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto28["m_sql"] = "cont_tipo";
$proto28["m_srcTableName"] = "contrato_ov";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto30["m_sql"] = "cont_codrubro";
$proto30["m_srcTableName"] = "contrato_ov";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto32["m_sql"] = "cont_catalogo_presupuestal";
$proto32["m_srcTableName"] = "contrato_ov";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto34["m_sql"] = "cont_tipopre";
$proto34["m_srcTableName"] = "contrato_ov";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto36["m_sql"] = "cont_fechaapertura";
$proto36["m_srcTableName"] = "contrato_ov";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto38["m_sql"] = "cont_fecha_inicio";
$proto38["m_srcTableName"] = "contrato_ov";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto40["m_sql"] = "cont_fechafinal";
$proto40["m_srcTableName"] = "contrato_ov";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechavigencia",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto42["m_sql"] = "cont_fechavigencia";
$proto42["m_srcTableName"] = "contrato_ov";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto44["m_sql"] = "cont_periodicidad";
$proto44["m_srcTableName"] = "contrato_ov";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_informessug",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto46["m_sql"] = "cont_informessug";
$proto46["m_srcTableName"] = "contrato_ov";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorant",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto48["m_sql"] = "cont_valorant";
$proto48["m_srcTableName"] = "contrato_ov";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto50["m_sql"] = "cont_valorinicial";
$proto50["m_srcTableName"] = "contrato_ov";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto52["m_sql"] = "cont_valormensual";
$proto52["m_srcTableName"] = "contrato_ov";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto54["m_sql"] = "cont_tipoc";
$proto54["m_srcTableName"] = "contrato_ov";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modalidad",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto56["m_sql"] = "cont_modalidad";
$proto56["m_srcTableName"] = "contrato_ov";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto58["m_sql"] = "cont_causalc";
$proto58["m_srcTableName"] = "contrato_ov";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto60["m_sql"] = "cont_objeto";
$proto60["m_srcTableName"] = "contrato_ov";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoproceso",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto62["m_sql"] = "cont_tipoproceso";
$proto62["m_srcTableName"] = "contrato_ov";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_formapago",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto64["m_sql"] = "cont_formapago";
$proto64["m_srcTableName"] = "contrato_ov";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechasistema",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto66["m_sql"] = "cont_fechasistema";
$proto66["m_srcTableName"] = "contrato_ov";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_acta_liquidacion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto68["m_sql"] = "cont_acta_liquidacion";
$proto68["m_srcTableName"] = "contrato_ov";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_obligaciones",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto70["m_sql"] = "cont_obligaciones";
$proto70["m_srcTableName"] = "contrato_ov";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_plazo",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto72["m_sql"] = "cont_plazo";
$proto72["m_srcTableName"] = "contrato_ov";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_vigencias_futuras",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto74["m_sql"] = "cont_vigencias_futuras";
$proto74["m_srcTableName"] = "contrato_ov";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_proceso",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto76["m_sql"] = "cont_secop_proceso";
$proto76["m_srcTableName"] = "contrato_ov";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto78["m_sql"] = "cont_secop_enlace";
$proto78["m_srcTableName"] = "contrato_ov";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_sigep",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto80["m_sql"] = "cont_sigep";
$proto80["m_srcTableName"] = "contrato_ov";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_num_autorizacion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto82["m_sql"] = "vf_num_autorizacion";
$proto82["m_srcTableName"] = "contrato_ov";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_fecha",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto84["m_sql"] = "vf_fecha";
$proto84["m_srcTableName"] = "contrato_ov";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_valor",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto86["m_sql"] = "vf_valor";
$proto86["m_srcTableName"] = "contrato_ov";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto88["m_sql"] = "cont_unspsc";
$proto88["m_srcTableName"] = "contrato_ov";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto90["m_sql"] = "cont_tipo_rubro";
$proto90["m_srcTableName"] = "contrato_ov";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_munejec",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto92["m_sql"] = "cont_munejec";
$proto92["m_srcTableName"] = "contrato_ov";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_aprobgarantia",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto94["m_sql"] = "cont_fecha_aprobgarantia";
$proto94["m_srcTableName"] = "contrato_ov";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_numpoliza",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto96["m_sql"] = "cont_numpoliza";
$proto96["m_srcTableName"] = "contrato_ov";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto98["m_sql"] = "cont_modifica";
$proto98["m_srcTableName"] = "contrato_ov";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto100["m_sql"] = "cont_cesion";
$proto100["m_srcTableName"] = "contrato_ov";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorvigente",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto102["m_sql"] = "cont_valorvigente";
$proto102["m_srcTableName"] = "contrato_ov";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_depsup",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto104["m_sql"] = "cont_depsup";
$proto104["m_srcTableName"] = "contrato_ov";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_dep",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto106["m_sql"] = "cont_dep";
$proto106["m_srcTableName"] = "contrato_ov";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_base",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto108["m_sql"] = "cont_valormensual_base";
$proto108["m_srcTableName"] = "contrato_ov";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_iva",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_ov"
));

$proto110["m_sql"] = "cont_valormensual_iva";
$proto110["m_srcTableName"] = "contrato_ov";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto112=array();
$proto112["m_link"] = "SQLL_MAIN";
			$proto113=array();
$proto113["m_strName"] = "contrato";
$proto113["m_srcTableName"] = "contrato_ov";
$proto113["m_columns"] = array();
$proto113["m_columns"][] = "id_cont";
$proto113["m_columns"][] = "cont_hash";
$proto113["m_columns"][] = "cont_nit_contra_ta";
$proto113["m_columns"][] = "cont_paa_id";
$proto113["m_columns"][] = "cont_estado";
$proto113["m_columns"][] = "prenumero";
$proto113["m_columns"][] = "numregistro";
$proto113["m_columns"][] = "pre_contnumero";
$proto113["m_columns"][] = "contnumero";
$proto113["m_columns"][] = "cont_unspsc";
$proto113["m_columns"][] = "cont_munejec";
$proto113["m_columns"][] = "cont_tipo";
$proto113["m_columns"][] = "cont_ano";
$proto113["m_columns"][] = "cont_codrubro";
$proto113["m_columns"][] = "cont_tipo_rubro";
$proto113["m_columns"][] = "cont_reg_sigep";
$proto113["m_columns"][] = "cont_catalogo_presupuestal";
$proto113["m_columns"][] = "cont_tipopre";
$proto113["m_columns"][] = "cont_fechaapertura";
$proto113["m_columns"][] = "cont_plazoi";
$proto113["m_columns"][] = "cont_fecha_inicio";
$proto113["m_columns"][] = "cont_fechafinal";
$proto113["m_columns"][] = "cont_fechavigencia";
$proto113["m_columns"][] = "cont_periodicidad";
$proto113["m_columns"][] = "cont_informessug";
$proto113["m_columns"][] = "cont_otrosi";
$proto113["m_columns"][] = "cont_otrosi_type";
$proto113["m_columns"][] = "cont_valorant";
$proto113["m_columns"][] = "cont_valorinicial";
$proto113["m_columns"][] = "cont_valormensual";
$proto113["m_columns"][] = "cont_iva";
$proto113["m_columns"][] = "cont_valormensual_base";
$proto113["m_columns"][] = "cont_valormensual_iva";
$proto113["m_columns"][] = "cont_valorvigente";
$proto113["m_columns"][] = "cont_valorreduc_fecha";
$proto113["m_columns"][] = "cont_valorreduc";
$proto113["m_columns"][] = "cont_valors";
$proto113["m_columns"][] = "cont_lugar";
$proto113["m_columns"][] = "cont_region";
$proto113["m_columns"][] = "cont_requactaliq";
$proto113["m_columns"][] = "cont_plazol";
$proto113["m_columns"][] = "cont_tipoproceso";
$proto113["m_columns"][] = "cont_formapago";
$proto113["m_columns"][] = "cont_tipoc";
$proto113["m_columns"][] = "cont_modalidad";
$proto113["m_columns"][] = "cont_causalc";
$proto113["m_columns"][] = "cont_funcion";
$proto113["m_columns"][] = "cesion_estado";
$proto113["m_columns"][] = "cont_acta_liquidacion";
$proto113["m_columns"][] = "cont_fecha_aprobgarantia";
$proto113["m_columns"][] = "cont_afilia_arl";
$proto113["m_columns"][] = "cont_excluir_notificacion";
$proto113["m_columns"][] = "cont_depsup";
$proto113["m_columns"][] = "cont_dep";
$proto113["m_columns"][] = "cont_lugar_prestacion";
$proto113["m_columns"][] = "cont_objeto";
$proto113["m_columns"][] = "cont_obligaciones";
$proto113["m_columns"][] = "cont_plazo";
$proto113["m_columns"][] = "cont_tipo_regimen";
$proto113["m_columns"][] = "cont_fecha_firma";
$proto113["m_columns"][] = "cont_secop_proceso";
$proto113["m_columns"][] = "cont_secop_enlace";
$proto113["m_columns"][] = "cont_sigep";
$proto113["m_columns"][] = "cont_vigencias_futuras";
$proto113["m_columns"][] = "vf_num_autorizacion";
$proto113["m_columns"][] = "vf_fecha";
$proto113["m_columns"][] = "vf_valor";
$proto113["m_columns"][] = "cont_fechasistema";
$proto113["m_columns"][] = "cont_fase";
$proto113["m_columns"][] = "cont_numpoliza";
$proto113["m_columns"][] = "cont_cesion";
$proto113["m_columns"][] = "cont_modifica";
$proto113["m_columns"][] = "cont_auditoria";
$proto113["m_columns"][] = "cont_expedientenum";
$proto113["m_columns"][] = "cont_expediente_fecha";
$obj = new SQLTable($proto113);

$proto112["m_table"] = $obj;
$proto112["m_sql"] = "contrato";
$proto112["m_alias"] = "";
$proto112["m_srcTableName"] = "contrato_ov";
$proto114=array();
$proto114["m_sql"] = "";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

$proto112["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto112);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_ov";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_ov = createSqlQuery_contrato_ov();


	
												;

																																																					

$tdatacontrato_ov[".sqlquery"] = $queryData_contrato_ov;



include_once(getabspath("include/contrato_ov_events.php"));
$tdatacontrato_ov[".hasEvents"] = true;

?>