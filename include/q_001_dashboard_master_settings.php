<?php
$tdataq_001_dashboard_master = array();
$tdataq_001_dashboard_master[".searchableFields"] = array();
$tdataq_001_dashboard_master[".ShortName"] = "q_001_dashboard_master";
$tdataq_001_dashboard_master[".OwnerID"] = "";
$tdataq_001_dashboard_master[".OriginalTable"] = "q_001_dashboard";


$tdataq_001_dashboard_master[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataq_001_dashboard_master[".originalPagesByType"] = $tdataq_001_dashboard_master[".pagesByType"];
$tdataq_001_dashboard_master[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataq_001_dashboard_master[".originalPages"] = $tdataq_001_dashboard_master[".pages"];
$tdataq_001_dashboard_master[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataq_001_dashboard_master[".originalDefaultPages"] = $tdataq_001_dashboard_master[".defaultPages"];

//	field labels
$fieldLabelsq_001_dashboard_master = array();
$fieldToolTipsq_001_dashboard_master = array();
$pageTitlesq_001_dashboard_master = array();
$placeHoldersq_001_dashboard_master = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_001_dashboard_master["Spanish"] = array();
	$fieldToolTipsq_001_dashboard_master["Spanish"] = array();
	$placeHoldersq_001_dashboard_master["Spanish"] = array();
	$pageTitlesq_001_dashboard_master["Spanish"] = array();
	$fieldLabelsq_001_dashboard_master["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["id_cont"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["id_cont"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["CONTRATOID"] = "Número contrato";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["CONTRATOID"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["CONTRATOID"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["LOGINLEVEL"] = "Grupo";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["LOGINLEVEL"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["LOGINLEVEL"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["VIGENCIA"] = "Vigencia";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["VIGENCIA"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["VIGENCIA"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["estado_nombre"] = "Estado";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["estado_nombre"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["estado_nombre"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["contractor_type"] = "Contractor Type";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["contractor_type"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["contractor_type"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["DOCID"] = "Documento";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["DOCID"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["DOCID"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["contractor_nombresfull"] = "Nombres | Razón Social";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["contractor_nombresfull"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["contractor_email"] = "Email";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["contractor_email"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["contractor_email"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["contractor_email_mincit"] = "Email institucional";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["contractor_email_mincit"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["contractor_phone"] = "Teléfono";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["contractor_phone"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["contractor_phone"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["contractor_mobile"] = "Celular";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["contractor_mobile"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["contractor_mobile"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["CODC"] = "CODC";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["CODC"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["CODC"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["NUMC"] = "NUMC";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["NUMC"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["NUMC"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_tipo"] = "Cont Tipo";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_tipo"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_tipo"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["nombre"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["nombre"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_codrubro"] = "Cont Codrubro";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_codrubro"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_codrubro"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_tipopre"] = "Cont Tipopre";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_tipopre"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_tipopre"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_catalogo_presupuestal"] = "Cont Catalogo Presupuestal";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_fase"] = "Cont Fase";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_fase"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_fase"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["FECHAI"] = "Fecha Inicio";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["FECHAI"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["FECHAI"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["FECHAF"] = "Fecha Final";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["FECHAF"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["FECHAF"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["QTYDIAS"] = "Dias";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["QTYDIAS"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["QTYDIAS"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["QTYMESES"] = "Meses";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["QTYMESES"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["QTYMESES"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["VALORI"] = "Valor actual del contrato";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["VALORI"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["VALORI"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_fechaapertura"] = "Cont Fechaapertura";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_fechaapertura"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["CDP"] = "CDP";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["CDP"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["CDP"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["RP"] = "RP";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["RP"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["RP"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_modalidad"] = "Cont Modalidad";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_modalidad"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_modalidad"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["des_mod_proceso"] = "Proceso";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["des_mod_proceso"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["des_mod_proceso"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_tipoproceso"] = "Cont Tipoproceso";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_tipoproceso"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_tipoproceso"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_periodicidad"] = "Cont Periodicidad";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_periodicidad"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["periodo_name"] = "Periodo Name";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["periodo_name"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["periodo_name"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["periodo_value"] = "Periodo Value";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["periodo_value"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["periodo_value"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["periodo_dias"] = "Periodo Dias";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["periodo_dias"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["periodo_dias"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_informessug"] = "Cont Informessug";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_informessug"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_informessug"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["periodo_meses"] = "Periodo Meses";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["periodo_meses"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["periodo_meses"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_objeto"] = "Cont Objeto";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_objeto"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_objeto"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_fechavigencia"] = "Cont Fechavigencia";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_fechavigencia"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_fechavigencia"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["VALORINICIAL"] = "Valor Inicial";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["VALORINICIAL"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["VALORINICIAL"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_valormensual"] = "Cont Valormensual";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_valormensual"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_valormensual"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["iva_regimen"] = "Iva Regimen";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["iva_regimen"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["iva_regimen"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["CONTVINCULADO"] = "CONTVINCULADO";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["CONTVINCULADO"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["CONTVINCULADO"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_paa_id"] = "PAA ID";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_paa_id"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_paa_id"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_tipoc"] = "Cont Tipoc";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_tipoc"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_tipoc"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["ct_tipo_nombre"] = "Nombre";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["ct_tipo_nombre"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["ct_tipo_nombre"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_causalc"] = "Cont Causal";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_causalc"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_causalc"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["ctb_tipo_nombre"] = "Ctb Tipo Nombre";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["ctb_tipo_nombre"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["ctb_tipo_nombre"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_secop_enlace"] = "Cont Secop Enlace";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_secop_enlace"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_dep"] = "Cont Dep";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_dep"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_dep"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_iva"] = "Cont Iva";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_iva"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_iva"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_valormensual_base"] = "Valor mensual Base";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_valormensual_base"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_valormensual_base"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_valormensual_iva"] = "Valor mensual Iva";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_valormensual_iva"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_valormensual_iva"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_unspsc"] = "Cod UNSPSC";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_unspsc"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_unspsc"] = "";
	$fieldLabelsq_001_dashboard_master["Spanish"]["cont_munejec"] = "Municipio Ejecucíon";
	$fieldToolTipsq_001_dashboard_master["Spanish"]["cont_munejec"] = "";
	$placeHoldersq_001_dashboard_master["Spanish"]["cont_munejec"] = "";
	if (count($fieldToolTipsq_001_dashboard_master["Spanish"]))
		$tdataq_001_dashboard_master[".isUseToolTips"] = true;
}


	$tdataq_001_dashboard_master[".NCSearch"] = true;



$tdataq_001_dashboard_master[".shortTableName"] = "q_001_dashboard_master";
$tdataq_001_dashboard_master[".nSecOptions"] = 0;

$tdataq_001_dashboard_master[".mainTableOwnerID"] = "";
$tdataq_001_dashboard_master[".entityType"] = 1;
$tdataq_001_dashboard_master[".connId"] = "dbct_at_localhost";


$tdataq_001_dashboard_master[".strOriginalTableName"] = "q_001_dashboard";

	



$tdataq_001_dashboard_master[".showAddInPopup"] = false;

$tdataq_001_dashboard_master[".showEditInPopup"] = false;

$tdataq_001_dashboard_master[".showViewInPopup"] = false;

	$tdataq_001_dashboard_master[".listAjax"] = true;
//	temporary
//$tdataq_001_dashboard_master[".listAjax"] = false;

	$tdataq_001_dashboard_master[".audit"] = true;

	$tdataq_001_dashboard_master[".locking"] = true;


$pages = $tdataq_001_dashboard_master[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_001_dashboard_master[".edit"] = true;
	$tdataq_001_dashboard_master[".afterEditAction"] = 1;
	$tdataq_001_dashboard_master[".closePopupAfterEdit"] = 1;
	$tdataq_001_dashboard_master[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_001_dashboard_master[".add"] = true;
$tdataq_001_dashboard_master[".afterAddAction"] = 1;
$tdataq_001_dashboard_master[".closePopupAfterAdd"] = 1;
$tdataq_001_dashboard_master[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_001_dashboard_master[".list"] = true;
}



$tdataq_001_dashboard_master[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_001_dashboard_master[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_001_dashboard_master[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_001_dashboard_master[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_001_dashboard_master[".printFriendly"] = true;
}



$tdataq_001_dashboard_master[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_001_dashboard_master[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_001_dashboard_master[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_001_dashboard_master[".isUseAjaxSuggest"] = true;



															

$tdataq_001_dashboard_master[".ajaxCodeSnippetAdded"] = false;

$tdataq_001_dashboard_master[".buttonsAdded"] = false;

$tdataq_001_dashboard_master[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_001_dashboard_master[".isUseTimeForSearch"] = false;


$tdataq_001_dashboard_master[".badgeColor"] = "E07878";


$tdataq_001_dashboard_master[".allSearchFields"] = array();
$tdataq_001_dashboard_master[".filterFields"] = array();
$tdataq_001_dashboard_master[".requiredSearchFields"] = array();

$tdataq_001_dashboard_master[".googleLikeFields"] = array();
$tdataq_001_dashboard_master[".googleLikeFields"][] = "id_cont";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "CONTRATOID";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "VIGENCIA";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "LOGINLEVEL";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "NUMC";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_unspsc";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_munejec";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "estado_nombre";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "contractor_type";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "DOCID";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "contractor_nombresfull";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "contractor_email";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "contractor_email_mincit";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "contractor_phone";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "contractor_mobile";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "CODC";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_tipo";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "nombre";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_codrubro";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_tipopre";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_fase";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "FECHAI";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "FECHAF";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "QTYDIAS";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "QTYMESES";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "VALORI";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_fechaapertura";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "CDP";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "RP";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_tipoproceso";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_periodicidad";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "periodo_name";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "periodo_value";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "periodo_dias";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_informessug";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "periodo_meses";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_objeto";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_fechavigencia";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "VALORINICIAL";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_valormensual";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "iva_regimen";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_iva";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_valormensual_base";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_valormensual_iva";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "CONTVINCULADO";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_paa_id";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_tipoc";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "ct_tipo_nombre";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_modalidad";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "des_mod_proceso";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_causalc";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "ctb_tipo_nombre";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_secop_enlace";
$tdataq_001_dashboard_master[".googleLikeFields"][] = "cont_dep";



$tdataq_001_dashboard_master[".tableType"] = "list";

$tdataq_001_dashboard_master[".printerPageOrientation"] = 0;
$tdataq_001_dashboard_master[".nPrinterPageScale"] = 100;

$tdataq_001_dashboard_master[".nPrinterSplitRecords"] = 40;

$tdataq_001_dashboard_master[".geocodingEnabled"] = false;





$tdataq_001_dashboard_master[".isResizeColumns"] = true;





$tdataq_001_dashboard_master[".pageSize"] = 20;

$tdataq_001_dashboard_master[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_001_dashboard_master[".strOrderBy"] = $tstrOrderBy;

$tdataq_001_dashboard_master[".orderindexes"] = array();


$tdataq_001_dashboard_master[".sqlHead"] = "SELECT id_cont,  CONTRATOID,  VIGENCIA,  LOGINLEVEL,  NUMC,  cont_unspsc,  cont_munejec,  estado_nombre,  contractor_type,  DOCID,  contractor_nombresfull,  contractor_email,  contractor_email_mincit,  contractor_phone,  contractor_mobile,  CODC,  cont_tipo,  nombre,  cont_codrubro,  cont_tipopre,  cont_catalogo_presupuestal,  cont_fase,  FECHAI,  FECHAF,  QTYDIAS,  QTYMESES,  VALORI,  cont_fechaapertura,  CDP,  RP,  cont_tipoproceso,  cont_periodicidad,  periodo_name,  periodo_value,  periodo_dias,  cont_informessug,  periodo_meses,  cont_objeto,  cont_fechavigencia,  VALORINICIAL,  cont_valormensual,  iva_regimen,  cont_iva,  cont_valormensual_base,  cont_valormensual_iva,  CONTVINCULADO,  cont_paa_id,  cont_tipoc,  ct_tipo_nombre,  cont_modalidad,  des_mod_proceso,  cont_causalc,  ctb_tipo_nombre,  cont_secop_enlace,  cont_dep";
$tdataq_001_dashboard_master[".sqlFrom"] = "FROM q_001_dashboard";
$tdataq_001_dashboard_master[".sqlWhereExpr"] = "";
$tdataq_001_dashboard_master[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_001_dashboard_master[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_001_dashboard_master[".arrGroupsPerPage"] = $arrGPP;

$tdataq_001_dashboard_master[".highlightSearchResults"] = true;

$tableKeysq_001_dashboard_master = array();
$tableKeysq_001_dashboard_master[] = "id_cont";
$tdataq_001_dashboard_master[".Keys"] = $tableKeysq_001_dashboard_master;


$tdataq_001_dashboard_master[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","id_cont");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataq_001_dashboard_master["id_cont"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "id_cont";
//	CONTRATOID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CONTRATOID";
	$fdata["GoodName"] = "CONTRATOID";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","CONTRATOID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CONTRATOID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONTRATOID";

	
	
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
			$edata["EditParams"].= " maxlength=26";

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


	$tdataq_001_dashboard_master["CONTRATOID"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "CONTRATOID";
//	VIGENCIA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VIGENCIA";
	$fdata["GoodName"] = "VIGENCIA";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","VIGENCIA");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "VIGENCIA";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VIGENCIA";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_001_dashboard_master["VIGENCIA"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "VIGENCIA";
//	LOGINLEVEL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "LOGINLEVEL";
	$fdata["GoodName"] = "LOGINLEVEL";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","LOGINLEVEL");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LOGINLEVEL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOGINLEVEL";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_001_dashboard_master["LOGINLEVEL"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "LOGINLEVEL";
//	NUMC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NUMC";
	$fdata["GoodName"] = "NUMC";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","NUMC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NUMC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NUMC";

	
	
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


	$tdataq_001_dashboard_master["NUMC"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "NUMC";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_unspsc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_unspsc";

		$fdata["sourceSingle"] = "cont_unspsc";

	
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


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1000";

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


	$tdataq_001_dashboard_master["cont_unspsc"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_unspsc";
//	cont_munejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_munejec";
	$fdata["GoodName"] = "cont_munejec";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_munejec");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_munejec";

		$fdata["sourceSingle"] = "cont_munejec";

	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CODMUN";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "NOMMUNICIPIO";

	

	
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


	$tdataq_001_dashboard_master["cont_munejec"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_munejec";
//	estado_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "estado_nombre";
	$fdata["GoodName"] = "estado_nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","estado_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "estado_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "estado_nombre";

	
	
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


	$tdataq_001_dashboard_master["estado_nombre"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "estado_nombre";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","contractor_type");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_type";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_001_dashboard_master["contractor_type"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "contractor_type";
//	DOCID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "DOCID";
	$fdata["GoodName"] = "DOCID";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","DOCID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DOCID";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DOCID";

	
	
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


	$tdataq_001_dashboard_master["DOCID"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "DOCID";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","contractor_nombresfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_nombresfull";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_nombresfull";

	
	
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


	$tdataq_001_dashboard_master["contractor_nombresfull"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","contractor_email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email";

	
	
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


	$tdataq_001_dashboard_master["contractor_email"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","contractor_email_mincit");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_email_mincit";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_email_mincit";

	
	
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


	$tdataq_001_dashboard_master["contractor_email_mincit"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "contractor_email_mincit";
//	contractor_phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "contractor_phone";
	$fdata["GoodName"] = "contractor_phone";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","contractor_phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_phone";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_phone";

	
	
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


	$tdataq_001_dashboard_master["contractor_phone"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "contractor_phone";
//	contractor_mobile
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "contractor_mobile";
	$fdata["GoodName"] = "contractor_mobile";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","contractor_mobile");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "contractor_mobile";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "contractor_mobile";

	
	
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


	$tdataq_001_dashboard_master["contractor_mobile"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "contractor_mobile";
//	CODC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CODC";
	$fdata["GoodName"] = "CODC";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","CODC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CODC";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CODC";

	
	
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
			$edata["EditParams"].= " maxlength=6";

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


	$tdataq_001_dashboard_master["CODC"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "CODC";
//	cont_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "cont_tipo";
	$fdata["GoodName"] = "cont_tipo";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_tipo");
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


	$tdataq_001_dashboard_master["cont_tipo"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_tipo";
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";

	
	
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


	$tdataq_001_dashboard_master["nombre"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "nombre";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_codrubro");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=500";

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


	$tdataq_001_dashboard_master["cont_codrubro"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_codrubro";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_tipopre");
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


	$tdataq_001_dashboard_master["cont_tipopre"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_tipopre";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_catalogo_presupuestal");
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


	$tdataq_001_dashboard_master["cont_catalogo_presupuestal"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_fase
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "cont_fase";
	$fdata["GoodName"] = "cont_fase";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_fase");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_fase";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_fase";

	
	
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
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_001_dashboard_master["cont_fase"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_fase";
//	FECHAI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "FECHAI";
	$fdata["GoodName"] = "FECHAI";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","FECHAI");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHAI";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHAI";

	
	
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


	$tdataq_001_dashboard_master["FECHAI"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "FECHAI";
//	FECHAF
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "FECHAF";
	$fdata["GoodName"] = "FECHAF";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","FECHAF");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "FECHAF";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FECHAF";

	
	
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


	$tdataq_001_dashboard_master["FECHAF"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "FECHAF";
//	QTYDIAS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "QTYDIAS";
	$fdata["GoodName"] = "QTYDIAS";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","QTYDIAS");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "QTYDIAS";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTYDIAS";

	
	
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


	$tdataq_001_dashboard_master["QTYDIAS"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "QTYDIAS";
//	QTYMESES
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "QTYMESES";
	$fdata["GoodName"] = "QTYMESES";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","QTYMESES");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "QTYMESES";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "QTYMESES";

	
	
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


	$tdataq_001_dashboard_master["QTYMESES"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "QTYMESES";
//	VALORI
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "VALORI";
	$fdata["GoodName"] = "VALORI";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","VALORI");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALORI";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALORI";

	
	
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


	$tdataq_001_dashboard_master["VALORI"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "VALORI";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_fechaapertura");
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


	$tdataq_001_dashboard_master["cont_fechaapertura"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_fechaapertura";
//	CDP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "CDP";
	$fdata["GoodName"] = "CDP";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","CDP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CDP";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CDP";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataq_001_dashboard_master["CDP"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "CDP";
//	RP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "RP";
	$fdata["GoodName"] = "RP";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","RP");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RP";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RP";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdataq_001_dashboard_master["RP"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "RP";
//	cont_tipoproceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_tipoproceso";
	$fdata["GoodName"] = "cont_tipoproceso";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_tipoproceso");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=2";

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


	$tdataq_001_dashboard_master["cont_tipoproceso"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_tipoproceso";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_periodicidad");
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


	$tdataq_001_dashboard_master["cont_periodicidad"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_periodicidad";
//	periodo_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "periodo_name";
	$fdata["GoodName"] = "periodo_name";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","periodo_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "periodo_name";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_name";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdataq_001_dashboard_master["periodo_name"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "periodo_name";
//	periodo_value
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "periodo_value";
	$fdata["GoodName"] = "periodo_value";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","periodo_value");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "periodo_value";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_value";

	
	
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


	$tdataq_001_dashboard_master["periodo_value"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "periodo_value";
//	periodo_dias
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "periodo_dias";
	$fdata["GoodName"] = "periodo_dias";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","periodo_dias");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "periodo_dias";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_dias";

	
	
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


	$tdataq_001_dashboard_master["periodo_dias"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "periodo_dias";
//	cont_informessug
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_informessug";
	$fdata["GoodName"] = "cont_informessug";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_informessug");
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


	$tdataq_001_dashboard_master["cont_informessug"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_informessug";
//	periodo_meses
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "periodo_meses";
	$fdata["GoodName"] = "periodo_meses";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","periodo_meses");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "periodo_meses";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "periodo_meses";

	
	
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


	$tdataq_001_dashboard_master["periodo_meses"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "periodo_meses";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_objeto");
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


	$tdataq_001_dashboard_master["cont_objeto"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_objeto";
//	cont_fechavigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cont_fechavigencia";
	$fdata["GoodName"] = "cont_fechavigencia";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_fechavigencia");
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


	$tdataq_001_dashboard_master["cont_fechavigencia"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_fechavigencia";
//	VALORINICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "VALORINICIAL";
	$fdata["GoodName"] = "VALORINICIAL";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","VALORINICIAL");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "VALORINICIAL";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VALORINICIAL";

	
	
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


	$tdataq_001_dashboard_master["VALORINICIAL"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "VALORINICIAL";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_valormensual");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valormensual";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual";

	
	
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


	$tdataq_001_dashboard_master["cont_valormensual"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_valormensual";
//	iva_regimen
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "iva_regimen";
	$fdata["GoodName"] = "iva_regimen";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","iva_regimen");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "iva_regimen";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "iva_regimen";

	
	
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


	$tdataq_001_dashboard_master["iva_regimen"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "iva_regimen";
//	cont_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "cont_iva";
	$fdata["GoodName"] = "cont_iva";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_iva");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "cont_iva";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_iva";

	
	
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


	$tdataq_001_dashboard_master["cont_iva"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_iva";
//	cont_valormensual_base
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "cont_valormensual_base";
	$fdata["GoodName"] = "cont_valormensual_base";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_valormensual_base");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valormensual_base";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual_base";

	
	
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


	$tdataq_001_dashboard_master["cont_valormensual_base"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_valormensual_base";
//	cont_valormensual_iva
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "cont_valormensual_iva";
	$fdata["GoodName"] = "cont_valormensual_iva";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_valormensual_iva");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "cont_valormensual_iva";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_valormensual_iva";

	
	
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


	$tdataq_001_dashboard_master["cont_valormensual_iva"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_valormensual_iva";
//	CONTVINCULADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "CONTVINCULADO";
	$fdata["GoodName"] = "CONTVINCULADO";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","CONTVINCULADO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CONTVINCULADO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CONTVINCULADO";

	
	
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
			$edata["EditParams"].= " maxlength=133";

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


	$tdataq_001_dashboard_master["CONTVINCULADO"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "CONTVINCULADO";
//	cont_paa_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "cont_paa_id";
	$fdata["GoodName"] = "cont_paa_id";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_paa_id");
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


	$tdataq_001_dashboard_master["cont_paa_id"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_paa_id";
//	cont_tipoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "cont_tipoc";
	$fdata["GoodName"] = "cont_tipoc";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_tipoc");
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


	$tdataq_001_dashboard_master["cont_tipoc"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_tipoc";
//	ct_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "ct_tipo_nombre";
	$fdata["GoodName"] = "ct_tipo_nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","ct_tipo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ct_tipo_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ct_tipo_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_001_dashboard_master["ct_tipo_nombre"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "ct_tipo_nombre";
//	cont_modalidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "cont_modalidad";
	$fdata["GoodName"] = "cont_modalidad";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_modalidad");
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


	$tdataq_001_dashboard_master["cont_modalidad"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_modalidad";
//	des_mod_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "des_mod_proceso";
	$fdata["GoodName"] = "des_mod_proceso";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","des_mod_proceso");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "des_mod_proceso";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "des_mod_proceso";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=500";

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
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_001_dashboard_master["des_mod_proceso"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "des_mod_proceso";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_causalc");
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


	$tdataq_001_dashboard_master["cont_causalc"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_causalc";
//	ctb_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "ctb_tipo_nombre";
	$fdata["GoodName"] = "ctb_tipo_nombre";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","ctb_tipo_nombre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ctb_tipo_nombre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ctb_tipo_nombre";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_001_dashboard_master["ctb_tipo_nombre"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "ctb_tipo_nombre";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_secop_enlace");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_secop_enlace";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_secop_enlace";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataq_001_dashboard_master["cont_secop_enlace"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_secop_enlace";
//	cont_dep
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 55;
	$fdata["strName"] = "cont_dep";
	$fdata["GoodName"] = "cont_dep";
	$fdata["ownerTable"] = "q_001_dashboard";
	$fdata["Label"] = GetFieldLabel("q_001_dashboard_master","cont_dep");
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


	$tdataq_001_dashboard_master["cont_dep"] = $fdata;
		$tdataq_001_dashboard_master[".searchableFields"][] = "cont_dep";


$tables_data["q_001_dashboard_master"]=&$tdataq_001_dashboard_master;
$field_labels["q_001_dashboard_master"] = &$fieldLabelsq_001_dashboard_master;
$fieldToolTips["q_001_dashboard_master"] = &$fieldToolTipsq_001_dashboard_master;
$placeHolders["q_001_dashboard_master"] = &$placeHoldersq_001_dashboard_master;
$page_titles["q_001_dashboard_master"] = &$pageTitlesq_001_dashboard_master;


changeTextControlsToDate( "q_001_dashboard_master" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_001_dashboard_master"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_001_dashboard_master"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_001_dashboard_master()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  CONTRATOID,  VIGENCIA,  LOGINLEVEL,  NUMC,  cont_unspsc,  cont_munejec,  estado_nombre,  contractor_type,  DOCID,  contractor_nombresfull,  contractor_email,  contractor_email_mincit,  contractor_phone,  contractor_mobile,  CODC,  cont_tipo,  nombre,  cont_codrubro,  cont_tipopre,  cont_catalogo_presupuestal,  cont_fase,  FECHAI,  FECHAF,  QTYDIAS,  QTYMESES,  VALORI,  cont_fechaapertura,  CDP,  RP,  cont_tipoproceso,  cont_periodicidad,  periodo_name,  periodo_value,  periodo_dias,  cont_informessug,  periodo_meses,  cont_objeto,  cont_fechavigencia,  VALORINICIAL,  cont_valormensual,  iva_regimen,  cont_iva,  cont_valormensual_base,  cont_valormensual_iva,  CONTVINCULADO,  cont_paa_id,  cont_tipoc,  ct_tipo_nombre,  cont_modalidad,  des_mod_proceso,  cont_causalc,  ctb_tipo_nombre,  cont_secop_enlace,  cont_dep";
$proto0["m_strFrom"] = "FROM q_001_dashboard";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
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
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_001_dashboard_master";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CONTRATOID",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto8["m_sql"] = "CONTRATOID";
$proto8["m_srcTableName"] = "q_001_dashboard_master";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VIGENCIA",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto10["m_sql"] = "VIGENCIA";
$proto10["m_srcTableName"] = "q_001_dashboard_master";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "LOGINLEVEL",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto12["m_sql"] = "LOGINLEVEL";
$proto12["m_srcTableName"] = "q_001_dashboard_master";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NUMC",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto14["m_sql"] = "NUMC";
$proto14["m_srcTableName"] = "q_001_dashboard_master";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto16["m_sql"] = "cont_unspsc";
$proto16["m_srcTableName"] = "q_001_dashboard_master";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_munejec",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto18["m_sql"] = "cont_munejec";
$proto18["m_srcTableName"] = "q_001_dashboard_master";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "estado_nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto20["m_sql"] = "estado_nombre";
$proto20["m_srcTableName"] = "q_001_dashboard_master";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto22["m_sql"] = "contractor_type";
$proto22["m_srcTableName"] = "q_001_dashboard_master";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "DOCID",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto24["m_sql"] = "DOCID";
$proto24["m_srcTableName"] = "q_001_dashboard_master";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto26["m_sql"] = "contractor_nombresfull";
$proto26["m_srcTableName"] = "q_001_dashboard_master";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto28["m_sql"] = "contractor_email";
$proto28["m_srcTableName"] = "q_001_dashboard_master";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto30["m_sql"] = "contractor_email_mincit";
$proto30["m_srcTableName"] = "q_001_dashboard_master";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_phone",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto32["m_sql"] = "contractor_phone";
$proto32["m_srcTableName"] = "q_001_dashboard_master";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_mobile",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto34["m_sql"] = "contractor_mobile";
$proto34["m_srcTableName"] = "q_001_dashboard_master";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CODC",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto36["m_sql"] = "CODC";
$proto36["m_srcTableName"] = "q_001_dashboard_master";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto38["m_sql"] = "cont_tipo";
$proto38["m_srcTableName"] = "q_001_dashboard_master";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto40["m_sql"] = "nombre";
$proto40["m_srcTableName"] = "q_001_dashboard_master";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto42["m_sql"] = "cont_codrubro";
$proto42["m_srcTableName"] = "q_001_dashboard_master";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto44["m_sql"] = "cont_tipopre";
$proto44["m_srcTableName"] = "q_001_dashboard_master";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto46["m_sql"] = "cont_catalogo_presupuestal";
$proto46["m_srcTableName"] = "q_001_dashboard_master";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fase",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto48["m_sql"] = "cont_fase";
$proto48["m_srcTableName"] = "q_001_dashboard_master";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHAI",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto50["m_sql"] = "FECHAI";
$proto50["m_srcTableName"] = "q_001_dashboard_master";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "FECHAF",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto52["m_sql"] = "FECHAF";
$proto52["m_srcTableName"] = "q_001_dashboard_master";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYDIAS",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto54["m_sql"] = "QTYDIAS";
$proto54["m_srcTableName"] = "q_001_dashboard_master";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "QTYMESES",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto56["m_sql"] = "QTYMESES";
$proto56["m_srcTableName"] = "q_001_dashboard_master";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORI",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto58["m_sql"] = "VALORI";
$proto58["m_srcTableName"] = "q_001_dashboard_master";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto60["m_sql"] = "cont_fechaapertura";
$proto60["m_srcTableName"] = "q_001_dashboard_master";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "CDP",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto62["m_sql"] = "CDP";
$proto62["m_srcTableName"] = "q_001_dashboard_master";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "RP",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto64["m_sql"] = "RP";
$proto64["m_srcTableName"] = "q_001_dashboard_master";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoproceso",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto66["m_sql"] = "cont_tipoproceso";
$proto66["m_srcTableName"] = "q_001_dashboard_master";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto68["m_sql"] = "cont_periodicidad";
$proto68["m_srcTableName"] = "q_001_dashboard_master";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_name",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto70["m_sql"] = "periodo_name";
$proto70["m_srcTableName"] = "q_001_dashboard_master";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_value",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto72["m_sql"] = "periodo_value";
$proto72["m_srcTableName"] = "q_001_dashboard_master";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_dias",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto74["m_sql"] = "periodo_dias";
$proto74["m_srcTableName"] = "q_001_dashboard_master";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_informessug",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto76["m_sql"] = "cont_informessug";
$proto76["m_srcTableName"] = "q_001_dashboard_master";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "periodo_meses",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto78["m_sql"] = "periodo_meses";
$proto78["m_srcTableName"] = "q_001_dashboard_master";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto80["m_sql"] = "cont_objeto";
$proto80["m_srcTableName"] = "q_001_dashboard_master";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechavigencia",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto82["m_sql"] = "cont_fechavigencia";
$proto82["m_srcTableName"] = "q_001_dashboard_master";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "VALORINICIAL",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto84["m_sql"] = "VALORINICIAL";
$proto84["m_srcTableName"] = "q_001_dashboard_master";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto86["m_sql"] = "cont_valormensual";
$proto86["m_srcTableName"] = "q_001_dashboard_master";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "iva_regimen",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto88["m_sql"] = "iva_regimen";
$proto88["m_srcTableName"] = "q_001_dashboard_master";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_iva",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto90["m_sql"] = "cont_iva";
$proto90["m_srcTableName"] = "q_001_dashboard_master";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_base",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto92["m_sql"] = "cont_valormensual_base";
$proto92["m_srcTableName"] = "q_001_dashboard_master";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual_iva",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto94["m_sql"] = "cont_valormensual_iva";
$proto94["m_srcTableName"] = "q_001_dashboard_master";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "CONTVINCULADO",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto96["m_sql"] = "CONTVINCULADO";
$proto96["m_srcTableName"] = "q_001_dashboard_master";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_paa_id",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto98["m_sql"] = "cont_paa_id";
$proto98["m_srcTableName"] = "q_001_dashboard_master";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipoc",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto100["m_sql"] = "cont_tipoc";
$proto100["m_srcTableName"] = "q_001_dashboard_master";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "ct_tipo_nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto102["m_sql"] = "ct_tipo_nombre";
$proto102["m_srcTableName"] = "q_001_dashboard_master";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_modalidad",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto104["m_sql"] = "cont_modalidad";
$proto104["m_srcTableName"] = "q_001_dashboard_master";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "des_mod_proceso",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto106["m_sql"] = "des_mod_proceso";
$proto106["m_srcTableName"] = "q_001_dashboard_master";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto108["m_sql"] = "cont_causalc";
$proto108["m_srcTableName"] = "q_001_dashboard_master";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "ctb_tipo_nombre",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto110["m_sql"] = "ctb_tipo_nombre";
$proto110["m_srcTableName"] = "q_001_dashboard_master";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto112["m_sql"] = "cont_secop_enlace";
$proto112["m_srcTableName"] = "q_001_dashboard_master";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
						$proto114=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_dep",
	"m_strTable" => "q_001_dashboard",
	"m_srcTableName" => "q_001_dashboard_master"
));

$proto114["m_sql"] = "cont_dep";
$proto114["m_srcTableName"] = "q_001_dashboard_master";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "";
$obj = new SQLFieldListItem($proto114);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto116=array();
$proto116["m_link"] = "SQLL_MAIN";
			$proto117=array();
$proto117["m_strName"] = "q_001_dashboard";
$proto117["m_srcTableName"] = "q_001_dashboard_master";
$proto117["m_columns"] = array();
$proto117["m_columns"][] = "id_cont";
$proto117["m_columns"][] = "CONTRATOID";
$proto117["m_columns"][] = "LOGINLEVEL";
$proto117["m_columns"][] = "VIGENCIA";
$proto117["m_columns"][] = "cont_unspsc";
$proto117["m_columns"][] = "cont_munejec";
$proto117["m_columns"][] = "cont_hash";
$proto117["m_columns"][] = "cont_estado";
$proto117["m_columns"][] = "estado_nombre";
$proto117["m_columns"][] = "estado_img";
$proto117["m_columns"][] = "estado_lnk";
$proto117["m_columns"][] = "contractor_type";
$proto117["m_columns"][] = "DOCID";
$proto117["m_columns"][] = "contractor_name";
$proto117["m_columns"][] = "contractor_lname";
$proto117["m_columns"][] = "contractor_nombresfull";
$proto117["m_columns"][] = "contractor_email";
$proto117["m_columns"][] = "contractor_email_mincit";
$proto117["m_columns"][] = "contractor_phone";
$proto117["m_columns"][] = "contractor_mobile";
$proto117["m_columns"][] = "CODC";
$proto117["m_columns"][] = "NUMC";
$proto117["m_columns"][] = "cont_tipo";
$proto117["m_columns"][] = "nombre";
$proto117["m_columns"][] = "cont_codrubro";
$proto117["m_columns"][] = "cont_tipopre";
$proto117["m_columns"][] = "cont_catalogo_presupuestal";
$proto117["m_columns"][] = "cont_fase";
$proto117["m_columns"][] = "FECHAI";
$proto117["m_columns"][] = "FECHAINICIO";
$proto117["m_columns"][] = "FECHAF";
$proto117["m_columns"][] = "FECHAFINAL";
$proto117["m_columns"][] = "QTYDIAS";
$proto117["m_columns"][] = "QTYMESES";
$proto117["m_columns"][] = "VALORI";
$proto117["m_columns"][] = "cont_fechaapertura";
$proto117["m_columns"][] = "CDP";
$proto117["m_columns"][] = "RP";
$proto117["m_columns"][] = "cont_tipoproceso";
$proto117["m_columns"][] = "cont_periodicidad";
$proto117["m_columns"][] = "periodo_name";
$proto117["m_columns"][] = "periodo_value";
$proto117["m_columns"][] = "periodo_dias";
$proto117["m_columns"][] = "cont_informessug";
$proto117["m_columns"][] = "periodo_meses";
$proto117["m_columns"][] = "cont_objeto";
$proto117["m_columns"][] = "cont_fechavigencia";
$proto117["m_columns"][] = "VALORINICIAL";
$proto117["m_columns"][] = "cont_valormensual";
$proto117["m_columns"][] = "iva_regimen";
$proto117["m_columns"][] = "cont_iva";
$proto117["m_columns"][] = "cont_valormensual_base";
$proto117["m_columns"][] = "cont_valormensual_iva";
$proto117["m_columns"][] = "CONTVINCULADO";
$proto117["m_columns"][] = "cont_paa_id";
$proto117["m_columns"][] = "cont_tipoc";
$proto117["m_columns"][] = "ct_tipo_nombre";
$proto117["m_columns"][] = "cont_modalidad";
$proto117["m_columns"][] = "des_mod_proceso";
$proto117["m_columns"][] = "cont_causalc";
$proto117["m_columns"][] = "ctb_tipo_nombre";
$proto117["m_columns"][] = "cont_secop_enlace";
$proto117["m_columns"][] = "cont_dep";
$proto117["m_columns"][] = "contractor_naturaleza";
$obj = new SQLTable($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "q_001_dashboard";
$proto116["m_alias"] = "";
$proto116["m_srcTableName"] = "q_001_dashboard_master";
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_001_dashboard_master";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_001_dashboard_master = createSqlQuery_q_001_dashboard_master();


	
												;

																																																							

$tdataq_001_dashboard_master[".sqlquery"] = $queryData_q_001_dashboard_master;



$tdataq_001_dashboard_master[".hasEvents"] = false;

?>