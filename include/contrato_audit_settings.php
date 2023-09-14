<?php
$tdatacontrato_audit = array();
$tdatacontrato_audit[".searchableFields"] = array();
$tdatacontrato_audit[".ShortName"] = "contrato_audit";
$tdatacontrato_audit[".OwnerID"] = "";
$tdatacontrato_audit[".OriginalTable"] = "contrato";


$tdatacontrato_audit[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\",\"edit1\",\"edit2\",\"edit3\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_audit[".originalPagesByType"] = $tdatacontrato_audit[".pagesByType"];
$tdatacontrato_audit[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\",\"edit1\",\"edit2\",\"edit3\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_audit[".originalPages"] = $tdatacontrato_audit[".pages"];
$tdatacontrato_audit[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_audit[".originalDefaultPages"] = $tdatacontrato_audit[".defaultPages"];

//	field labels
$fieldLabelscontrato_audit = array();
$fieldToolTipscontrato_audit = array();
$pageTitlescontrato_audit = array();
$placeHolderscontrato_audit = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_audit["Spanish"] = array();
	$fieldToolTipscontrato_audit["Spanish"] = array();
	$placeHolderscontrato_audit["Spanish"] = array();
	$pageTitlescontrato_audit["Spanish"] = array();
	$fieldLabelscontrato_audit["Spanish"]["id_cont"] = "Código Interno";
	$fieldToolTipscontrato_audit["Spanish"]["id_cont"] = "";
	$placeHolderscontrato_audit["Spanish"]["id_cont"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_hash"] = "Cont Hash";
	$fieldToolTipscontrato_audit["Spanish"]["cont_hash"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_hash"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_nit_contra_ta"] = "Contratista";
	$fieldToolTipscontrato_audit["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_paa_id"] = "PAA ID";
	$fieldToolTipscontrato_audit["Spanish"]["cont_paa_id"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_paa_id"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_estado"] = "Estado";
	$fieldToolTipscontrato_audit["Spanish"]["cont_estado"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_estado"] = "";
	$fieldLabelscontrato_audit["Spanish"]["prenumero"] = "Registro presupuestal | Compromiso";
	$fieldToolTipscontrato_audit["Spanish"]["prenumero"] = "";
	$placeHolderscontrato_audit["Spanish"]["prenumero"] = "";
	$fieldLabelscontrato_audit["Spanish"]["numregistro"] = "CDP";
	$fieldToolTipscontrato_audit["Spanish"]["numregistro"] = "";
	$placeHolderscontrato_audit["Spanish"]["numregistro"] = "";
	$fieldLabelscontrato_audit["Spanish"]["pre_contnumero"] = "Pre número";
	$fieldToolTipscontrato_audit["Spanish"]["pre_contnumero"] = "";
	$placeHolderscontrato_audit["Spanish"]["pre_contnumero"] = "";
	$fieldLabelscontrato_audit["Spanish"]["contnumero"] = "Número de contrato";
	$fieldToolTipscontrato_audit["Spanish"]["contnumero"] = "";
	$placeHolderscontrato_audit["Spanish"]["contnumero"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_tipo"] = "Tipo de CDP";
	$fieldToolTipscontrato_audit["Spanish"]["cont_tipo"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_tipo"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_ano"] = "Vigencia";
	$fieldToolTipscontrato_audit["Spanish"]["cont_ano"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_ano"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_codrubro"] = "Rubro | Producto";
	$fieldToolTipscontrato_audit["Spanish"]["cont_codrubro"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_codrubro"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_catalogo_presupuestal"] = "Catálogo | Uso presupuestal";
	$fieldToolTipscontrato_audit["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_tipopre"] = "Unidad ejecutora";
	$fieldToolTipscontrato_audit["Spanish"]["cont_tipopre"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_tipopre"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_fechaapertura"] = "Fecha suscripción";
	$fieldToolTipscontrato_audit["Spanish"]["cont_fechaapertura"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_fecha_inicio"] = "Fecha de inicio del contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_fecha_inicio"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_fechafinal"] = "Fecha final del contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_fechafinal"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_fechavigencia"] = "Fecha vigencia del contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_fechavigencia"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_fechavigencia"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_periodicidad"] = "Periodicidad";
	$fieldToolTipscontrato_audit["Spanish"]["cont_periodicidad"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_informessug"] = "Informes sugeridos";
	$fieldToolTipscontrato_audit["Spanish"]["cont_informessug"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_informessug"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_valorant"] = "Valor total del contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_valorant"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_valorant"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_valorinicial"] = "Valor inicial del contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_valorinicial"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_valormensual"] = "Valor mensual a pagar";
	$fieldToolTipscontrato_audit["Spanish"]["cont_valormensual"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_valormensual"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_modalidad"] = "Modalidad";
	$fieldToolTipscontrato_audit["Spanish"]["cont_modalidad"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_modalidad"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_objeto"] = "Objeto del contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_objeto"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_objeto"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_tipoproceso"] = "Tipo de proceso";
	$fieldToolTipscontrato_audit["Spanish"]["cont_tipoproceso"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_tipoproceso"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_formapago"] = "Forma de pago";
	$fieldToolTipscontrato_audit["Spanish"]["cont_formapago"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_formapago"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_fechasistema"] = "Fecha del sistema";
	$fieldToolTipscontrato_audit["Spanish"]["cont_fechasistema"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_fechasistema"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_acta_liquidacion"] = "Requiere acta de liquidación?";
	$fieldToolTipscontrato_audit["Spanish"]["cont_acta_liquidacion"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_acta_liquidacion"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_tipoc"] = "Tipo de contrato";
	$fieldToolTipscontrato_audit["Spanish"]["cont_tipoc"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_tipoc"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_causalc"] = "Causal";
	$fieldToolTipscontrato_audit["Spanish"]["cont_causalc"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_causalc"] = "";
	$fieldLabelscontrato_audit["Spanish"]["nombre_cont"] = "Razón social / Nombre";
	$fieldToolTipscontrato_audit["Spanish"]["nombre_cont"] = "";
	$placeHolderscontrato_audit["Spanish"]["nombre_cont"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_obligaciones"] = "Obligaciones generales";
	$fieldToolTipscontrato_audit["Spanish"]["cont_obligaciones"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_obligaciones"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_plazo"] = "Plazo";
	$fieldToolTipscontrato_audit["Spanish"]["cont_plazo"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_plazo"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_vigencias_futuras"] = "¿Contrato con vigencias futuras?";
	$fieldToolTipscontrato_audit["Spanish"]["cont_vigencias_futuras"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_vigencias_futuras"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_secop_proceso"] = "Número de proceso SECOP";
	$fieldToolTipscontrato_audit["Spanish"]["cont_secop_proceso"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_secop_proceso"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_secop_enlace"] = "Enlace a SECOP";
	$fieldToolTipscontrato_audit["Spanish"]["cont_secop_enlace"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_sigep"] = "¿ Información en SIGEP?";
	$fieldToolTipscontrato_audit["Spanish"]["cont_sigep"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_sigep"] = "";
	$fieldLabelscontrato_audit["Spanish"]["vf_num_autorizacion"] = "Número de autorizacion";
	$fieldToolTipscontrato_audit["Spanish"]["vf_num_autorizacion"] = "";
	$placeHolderscontrato_audit["Spanish"]["vf_num_autorizacion"] = "";
	$fieldLabelscontrato_audit["Spanish"]["vf_fecha"] = "Fecha de autorización";
	$fieldToolTipscontrato_audit["Spanish"]["vf_fecha"] = "";
	$placeHolderscontrato_audit["Spanish"]["vf_fecha"] = "";
	$fieldLabelscontrato_audit["Spanish"]["vf_valor"] = "Valor de la vigencia futura";
	$fieldToolTipscontrato_audit["Spanish"]["vf_valor"] = "";
	$placeHolderscontrato_audit["Spanish"]["vf_valor"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_unspsc"] = "Códigos UNSPSC";
	$fieldToolTipscontrato_audit["Spanish"]["cont_unspsc"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_unspsc"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_tipo_rubro"] = "Tipo de rubro";
	$fieldToolTipscontrato_audit["Spanish"]["cont_tipo_rubro"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_tipo_rubro"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_munejec"] = "Municipio de ejecución";
	$fieldToolTipscontrato_audit["Spanish"]["cont_munejec"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_munejec"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_fecha_aprobgarantia"] = "Fecha aprobación garantía";
	$fieldToolTipscontrato_audit["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_numpoliza"] = "Número de póliza";
	$fieldToolTipscontrato_audit["Spanish"]["cont_numpoliza"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_numpoliza"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_modifica"] = "Habilitar modificación";
	$fieldToolTipscontrato_audit["Spanish"]["cont_modifica"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_modifica"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_cesion"] = "Habilitar Cesión";
	$fieldToolTipscontrato_audit["Spanish"]["cont_cesion"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_cesion"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_valorvigente"] = "Valor actual";
	$fieldToolTipscontrato_audit["Spanish"]["cont_valorvigente"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_valorvigente"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_depsup"] = "Dependencia general";
	$fieldToolTipscontrato_audit["Spanish"]["cont_depsup"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_depsup"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_dep"] = "Dependencia específica";
	$fieldToolTipscontrato_audit["Spanish"]["cont_dep"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_dep"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_valormensual_base"] = "Valor mensual base";
	$fieldToolTipscontrato_audit["Spanish"]["cont_valormensual_base"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_valormensual_base"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_valormensual_iva"] = "Valor de IVA";
	$fieldToolTipscontrato_audit["Spanish"]["cont_valormensual_iva"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_valormensual_iva"] = "";
	$fieldLabelscontrato_audit["Spanish"]["cont_auditoria"] = "Habilitar para auditoría";
	$fieldToolTipscontrato_audit["Spanish"]["cont_auditoria"] = "";
	$placeHolderscontrato_audit["Spanish"]["cont_auditoria"] = "";
	if (count($fieldToolTipscontrato_audit["Spanish"]))
		$tdatacontrato_audit[".isUseToolTips"] = true;
}


	$tdatacontrato_audit[".NCSearch"] = true;



$tdatacontrato_audit[".shortTableName"] = "contrato_audit";
$tdatacontrato_audit[".nSecOptions"] = 0;

$tdatacontrato_audit[".mainTableOwnerID"] = "";
$tdatacontrato_audit[".entityType"] = 1;
$tdatacontrato_audit[".connId"] = "dbct_at_localhost";


$tdatacontrato_audit[".strOriginalTableName"] = "contrato";

	



$tdatacontrato_audit[".showAddInPopup"] = false;

$tdatacontrato_audit[".showEditInPopup"] = false;

$tdatacontrato_audit[".showViewInPopup"] = false;

$tdatacontrato_audit[".listAjax"] = false;
//	temporary
//$tdatacontrato_audit[".listAjax"] = false;

	$tdatacontrato_audit[".audit"] = true;

	$tdatacontrato_audit[".locking"] = true;


$pages = $tdatacontrato_audit[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_audit[".edit"] = true;
	$tdatacontrato_audit[".afterEditAction"] = 1;
	$tdatacontrato_audit[".closePopupAfterEdit"] = 1;
	$tdatacontrato_audit[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_audit[".add"] = true;
$tdatacontrato_audit[".afterAddAction"] = 0;
$tdatacontrato_audit[".closePopupAfterAdd"] = 1;
$tdatacontrato_audit[".afterAddActionDetTable"] = "contrato_attached";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_audit[".list"] = true;
}



$tdatacontrato_audit[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_audit[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_audit[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_audit[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_audit[".printFriendly"] = true;
}



$tdatacontrato_audit[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_audit[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_audit[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_audit[".isUseAjaxSuggest"] = true;



																																																																																										

$tdatacontrato_audit[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_audit[".buttonsAdded"] = false;

$tdatacontrato_audit[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_audit[".isUseTimeForSearch"] = false;


$tdatacontrato_audit[".badgeColor"] = "E67349";


$tdatacontrato_audit[".allSearchFields"] = array();
$tdatacontrato_audit[".filterFields"] = array();
$tdatacontrato_audit[".requiredSearchFields"] = array();

$tdatacontrato_audit[".googleLikeFields"] = array();
$tdatacontrato_audit[".googleLikeFields"][] = "id_cont";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_hash";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_ano";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_paa_id";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdatacontrato_audit[".googleLikeFields"][] = "nombre_cont";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_estado";
$tdatacontrato_audit[".googleLikeFields"][] = "prenumero";
$tdatacontrato_audit[".googleLikeFields"][] = "numregistro";
$tdatacontrato_audit[".googleLikeFields"][] = "pre_contnumero";
$tdatacontrato_audit[".googleLikeFields"][] = "contnumero";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_tipo";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_codrubro";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_tipopre";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_fechaapertura";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_fecha_inicio";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_fechafinal";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_fechavigencia";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_periodicidad";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_informessug";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_valorant";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_valorinicial";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_valormensual";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_tipoc";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_modalidad";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_causalc";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_objeto";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_tipoproceso";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_formapago";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_fechasistema";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_acta_liquidacion";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_obligaciones";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_plazo";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_vigencias_futuras";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_secop_proceso";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_secop_enlace";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_sigep";
$tdatacontrato_audit[".googleLikeFields"][] = "vf_num_autorizacion";
$tdatacontrato_audit[".googleLikeFields"][] = "vf_fecha";
$tdatacontrato_audit[".googleLikeFields"][] = "vf_valor";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_unspsc";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_tipo_rubro";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_munejec";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_fecha_aprobgarantia";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_numpoliza";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_modifica";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_cesion";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_valorvigente";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_depsup";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_dep";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_valormensual_base";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_valormensual_iva";
$tdatacontrato_audit[".googleLikeFields"][] = "cont_auditoria";



$tdatacontrato_audit[".tableType"] = "list";

$tdatacontrato_audit[".printerPageOrientation"] = 0;
$tdatacontrato_audit[".nPrinterPageScale"] = 100;

$tdatacontrato_audit[".nPrinterSplitRecords"] = 40;

$tdatacontrato_audit[".geocodingEnabled"] = false;




$tdatacontrato_audit[".isDisplayLoading"] = true;

$tdatacontrato_audit[".isResizeColumns"] = true;


$tdatacontrato_audit[".noRecordsFirstPage"] = true;



$tdatacontrato_audit[".pageSize"] = 20;

$tdatacontrato_audit[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_audit[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_audit[".orderindexes"] = array();


$tdatacontrato_audit[".sqlHead"] = "SELECT id_cont,  cont_hash,  cont_ano,  cont_paa_id,  cont_nit_contra_ta,  cont_nit_contra_ta AS nombre_cont,  cont_estado,  prenumero,  numregistro,  pre_contnumero,  contnumero,  cont_tipo,  cont_codrubro,  cont_catalogo_presupuestal,  cont_tipopre,  cont_fechaapertura,  cont_fecha_inicio,  cont_fechafinal,  cont_fechavigencia,  cont_periodicidad,  cont_informessug,  cont_valorant,  cont_valorinicial,  cont_valormensual,  cont_tipoc,  cont_modalidad,  cont_causalc,  cont_objeto,  cont_tipoproceso,  cont_formapago,  cont_fechasistema,  cont_acta_liquidacion,  cont_obligaciones,  cont_plazo,  cont_vigencias_futuras,  cont_secop_proceso,  cont_secop_enlace,  cont_sigep,  vf_num_autorizacion,  vf_fecha,  vf_valor,  cont_unspsc,  cont_tipo_rubro,  cont_munejec,  cont_fecha_aprobgarantia,  cont_numpoliza,  cont_modifica,  cont_cesion,  cont_valorvigente,  cont_depsup,  cont_dep,  cont_valormensual_base,  cont_valormensual_iva,  cont_auditoria";
$tdatacontrato_audit[".sqlFrom"] = "FROM contrato";
$tdatacontrato_audit[".sqlWhereExpr"] = "(cont_auditoria = 1)";
$tdatacontrato_audit[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_audit[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_audit[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_audit[".highlightSearchResults"] = true;

$tableKeyscontrato_audit = array();
$tableKeyscontrato_audit[] = "id_cont";
$tdatacontrato_audit[".Keys"] = $tableKeyscontrato_audit;


$tdatacontrato_audit[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","id_cont");
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


	$tdatacontrato_audit["id_cont"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "id_cont";
//	cont_hash
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "cont_hash";
	$fdata["GoodName"] = "cont_hash";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_hash");
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


	$tdatacontrato_audit["cont_hash"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_hash";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_ano");
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

				$edata["LookupWhere"] = "vigencia >= 2020";


	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_audit["cont_ano"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_ano";
//	cont_paa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_paa_id";
	$fdata["GoodName"] = "cont_paa_id";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_paa_id");
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
			$edata["autoCompleteFieldsOnEdit"] = 1;
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


	$tdatacontrato_audit["cont_paa_id"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_paa_id";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_nit_contra_ta");
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


	$tdatacontrato_audit["cont_nit_contra_ta"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_nit_contra_ta";
//	nombre_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombre_cont";
	$fdata["GoodName"] = "nombre_cont";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","nombre_cont");
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


	$tdatacontrato_audit["nombre_cont"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "nombre_cont";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_estado");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 0;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_audit["cont_estado"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_estado";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","prenumero");
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


	$tdatacontrato_audit["prenumero"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","numregistro");
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


	$tdatacontrato_audit["numregistro"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "numregistro";
//	pre_contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "pre_contnumero";
	$fdata["GoodName"] = "pre_contnumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","pre_contnumero");
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
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_audit["pre_contnumero"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "pre_contnumero";
//	contnumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contnumero";
	$fdata["GoodName"] = "contnumero";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","contnumero");
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


	$tdatacontrato_audit["contnumero"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "contnumero";
//	cont_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cont_tipo";
	$fdata["GoodName"] = "cont_tipo";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_tipo");
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


	$tdatacontrato_audit["cont_tipo"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_tipo";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_codrubro");
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


	$tdatacontrato_audit["cont_codrubro"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_codrubro";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_catalogo_presupuestal");
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


	$tdatacontrato_audit["cont_catalogo_presupuestal"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_tipopre");
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


	$tdatacontrato_audit["cont_tipopre"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_tipopre";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_fechaapertura");
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
	$edata["InitialYearFactor"] = 10;
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


	$tdatacontrato_audit["cont_fechaapertura"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_fechaapertura";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_fecha_inicio");
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
	$edata["InitialYearFactor"] = 5;
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


	$tdatacontrato_audit["cont_fecha_inicio"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_fechafinal");
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
	$edata["InitialYearFactor"] = 5;
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


	$tdatacontrato_audit["cont_fechafinal"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_fechafinal";
//	cont_fechavigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cont_fechavigencia";
	$fdata["GoodName"] = "cont_fechavigencia";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_fechavigencia");
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
	$edata["InitialYearFactor"] = 100;
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


	$tdatacontrato_audit["cont_fechavigencia"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_fechavigencia";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_periodicidad");
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


	$tdatacontrato_audit["cont_periodicidad"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_periodicidad";
//	cont_informessug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cont_informessug";
	$fdata["GoodName"] = "cont_informessug";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_informessug");
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


	$tdatacontrato_audit["cont_informessug"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_informessug";
//	cont_valorant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cont_valorant";
	$fdata["GoodName"] = "cont_valorant";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_valorant");
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


	$tdatacontrato_audit["cont_valorant"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_valorant";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_valorinicial");
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


	$tdatacontrato_audit["cont_valorinicial"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_valormensual");
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


	$tdatacontrato_audit["cont_valormensual"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_valormensual";
//	cont_tipoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "cont_tipoc";
	$fdata["GoodName"] = "cont_tipoc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_tipoc");
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


	$tdatacontrato_audit["cont_tipoc"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_tipoc";
//	cont_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "cont_modalidad";
	$fdata["GoodName"] = "cont_modalidad";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_modalidad");
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


	$tdatacontrato_audit["cont_modalidad"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_modalidad";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_causalc");
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


	$tdatacontrato_audit["cont_causalc"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_causalc";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_objeto");
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

	
	
	
				$edata["nRows"] = 150;
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


	$tdatacontrato_audit["cont_objeto"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_objeto";
//	cont_tipoproceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cont_tipoproceso";
	$fdata["GoodName"] = "cont_tipoproceso";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_tipoproceso");
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


	$tdatacontrato_audit["cont_tipoproceso"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_tipoproceso";
//	cont_formapago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "cont_formapago";
	$fdata["GoodName"] = "cont_formapago";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_formapago");
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


	$tdatacontrato_audit["cont_formapago"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_formapago";
//	cont_fechasistema
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_fechasistema";
	$fdata["GoodName"] = "cont_fechasistema";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_fechasistema");
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


	$tdatacontrato_audit["cont_fechasistema"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_fechasistema";
//	cont_acta_liquidacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "cont_acta_liquidacion";
	$fdata["GoodName"] = "cont_acta_liquidacion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_acta_liquidacion");
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


	$tdatacontrato_audit["cont_acta_liquidacion"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_acta_liquidacion";
//	cont_obligaciones
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "cont_obligaciones";
	$fdata["GoodName"] = "cont_obligaciones";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_obligaciones");
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


	$tdatacontrato_audit["cont_obligaciones"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_obligaciones";
//	cont_plazo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "cont_plazo";
	$fdata["GoodName"] = "cont_plazo";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_plazo");
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


	$tdatacontrato_audit["cont_plazo"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_plazo";
//	cont_vigencias_futuras
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "cont_vigencias_futuras";
	$fdata["GoodName"] = "cont_vigencias_futuras";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_vigencias_futuras");
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


	$tdatacontrato_audit["cont_vigencias_futuras"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_vigencias_futuras";
//	cont_secop_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_secop_proceso";
	$fdata["GoodName"] = "cont_secop_proceso";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_secop_proceso");
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


	$tdatacontrato_audit["cont_secop_proceso"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_secop_proceso";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_secop_enlace");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
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


	$tdatacontrato_audit["cont_secop_enlace"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_secop_enlace";
//	cont_sigep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_sigep";
	$fdata["GoodName"] = "cont_sigep";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_sigep");
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


	$tdatacontrato_audit["cont_sigep"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_sigep";
//	vf_num_autorizacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "vf_num_autorizacion";
	$fdata["GoodName"] = "vf_num_autorizacion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","vf_num_autorizacion");
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


	$tdatacontrato_audit["vf_num_autorizacion"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "vf_num_autorizacion";
//	vf_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "vf_fecha";
	$fdata["GoodName"] = "vf_fecha";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","vf_fecha");
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


	$tdatacontrato_audit["vf_fecha"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "vf_fecha";
//	vf_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "vf_valor";
	$fdata["GoodName"] = "vf_valor";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","vf_valor");
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


	$tdatacontrato_audit["vf_valor"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "vf_valor";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_unspsc");
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


	$tdatacontrato_audit["cont_unspsc"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_unspsc";
//	cont_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "cont_tipo_rubro";
	$fdata["GoodName"] = "cont_tipo_rubro";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_tipo_rubro");
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


	$tdatacontrato_audit["cont_tipo_rubro"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_tipo_rubro";
//	cont_munejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "cont_munejec";
	$fdata["GoodName"] = "cont_munejec";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_munejec");
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


	$tdatacontrato_audit["cont_munejec"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_munejec";
//	cont_fecha_aprobgarantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "cont_fecha_aprobgarantia";
	$fdata["GoodName"] = "cont_fecha_aprobgarantia";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_fecha_aprobgarantia");
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


	$tdatacontrato_audit["cont_fecha_aprobgarantia"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_fecha_aprobgarantia";
//	cont_numpoliza
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "cont_numpoliza";
	$fdata["GoodName"] = "cont_numpoliza";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_numpoliza");
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


	$tdatacontrato_audit["cont_numpoliza"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_numpoliza";
//	cont_modifica
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "cont_modifica";
	$fdata["GoodName"] = "cont_modifica";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_modifica");
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


	$tdatacontrato_audit["cont_modifica"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_modifica";
//	cont_cesion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "cont_cesion";
	$fdata["GoodName"] = "cont_cesion";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_cesion");
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


	$tdatacontrato_audit["cont_cesion"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_cesion";
//	cont_valorvigente
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "cont_valorvigente";
	$fdata["GoodName"] = "cont_valorvigente";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_valorvigente");
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


	$tdatacontrato_audit["cont_valorvigente"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_valorvigente";
//	cont_depsup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_depsup";
	$fdata["GoodName"] = "cont_depsup";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_depsup");
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


	$tdatacontrato_audit["cont_depsup"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_depsup";
//	cont_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "cont_dep";
	$fdata["GoodName"] = "cont_dep";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_dep");
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


	$tdatacontrato_audit["cont_dep"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_dep";
//	cont_valormensual_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "cont_valormensual_base";
	$fdata["GoodName"] = "cont_valormensual_base";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_valormensual_base");
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


	$tdatacontrato_audit["cont_valormensual_base"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_valormensual_base";
//	cont_valormensual_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "cont_valormensual_iva";
	$fdata["GoodName"] = "cont_valormensual_iva";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_valormensual_iva");
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


	$tdatacontrato_audit["cont_valormensual_iva"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_valormensual_iva";
//	cont_auditoria
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "cont_auditoria";
	$fdata["GoodName"] = "cont_auditoria";
	$fdata["ownerTable"] = "contrato";
	$fdata["Label"] = GetFieldLabel("contrato_audit","cont_auditoria");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_auditoria";

		$fdata["sourceSingle"] = "cont_auditoria";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_auditoria";

	
	
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


	$tdatacontrato_audit["cont_auditoria"] = $fdata;
		$tdatacontrato_audit[".searchableFields"][] = "cont_auditoria";


$tables_data["contrato_audit"]=&$tdatacontrato_audit;
$field_labels["contrato_audit"] = &$fieldLabelscontrato_audit;
$fieldToolTips["contrato_audit"] = &$fieldToolTipscontrato_audit;
$placeHolders["contrato_audit"] = &$placeHolderscontrato_audit;
$page_titles["contrato_audit"] = &$pageTitlescontrato_audit;


changeTextControlsToDate( "contrato_audit" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_audit"] = array();
//	contrato_attached
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_attached";
		$detailsParam["dOriginalTable"] = "contrato_attached";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_attached";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_attached");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//	contrato_cdp
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_cdp";
		$detailsParam["dOriginalTable"] = "contrato_cdp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_cdp";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_cdp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_FK";
//	contrato_modifica
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_modifica";
		$detailsParam["dOriginalTable"] = "contrato_modifica";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_modifica";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_modifica");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//	contrato_oe
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_oe";
		$detailsParam["dOriginalTable"] = "contrato_oe";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_oe";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_oe");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//	contrato_rp
	
	

		$dIndex = 4;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="contrato_rp";
		$detailsParam["dOriginalTable"] = "contrato_rp";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "contrato_rp";
	$detailsParam["dCaptionTable"] = GetTableCaption("contrato_rp");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_FK";
//	informe_intersup_plan_pagos
	
	

		$dIndex = 5;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup_plan_pagos";
		$detailsParam["dOriginalTable"] = "informe_intersup_plan_pagos";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup_plan_pagos";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup_plan_pagos");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//	interventor_interno
	
	

		$dIndex = 6;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="interventor_interno";
		$detailsParam["dOriginalTable"] = "interventor_interno";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "interventor_interno";
	$detailsParam["dCaptionTable"] = GetTableCaption("interventor_interno");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//	polizas_master
	
	

		$dIndex = 7;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="polizas_master";
		$detailsParam["dOriginalTable"] = "polizas_master";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "polizas_master";
	$detailsParam["dCaptionTable"] = GetTableCaption("polizas_master");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//	informe_intersup4
	
	

		$dIndex = 8;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="informe_intersup4";
		$detailsParam["dOriginalTable"] = "informe_intersup";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "informe_intersup4";
	$detailsParam["dCaptionTable"] = GetTableCaption("informe_intersup4");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["contrato_audit"][$dIndex] = $detailsParam;

	
		$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["masterKeys"][]="id_cont";

				$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["contrato_audit"][$dIndex]["detailKeys"][]="id_cont_fk";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_audit"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato_estados";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_estados";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_estados";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_audit"][0] = $masterParams;
				$masterTablesData["contrato_audit"][0]["masterKeys"] = array();
	$masterTablesData["contrato_audit"][0]["masterKeys"][]="estado_id";
				$masterTablesData["contrato_audit"][0]["detailKeys"] = array();
	$masterTablesData["contrato_audit"][0]["detailKeys"][]="cont_estado";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato_tipo";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_tipo";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_tipo";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_audit"][1] = $masterParams;
				$masterTablesData["contrato_audit"][1]["masterKeys"] = array();
	$masterTablesData["contrato_audit"][1]["masterKeys"][]="codigo";
				$masterTablesData["contrato_audit"][1]["detailKeys"] = array();
	$masterTablesData["contrato_audit"][1]["detailKeys"][]="cont_tipo";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="interventor_periodos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="interventor_periodos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "interventor_periodos";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_audit"][2] = $masterParams;
				$masterTablesData["contrato_audit"][2]["masterKeys"] = array();
	$masterTablesData["contrato_audit"][2]["masterKeys"][]="id_periodo";
				$masterTablesData["contrato_audit"][2]["detailKeys"] = array();
	$masterTablesData["contrato_audit"][2]["detailKeys"][]="cont_periodicidad";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato_forma_pago";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_forma_pago";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_forma_pago";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_audit"][3] = $masterParams;
				$masterTablesData["contrato_audit"][3]["masterKeys"] = array();
	$masterTablesData["contrato_audit"][3]["masterKeys"][]="codigo";
				$masterTablesData["contrato_audit"][3]["detailKeys"] = array();
	$masterTablesData["contrato_audit"][3]["detailKeys"][]="cont_formapago";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="tparam_tipo_ct_002";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tparam_tipo_ct_002";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tparam_tipo_ct_002";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_audit"][4] = $masterParams;
				$masterTablesData["contrato_audit"][4]["masterKeys"] = array();
	$masterTablesData["contrato_audit"][4]["masterKeys"][]="ctb_tipo_id";
				$masterTablesData["contrato_audit"][4]["detailKeys"] = array();
	$masterTablesData["contrato_audit"][4]["detailKeys"][]="cont_causalc";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_audit()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  cont_hash,  cont_ano,  cont_paa_id,  cont_nit_contra_ta,  cont_nit_contra_ta AS nombre_cont,  cont_estado,  prenumero,  numregistro,  pre_contnumero,  contnumero,  cont_tipo,  cont_codrubro,  cont_catalogo_presupuestal,  cont_tipopre,  cont_fechaapertura,  cont_fecha_inicio,  cont_fechafinal,  cont_fechavigencia,  cont_periodicidad,  cont_informessug,  cont_valorant,  cont_valorinicial,  cont_valormensual,  cont_tipoc,  cont_modalidad,  cont_causalc,  cont_objeto,  cont_tipoproceso,  cont_formapago,  cont_fechasistema,  cont_acta_liquidacion,  cont_obligaciones,  cont_plazo,  cont_vigencias_futuras,  cont_secop_proceso,  cont_secop_enlace,  cont_sigep,  vf_num_autorizacion,  vf_fecha,  vf_valor,  cont_unspsc,  cont_tipo_rubro,  cont_munejec,  cont_fecha_aprobgarantia,  cont_numpoliza,  cont_modifica,  cont_cesion,  cont_valorvigente,  cont_depsup,  cont_dep,  cont_valormensual_base,  cont_valormensual_iva,  cont_auditoria";
$proto0["m_strFrom"] = "FROM contrato";
$proto0["m_strWhere"] = "(cont_auditoria = 1)";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "cont_auditoria = 1";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "cont_auditoria",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 1";
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
	"m_srcTableName" => "contrato_audit"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "contrato_audit";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto8["m_sql"] = "cont_hash";
$proto8["m_srcTableName"] = "contrato_audit";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto10["m_sql"] = "cont_ano";
$proto10["m_srcTableName"] = "contrato_audit";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_paa_id",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto12["m_sql"] = "cont_paa_id";
$proto12["m_srcTableName"] = "contrato_audit";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto14["m_sql"] = "cont_nit_contra_ta";
$proto14["m_srcTableName"] = "contrato_audit";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto16["m_sql"] = "cont_nit_contra_ta";
$proto16["m_srcTableName"] = "contrato_audit";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "nombre_cont";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto18["m_sql"] = "cont_estado";
$proto18["m_srcTableName"] = "contrato_audit";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto20["m_sql"] = "prenumero";
$proto20["m_srcTableName"] = "contrato_audit";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto22["m_sql"] = "numregistro";
$proto22["m_srcTableName"] = "contrato_audit";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "pre_contnumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto24["m_sql"] = "pre_contnumero";
$proto24["m_srcTableName"] = "contrato_audit";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contnumero",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto26["m_sql"] = "contnumero";
$proto26["m_srcTableName"] = "contrato_audit";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto28["m_sql"] = "cont_tipo";
$proto28["m_srcTableName"] = "contrato_audit";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto30["m_sql"] = "cont_codrubro";
$proto30["m_srcTableName"] = "contrato_audit";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto32["m_sql"] = "cont_catalogo_presupuestal";
$proto32["m_srcTableName"] = "contrato_audit";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto34["m_sql"] = "cont_tipopre";
$proto34["m_srcTableName"] = "contrato_audit";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto36["m_sql"] = "cont_fechaapertura";
$proto36["m_srcTableName"] = "contrato_audit";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto38["m_sql"] = "cont_fecha_inicio";
$proto38["m_srcTableName"] = "contrato_audit";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto40["m_sql"] = "cont_fechafinal";
$proto40["m_srcTableName"] = "contrato_audit";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechavigencia",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto42["m_sql"] = "cont_fechavigencia";
$proto42["m_srcTableName"] = "contrato_audit";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto44["m_sql"] = "cont_periodicidad";
$proto44["m_srcTableName"] = "contrato_audit";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_informessug",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto46["m_sql"] = "cont_informessug";
$proto46["m_srcTableName"] = "contrato_audit";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorant",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto48["m_sql"] = "cont_valorant";
$proto48["m_srcTableName"] = "contrato_audit";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto50["m_sql"] = "cont_valorinicial";
$proto50["m_srcTableName"] = "contrato_audit";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto52["m_sql"] = "cont_valormensual";
$proto52["m_srcTableName"] = "contrato_audit";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto54["m_sql"] = "cont_tipoc";
$proto54["m_srcTableName"] = "contrato_audit";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modalidad",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto56["m_sql"] = "cont_modalidad";
$proto56["m_srcTableName"] = "contrato_audit";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto58["m_sql"] = "cont_causalc";
$proto58["m_srcTableName"] = "contrato_audit";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto60["m_sql"] = "cont_objeto";
$proto60["m_srcTableName"] = "contrato_audit";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoproceso",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto62["m_sql"] = "cont_tipoproceso";
$proto62["m_srcTableName"] = "contrato_audit";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_formapago",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto64["m_sql"] = "cont_formapago";
$proto64["m_srcTableName"] = "contrato_audit";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechasistema",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto66["m_sql"] = "cont_fechasistema";
$proto66["m_srcTableName"] = "contrato_audit";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_acta_liquidacion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto68["m_sql"] = "cont_acta_liquidacion";
$proto68["m_srcTableName"] = "contrato_audit";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_obligaciones",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto70["m_sql"] = "cont_obligaciones";
$proto70["m_srcTableName"] = "contrato_audit";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_plazo",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto72["m_sql"] = "cont_plazo";
$proto72["m_srcTableName"] = "contrato_audit";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_vigencias_futuras",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto74["m_sql"] = "cont_vigencias_futuras";
$proto74["m_srcTableName"] = "contrato_audit";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_proceso",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto76["m_sql"] = "cont_secop_proceso";
$proto76["m_srcTableName"] = "contrato_audit";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto78["m_sql"] = "cont_secop_enlace";
$proto78["m_srcTableName"] = "contrato_audit";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_sigep",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto80["m_sql"] = "cont_sigep";
$proto80["m_srcTableName"] = "contrato_audit";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_num_autorizacion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto82["m_sql"] = "vf_num_autorizacion";
$proto82["m_srcTableName"] = "contrato_audit";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_fecha",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto84["m_sql"] = "vf_fecha";
$proto84["m_srcTableName"] = "contrato_audit";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "vf_valor",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto86["m_sql"] = "vf_valor";
$proto86["m_srcTableName"] = "contrato_audit";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto88["m_sql"] = "cont_unspsc";
$proto88["m_srcTableName"] = "contrato_audit";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto90["m_sql"] = "cont_tipo_rubro";
$proto90["m_srcTableName"] = "contrato_audit";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_munejec",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto92["m_sql"] = "cont_munejec";
$proto92["m_srcTableName"] = "contrato_audit";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_aprobgarantia",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto94["m_sql"] = "cont_fecha_aprobgarantia";
$proto94["m_srcTableName"] = "contrato_audit";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_numpoliza",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto96["m_sql"] = "cont_numpoliza";
$proto96["m_srcTableName"] = "contrato_audit";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modifica",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto98["m_sql"] = "cont_modifica";
$proto98["m_srcTableName"] = "contrato_audit";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_cesion",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto100["m_sql"] = "cont_cesion";
$proto100["m_srcTableName"] = "contrato_audit";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorvigente",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto102["m_sql"] = "cont_valorvigente";
$proto102["m_srcTableName"] = "contrato_audit";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_depsup",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto104["m_sql"] = "cont_depsup";
$proto104["m_srcTableName"] = "contrato_audit";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_dep",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto106["m_sql"] = "cont_dep";
$proto106["m_srcTableName"] = "contrato_audit";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_base",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto108["m_sql"] = "cont_valormensual_base";
$proto108["m_srcTableName"] = "contrato_audit";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_iva",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto110["m_sql"] = "cont_valormensual_iva";
$proto110["m_srcTableName"] = "contrato_audit";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_auditoria",
	"m_strTable" => "contrato",
	"m_srcTableName" => "contrato_audit"
));

$proto112["m_sql"] = "cont_auditoria";
$proto112["m_srcTableName"] = "contrato_audit";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto114=array();
$proto114["m_link"] = "SQLL_MAIN";
			$proto115=array();
$proto115["m_strName"] = "contrato";
$proto115["m_srcTableName"] = "contrato_audit";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "id_cont";
$proto115["m_columns"][] = "cont_hash";
$proto115["m_columns"][] = "cont_nit_contra_ta";
$proto115["m_columns"][] = "cont_paa_id";
$proto115["m_columns"][] = "cont_estado";
$proto115["m_columns"][] = "prenumero";
$proto115["m_columns"][] = "numregistro";
$proto115["m_columns"][] = "pre_contnumero";
$proto115["m_columns"][] = "contnumero";
$proto115["m_columns"][] = "cont_unspsc";
$proto115["m_columns"][] = "cont_munejec";
$proto115["m_columns"][] = "cont_tipo";
$proto115["m_columns"][] = "cont_ano";
$proto115["m_columns"][] = "cont_codrubro";
$proto115["m_columns"][] = "cont_tipo_rubro";
$proto115["m_columns"][] = "cont_reg_sigep";
$proto115["m_columns"][] = "cont_catalogo_presupuestal";
$proto115["m_columns"][] = "cont_tipopre";
$proto115["m_columns"][] = "cont_fechaapertura";
$proto115["m_columns"][] = "cont_plazoi";
$proto115["m_columns"][] = "cont_fecha_inicio";
$proto115["m_columns"][] = "cont_fechafinal";
$proto115["m_columns"][] = "cont_fechavigencia";
$proto115["m_columns"][] = "cont_periodicidad";
$proto115["m_columns"][] = "cont_informessug";
$proto115["m_columns"][] = "cont_otrosi";
$proto115["m_columns"][] = "cont_otrosi_type";
$proto115["m_columns"][] = "cont_valorant";
$proto115["m_columns"][] = "cont_valorinicial";
$proto115["m_columns"][] = "cont_valormensual";
$proto115["m_columns"][] = "cont_iva";
$proto115["m_columns"][] = "cont_valormensual_base";
$proto115["m_columns"][] = "cont_valormensual_iva";
$proto115["m_columns"][] = "cont_valorvigente";
$proto115["m_columns"][] = "cont_valorreduc_fecha";
$proto115["m_columns"][] = "cont_valorreduc";
$proto115["m_columns"][] = "cont_valors";
$proto115["m_columns"][] = "cont_lugar";
$proto115["m_columns"][] = "cont_region";
$proto115["m_columns"][] = "cont_requactaliq";
$proto115["m_columns"][] = "cont_plazol";
$proto115["m_columns"][] = "cont_tipoproceso";
$proto115["m_columns"][] = "cont_formapago";
$proto115["m_columns"][] = "cont_tipoc";
$proto115["m_columns"][] = "cont_modalidad";
$proto115["m_columns"][] = "cont_causalc";
$proto115["m_columns"][] = "cont_funcion";
$proto115["m_columns"][] = "cesion_estado";
$proto115["m_columns"][] = "cont_acta_liquidacion";
$proto115["m_columns"][] = "cont_fecha_aprobgarantia";
$proto115["m_columns"][] = "cont_afilia_arl";
$proto115["m_columns"][] = "cont_excluir_notificacion";
$proto115["m_columns"][] = "cont_depsup";
$proto115["m_columns"][] = "cont_dep";
$proto115["m_columns"][] = "cont_lugar_prestacion";
$proto115["m_columns"][] = "cont_objeto";
$proto115["m_columns"][] = "cont_obligaciones";
$proto115["m_columns"][] = "cont_plazo";
$proto115["m_columns"][] = "cont_tipo_regimen";
$proto115["m_columns"][] = "cont_fecha_firma";
$proto115["m_columns"][] = "cont_secop_proceso";
$proto115["m_columns"][] = "cont_secop_enlace";
$proto115["m_columns"][] = "cont_sigep";
$proto115["m_columns"][] = "cont_vigencias_futuras";
$proto115["m_columns"][] = "vf_num_autorizacion";
$proto115["m_columns"][] = "vf_fecha";
$proto115["m_columns"][] = "vf_valor";
$proto115["m_columns"][] = "cont_fechasistema";
$proto115["m_columns"][] = "cont_fase";
$proto115["m_columns"][] = "cont_numpoliza";
$proto115["m_columns"][] = "cont_cesion";
$proto115["m_columns"][] = "cont_modifica";
$proto115["m_columns"][] = "cont_auditoria";
$proto115["m_columns"][] = "cont_expedientenum";
$proto115["m_columns"][] = "cont_expediente_fecha";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "contrato";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "contrato_audit";
$proto116=array();
$proto116["m_sql"] = "";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_audit";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_audit = createSqlQuery_contrato_audit();


	
												;

																																																						

$tdatacontrato_audit[".sqlquery"] = $queryData_contrato_audit;



include_once(getabspath("include/contrato_audit_events.php"));
$tdatacontrato_audit[".hasEvents"] = true;

?>