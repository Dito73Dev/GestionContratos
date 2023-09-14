<?php
$tdataq_bandejaentrada_supervisores_consulta = array();
$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"] = array();
$tdataq_bandejaentrada_supervisores_consulta[".ShortName"] = "q_bandejaentrada_supervisores_consulta";
$tdataq_bandejaentrada_supervisores_consulta[".OwnerID"] = "idusrglobal_fk";
$tdataq_bandejaentrada_supervisores_consulta[".OriginalTable"] = "q_bandejaentrada_supervisores";


$tdataq_bandejaentrada_supervisores_consulta[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" );
$tdataq_bandejaentrada_supervisores_consulta[".originalPagesByType"] = $tdataq_bandejaentrada_supervisores_consulta[".pagesByType"];
$tdataq_bandejaentrada_supervisores_consulta[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"search\":[\"search\"]}" ) );
$tdataq_bandejaentrada_supervisores_consulta[".originalPages"] = $tdataq_bandejaentrada_supervisores_consulta[".pages"];
$tdataq_bandejaentrada_supervisores_consulta[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"search\":\"search\"}" );
$tdataq_bandejaentrada_supervisores_consulta[".originalDefaultPages"] = $tdataq_bandejaentrada_supervisores_consulta[".defaultPages"];

//	field labels
$fieldLabelsq_bandejaentrada_supervisores_consulta = array();
$fieldToolTipsq_bandejaentrada_supervisores_consulta = array();
$pageTitlesq_bandejaentrada_supervisores_consulta = array();
$placeHoldersq_bandejaentrada_supervisores_consulta = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"] = array();
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"] = array();
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"] = array();
	$pageTitlesq_bandejaentrada_supervisores_consulta["Spanish"] = array();
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["id_cont"] = "Id Cont";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["id_cont"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["id_cont"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_nit_contra_ta"] = "NIT | DOCUMENTO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_nit_contra_ta"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_nit_contra_ta"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_estado"] = "ESTADO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_estado"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_estado"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["numcontrato"] = "CONTRATO No.";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["numcontrato"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["numcontrato"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_ano"] = "VIGENCIA";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_ano"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_ano"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_codrubro"] = "RUBRO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_codrubro"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_codrubro"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_catalogo_presupuestal"] = "CATALOGO PRESUPUESTAL";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_catalogo_presupuestal"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_catalogo_presupuestal"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fecha_inicio"] = "FECHA INICIO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fecha_inicio"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fecha_inicio"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fechafinal"] = "FECHA FINAL";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fechafinal"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fechafinal"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_periodicidad"] = "PERIODICIDAD";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_periodicidad"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_periodicidad"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_valorinicial"] = "VALOR INICIAL";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_valorinicial"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_valorinicial"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_valormensual"] = "PAGO MENSUAL";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_valormensual"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_valormensual"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_secop_enlace"] = "SECOP";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_secop_enlace"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_secop_enlace"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["documento_id"] = "DOC. SUPERVISOR";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["documento_id"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["documento_id"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cargo_id"] = "CARGO SUPERVISOR";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cargo_id"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cargo_id"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["dependencia_id"] = "DEPENDENCIA";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["dependencia_id"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["dependencia_id"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["sup_fechanot"] = "FECHA NOTIFICACIÓN";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["sup_fechanot"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["sup_fechanot"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["sup_mailnot"] = "CORREO ELECTRÓNICO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["sup_mailnot"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["sup_mailnot"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_type"] = "TIPO DE DOCUMENTO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_type"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_type"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["PLAZO"] = "PLAZO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["PLAZO"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["PLAZO"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["nombresupfull"] = "NOMBRE SUPERVISOR";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["nombresupfull"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["nombresupfull"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_nombresfull"] = "NOMBRE CONTRATISTA";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_nombresfull"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_nombresfull"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_email"] = "CORREO PERSONAL";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_email"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_email"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_email_mincit"] = "CORREO INSTITUCIONAL";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_email_mincit"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["contractor_email_mincit"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["prenumero"] = "RP";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["prenumero"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["prenumero"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["numregistro"] = "CDP";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["numregistro"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["numregistro"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_unspsc"] = "UNSPSC";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_unspsc"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_unspsc"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_tipo_rubro"] = "RECURSO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_tipo_rubro"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_tipo_rubro"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_tipopre"] = "UEJ";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_tipopre"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_tipopre"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_causalc"] = "Cont Causalc";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_causalc"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_causalc"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_objeto"] = "OBJETO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_objeto"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_objeto"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["ctb_tipo_nombre"] = "TIPO DE CONTRATO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["ctb_tipo_nombre"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["ctb_tipo_nombre"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["nombre_cargo"] = "CARGO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["nombre_cargo"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["nombre_cargo"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["nombre_dependencia"] = "DEPENDENCIA";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["nombre_dependencia"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["nombre_dependencia"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["Departamento_superior"] = "SUPERIOR JERARQUICO";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["Departamento_superior"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["Departamento_superior"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_secop_proceso"] = "PROCESO SECOP";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_secop_proceso"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_secop_proceso"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fecha_aprobgarantia"] = "FECHA APROB. GARANTIA";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fecha_aprobgarantia"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fechaapertura"] = "FECHA APERTURA";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fechaapertura"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_fechaapertura"] = "";
	$fieldLabelsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_munejec"] = "MUN. EJECUCIÓN";
	$fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]["cont_munejec"] = "";
	$placeHoldersq_bandejaentrada_supervisores_consulta["Spanish"]["cont_munejec"] = "";
	if (count($fieldToolTipsq_bandejaentrada_supervisores_consulta["Spanish"]))
		$tdataq_bandejaentrada_supervisores_consulta[".isUseToolTips"] = true;
}


	$tdataq_bandejaentrada_supervisores_consulta[".NCSearch"] = true;



$tdataq_bandejaentrada_supervisores_consulta[".shortTableName"] = "q_bandejaentrada_supervisores_consulta";
$tdataq_bandejaentrada_supervisores_consulta[".nSecOptions"] = 0;

$tdataq_bandejaentrada_supervisores_consulta[".mainTableOwnerID"] = "idusrglobal_fk";
$tdataq_bandejaentrada_supervisores_consulta[".entityType"] = 1;
$tdataq_bandejaentrada_supervisores_consulta[".connId"] = "dbct_at_localhost";


$tdataq_bandejaentrada_supervisores_consulta[".strOriginalTableName"] = "q_bandejaentrada_supervisores";

	



$tdataq_bandejaentrada_supervisores_consulta[".showAddInPopup"] = false;

$tdataq_bandejaentrada_supervisores_consulta[".showEditInPopup"] = false;

$tdataq_bandejaentrada_supervisores_consulta[".showViewInPopup"] = false;

$tdataq_bandejaentrada_supervisores_consulta[".listAjax"] = false;
//	temporary
//$tdataq_bandejaentrada_supervisores_consulta[".listAjax"] = false;

	$tdataq_bandejaentrada_supervisores_consulta[".audit"] = true;

	$tdataq_bandejaentrada_supervisores_consulta[".locking"] = true;


$pages = $tdataq_bandejaentrada_supervisores_consulta[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_bandejaentrada_supervisores_consulta[".edit"] = true;
	$tdataq_bandejaentrada_supervisores_consulta[".afterEditAction"] = 1;
	$tdataq_bandejaentrada_supervisores_consulta[".closePopupAfterEdit"] = 1;
	$tdataq_bandejaentrada_supervisores_consulta[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_bandejaentrada_supervisores_consulta[".add"] = true;
$tdataq_bandejaentrada_supervisores_consulta[".afterAddAction"] = 1;
$tdataq_bandejaentrada_supervisores_consulta[".closePopupAfterAdd"] = 1;
$tdataq_bandejaentrada_supervisores_consulta[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_bandejaentrada_supervisores_consulta[".list"] = true;
}



$tdataq_bandejaentrada_supervisores_consulta[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_bandejaentrada_supervisores_consulta[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_bandejaentrada_supervisores_consulta[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_bandejaentrada_supervisores_consulta[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_bandejaentrada_supervisores_consulta[".printFriendly"] = true;
}



$tdataq_bandejaentrada_supervisores_consulta[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_bandejaentrada_supervisores_consulta[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_bandejaentrada_supervisores_consulta[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_bandejaentrada_supervisores_consulta[".isUseAjaxSuggest"] = true;



															

$tdataq_bandejaentrada_supervisores_consulta[".ajaxCodeSnippetAdded"] = false;

$tdataq_bandejaentrada_supervisores_consulta[".buttonsAdded"] = false;

$tdataq_bandejaentrada_supervisores_consulta[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_bandejaentrada_supervisores_consulta[".isUseTimeForSearch"] = false;


$tdataq_bandejaentrada_supervisores_consulta[".badgeColor"] = "008B8B";


$tdataq_bandejaentrada_supervisores_consulta[".allSearchFields"] = array();
$tdataq_bandejaentrada_supervisores_consulta[".filterFields"] = array();
$tdataq_bandejaentrada_supervisores_consulta[".requiredSearchFields"] = array();

$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"] = array();
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "id_cont";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "contractor_type";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_nit_contra_ta";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_estado";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "numcontrato";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_ano";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_codrubro";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_catalogo_presupuestal";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_fecha_inicio";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_fechafinal";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "PLAZO";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_periodicidad";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_valorinicial";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_valormensual";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_secop_enlace";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "documento_id";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "nombresupfull";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cargo_id";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "dependencia_id";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "sup_fechanot";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "sup_mailnot";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "contractor_nombresfull";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "contractor_email";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "contractor_email_mincit";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "prenumero";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "numregistro";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_unspsc";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_tipo_rubro";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_tipopre";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_causalc";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_objeto";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "ctb_tipo_nombre";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "nombre_cargo";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "nombre_dependencia";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "Departamento_superior";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_secop_proceso";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_fecha_aprobgarantia";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_fechaapertura";
$tdataq_bandejaentrada_supervisores_consulta[".googleLikeFields"][] = "cont_munejec";



$tdataq_bandejaentrada_supervisores_consulta[".tableType"] = "list";

$tdataq_bandejaentrada_supervisores_consulta[".printerPageOrientation"] = 0;
$tdataq_bandejaentrada_supervisores_consulta[".nPrinterPageScale"] = 100;

$tdataq_bandejaentrada_supervisores_consulta[".nPrinterSplitRecords"] = 40;

$tdataq_bandejaentrada_supervisores_consulta[".geocodingEnabled"] = false;




$tdataq_bandejaentrada_supervisores_consulta[".isDisplayLoading"] = true;



$tdataq_bandejaentrada_supervisores_consulta[".noRecordsFirstPage"] = true;



$tdataq_bandejaentrada_supervisores_consulta[".pageSize"] = 20;

$tdataq_bandejaentrada_supervisores_consulta[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_bandejaentrada_supervisores_consulta[".strOrderBy"] = $tstrOrderBy;

$tdataq_bandejaentrada_supervisores_consulta[".orderindexes"] = array();


$tdataq_bandejaentrada_supervisores_consulta[".sqlHead"] = "SELECT id_cont,  contractor_type,  cont_nit_contra_ta,  cont_estado,  numcontrato,  cont_ano,  cont_codrubro,  cont_catalogo_presupuestal,  cont_fecha_inicio,  cont_fechafinal,  PLAZO,  cont_periodicidad,  cont_valorinicial,  cont_valormensual,  cont_secop_enlace,  documento_id,  nombresupfull,  cargo_id,  dependencia_id,  sup_fechanot,  sup_mailnot,  contractor_nombresfull,  contractor_email,  contractor_email_mincit,  prenumero,  numregistro,  cont_unspsc,  cont_tipo_rubro,  cont_tipopre,  cont_causalc,  cont_objeto,  ctb_tipo_nombre,  nombre_cargo,  nombre_dependencia,  Departamento_superior,  cont_secop_proceso,  cont_fecha_aprobgarantia,  cont_fechaapertura,  cont_munejec";
$tdataq_bandejaentrada_supervisores_consulta[".sqlFrom"] = "FROM q_bandejaentrada_supervisores";
$tdataq_bandejaentrada_supervisores_consulta[".sqlWhereExpr"] = "";
$tdataq_bandejaentrada_supervisores_consulta[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_bandejaentrada_supervisores_consulta[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_bandejaentrada_supervisores_consulta[".arrGroupsPerPage"] = $arrGPP;

$tdataq_bandejaentrada_supervisores_consulta[".highlightSearchResults"] = true;

$tableKeysq_bandejaentrada_supervisores_consulta = array();
$tableKeysq_bandejaentrada_supervisores_consulta[] = "id_cont";
$tdataq_bandejaentrada_supervisores_consulta[".Keys"] = $tableKeysq_bandejaentrada_supervisores_consulta;


$tdataq_bandejaentrada_supervisores_consulta[".hideMobileList"] = array();




//	id_cont
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont";
	$fdata["GoodName"] = "id_cont";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","id_cont");
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


	$tdataq_bandejaentrada_supervisores_consulta["id_cont"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "id_cont";
//	contractor_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "contractor_type";
	$fdata["GoodName"] = "contractor_type";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","contractor_type");
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


	$tdataq_bandejaentrada_supervisores_consulta["contractor_type"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "contractor_type";
//	cont_nit_contra_ta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_nit_contra_ta";
	$fdata["GoodName"] = "cont_nit_contra_ta";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_nit_contra_ta");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_nit_contra_ta"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_nit_contra_ta";
//	cont_estado
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_estado";
	$fdata["GoodName"] = "cont_estado";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_estado");
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
	$edata["LinkFieldType"] = 0;
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_estado"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_estado";
//	numcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "numcontrato";
	$fdata["GoodName"] = "numcontrato";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","numcontrato");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "numcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "numcontrato";

	
	
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
			$edata["EditParams"].= " maxlength=106";

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


	$tdataq_bandejaentrada_supervisores_consulta["numcontrato"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "numcontrato";
//	cont_ano
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "cont_ano";
	$fdata["GoodName"] = "cont_ano";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_ano");
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
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_bandejaentrada_supervisores_consulta["cont_ano"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_ano";
//	cont_codrubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "cont_codrubro";
	$fdata["GoodName"] = "cont_codrubro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_codrubro");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_codrubro"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_codrubro";
//	cont_catalogo_presupuestal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cont_catalogo_presupuestal";
	$fdata["GoodName"] = "cont_catalogo_presupuestal";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_catalogo_presupuestal");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_catalogo_presupuestal"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_catalogo_presupuestal";
//	cont_fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "cont_fecha_inicio";
	$fdata["GoodName"] = "cont_fecha_inicio";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_fecha_inicio");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_fecha_inicio"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_fecha_inicio";
//	cont_fechafinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "cont_fechafinal";
	$fdata["GoodName"] = "cont_fechafinal";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_fechafinal");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_fechafinal"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_fechafinal";
//	PLAZO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PLAZO";
	$fdata["GoodName"] = "PLAZO";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","PLAZO");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "PLAZO";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PLAZO";

	
	
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


	$tdataq_bandejaentrada_supervisores_consulta["PLAZO"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "PLAZO";
//	cont_periodicidad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "cont_periodicidad";
	$fdata["GoodName"] = "cont_periodicidad";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_periodicidad");
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
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "periodo_name";

	

	
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_periodicidad"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_periodicidad";
//	cont_valorinicial
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "cont_valorinicial";
	$fdata["GoodName"] = "cont_valorinicial";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_valorinicial");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_valorinicial"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_valorinicial";
//	cont_valormensual
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "cont_valormensual";
	$fdata["GoodName"] = "cont_valormensual";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_valormensual");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_valormensual"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_valormensual";
//	cont_secop_enlace
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "cont_secop_enlace";
	$fdata["GoodName"] = "cont_secop_enlace";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_secop_enlace");
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
	$vdata["hlLinkWordText"] = "Enlace";
	$vdata["hlTitleField"] = "";

	
	
	
	
	
	
	
	
	
	
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_secop_enlace"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_secop_enlace";
//	documento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "documento_id";
	$fdata["GoodName"] = "documento_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","documento_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "documento_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "documento_id";

	
	
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


	$tdataq_bandejaentrada_supervisores_consulta["documento_id"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "documento_id";
//	nombresupfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "nombresupfull";
	$fdata["GoodName"] = "nombresupfull";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","nombresupfull");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombresupfull";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombresupfull";

	
	
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
			$edata["EditParams"].= " maxlength=201";

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


	$tdataq_bandejaentrada_supervisores_consulta["nombresupfull"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "nombresupfull";
//	cargo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "cargo_id";
	$fdata["GoodName"] = "cargo_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cargo_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cargo_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cargo_id";

	
	
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
	$edata["LookupTable"] = "cargo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";

	

	
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


	$tdataq_bandejaentrada_supervisores_consulta["cargo_id"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cargo_id";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","dependencia_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dependencia_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dependencia_id";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_bandejaentrada_supervisores_consulta["dependencia_id"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "dependencia_id";
//	sup_fechanot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "sup_fechanot";
	$fdata["GoodName"] = "sup_fechanot";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","sup_fechanot");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sup_fechanot";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_fechanot";

	
	
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


	$tdataq_bandejaentrada_supervisores_consulta["sup_fechanot"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "sup_fechanot";
//	sup_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sup_mailnot";
	$fdata["GoodName"] = "sup_mailnot";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","sup_mailnot");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sup_mailnot";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_mailnot";

	
	
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


	$tdataq_bandejaentrada_supervisores_consulta["sup_mailnot"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "sup_mailnot";
//	contractor_nombresfull
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "contractor_nombresfull";
	$fdata["GoodName"] = "contractor_nombresfull";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","contractor_nombresfull");
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
			$edata["EditParams"].= " maxlength=200";

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


	$tdataq_bandejaentrada_supervisores_consulta["contractor_nombresfull"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "contractor_nombresfull";
//	contractor_email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "contractor_email";
	$fdata["GoodName"] = "contractor_email";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","contractor_email");
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


	$tdataq_bandejaentrada_supervisores_consulta["contractor_email"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "contractor_email";
//	contractor_email_mincit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "contractor_email_mincit";
	$fdata["GoodName"] = "contractor_email_mincit";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","contractor_email_mincit");
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


	$tdataq_bandejaentrada_supervisores_consulta["contractor_email_mincit"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "contractor_email_mincit";
//	prenumero
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "prenumero";
	$fdata["GoodName"] = "prenumero";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","prenumero");
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


	$tdataq_bandejaentrada_supervisores_consulta["prenumero"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "prenumero";
//	numregistro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "numregistro";
	$fdata["GoodName"] = "numregistro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","numregistro");
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


	$tdataq_bandejaentrada_supervisores_consulta["numregistro"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "numregistro";
//	cont_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "cont_unspsc";
	$fdata["GoodName"] = "cont_unspsc";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_unspsc");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_unspsc"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_unspsc";
//	cont_tipo_rubro
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "cont_tipo_rubro";
	$fdata["GoodName"] = "cont_tipo_rubro";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_tipo_rubro");
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

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=1";

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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_bandejaentrada_supervisores_consulta["cont_tipo_rubro"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_tipo_rubro";
//	cont_tipopre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "cont_tipopre";
	$fdata["GoodName"] = "cont_tipopre";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_tipopre");
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_bandejaentrada_supervisores_consulta["cont_tipopre"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_tipopre";
//	cont_causalc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "cont_causalc";
	$fdata["GoodName"] = "cont_causalc";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_causalc");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_causalc"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_causalc";
//	cont_objeto
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "cont_objeto";
	$fdata["GoodName"] = "cont_objeto";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_objeto");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_objeto"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_objeto";
//	ctb_tipo_nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ctb_tipo_nombre";
	$fdata["GoodName"] = "ctb_tipo_nombre";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","ctb_tipo_nombre");
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


	$tdataq_bandejaentrada_supervisores_consulta["ctb_tipo_nombre"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "ctb_tipo_nombre";
//	nombre_cargo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "nombre_cargo";
	$fdata["GoodName"] = "nombre_cargo";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","nombre_cargo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_cargo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_cargo";

	
	
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
			$edata["EditParams"].= " maxlength=45";

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


	$tdataq_bandejaentrada_supervisores_consulta["nombre_cargo"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "nombre_cargo";
//	nombre_dependencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "nombre_dependencia";
	$fdata["GoodName"] = "nombre_dependencia";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","nombre_dependencia");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombre_dependencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre_dependencia";

	
	
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


	$tdataq_bandejaentrada_supervisores_consulta["nombre_dependencia"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "nombre_dependencia";
//	Departamento_superior
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "Departamento_superior";
	$fdata["GoodName"] = "Departamento_superior";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","Departamento_superior");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Departamento_superior";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento_superior";

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_cont";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = true;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataq_bandejaentrada_supervisores_consulta["Departamento_superior"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "Departamento_superior";
//	cont_secop_proceso
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "cont_secop_proceso";
	$fdata["GoodName"] = "cont_secop_proceso";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_secop_proceso");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_secop_proceso"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_secop_proceso";
//	cont_fecha_aprobgarantia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "cont_fecha_aprobgarantia";
	$fdata["GoodName"] = "cont_fecha_aprobgarantia";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_fecha_aprobgarantia");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_fecha_aprobgarantia"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_fecha_aprobgarantia";
//	cont_fechaapertura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "cont_fechaapertura";
	$fdata["GoodName"] = "cont_fechaapertura";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_fechaapertura");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_fechaapertura"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_fechaapertura";
//	cont_munejec
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "cont_munejec";
	$fdata["GoodName"] = "cont_munejec";
	$fdata["ownerTable"] = "q_bandejaentrada_supervisores";
	$fdata["Label"] = GetFieldLabel("q_bandejaentrada_supervisores_consulta","cont_munejec");
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


	$tdataq_bandejaentrada_supervisores_consulta["cont_munejec"] = $fdata;
		$tdataq_bandejaentrada_supervisores_consulta[".searchableFields"][] = "cont_munejec";


$tables_data["q_bandejaentrada_supervisores_consulta"]=&$tdataq_bandejaentrada_supervisores_consulta;
$field_labels["q_bandejaentrada_supervisores_consulta"] = &$fieldLabelsq_bandejaentrada_supervisores_consulta;
$fieldToolTips["q_bandejaentrada_supervisores_consulta"] = &$fieldToolTipsq_bandejaentrada_supervisores_consulta;
$placeHolders["q_bandejaentrada_supervisores_consulta"] = &$placeHoldersq_bandejaentrada_supervisores_consulta;
$page_titles["q_bandejaentrada_supervisores_consulta"] = &$pageTitlesq_bandejaentrada_supervisores_consulta;


changeTextControlsToDate( "q_bandejaentrada_supervisores_consulta" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_bandejaentrada_supervisores_consulta"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_bandejaentrada_supervisores_consulta"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_bandejaentrada_supervisores_consulta()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont,  contractor_type,  cont_nit_contra_ta,  cont_estado,  numcontrato,  cont_ano,  cont_codrubro,  cont_catalogo_presupuestal,  cont_fecha_inicio,  cont_fechafinal,  PLAZO,  cont_periodicidad,  cont_valorinicial,  cont_valormensual,  cont_secop_enlace,  documento_id,  nombresupfull,  cargo_id,  dependencia_id,  sup_fechanot,  sup_mailnot,  contractor_nombresfull,  contractor_email,  contractor_email_mincit,  prenumero,  numregistro,  cont_unspsc,  cont_tipo_rubro,  cont_tipopre,  cont_causalc,  cont_objeto,  ctb_tipo_nombre,  nombre_cargo,  nombre_dependencia,  Departamento_superior,  cont_secop_proceso,  cont_fecha_aprobgarantia,  cont_fechaapertura,  cont_munejec";
$proto0["m_strFrom"] = "FROM q_bandejaentrada_supervisores";
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
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto6["m_sql"] = "id_cont";
$proto6["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_type",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto8["m_sql"] = "contractor_type";
$proto8["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto10["m_sql"] = "cont_nit_contra_ta";
$proto10["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_estado",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto12["m_sql"] = "cont_estado";
$proto12["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "numcontrato",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto14["m_sql"] = "numcontrato";
$proto14["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_ano",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto16["m_sql"] = "cont_ano";
$proto16["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_codrubro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto18["m_sql"] = "cont_codrubro";
$proto18["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_catalogo_presupuestal",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto20["m_sql"] = "cont_catalogo_presupuestal";
$proto20["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_inicio",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto22["m_sql"] = "cont_fecha_inicio";
$proto22["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechafinal",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto24["m_sql"] = "cont_fechafinal";
$proto24["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PLAZO",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto26["m_sql"] = "PLAZO";
$proto26["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_periodicidad",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto28["m_sql"] = "cont_periodicidad";
$proto28["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valorinicial",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto30["m_sql"] = "cont_valorinicial";
$proto30["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_valormensual",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto32["m_sql"] = "cont_valormensual";
$proto32["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_enlace",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto34["m_sql"] = "cont_secop_enlace";
$proto34["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto36["m_sql"] = "documento_id";
$proto36["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "nombresupfull",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto38["m_sql"] = "nombresupfull";
$proto38["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto40["m_sql"] = "cargo_id";
$proto40["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto42["m_sql"] = "dependencia_id";
$proto42["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fechanot",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto44["m_sql"] = "sup_fechanot";
$proto44["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_mailnot",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto46["m_sql"] = "sup_mailnot";
$proto46["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_nombresfull",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto48["m_sql"] = "contractor_nombresfull";
$proto48["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto50["m_sql"] = "contractor_email";
$proto50["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "contractor_email_mincit",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto52["m_sql"] = "contractor_email_mincit";
$proto52["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "prenumero",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto54["m_sql"] = "prenumero";
$proto54["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "numregistro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto56["m_sql"] = "numregistro";
$proto56["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_unspsc",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto58["m_sql"] = "cont_unspsc";
$proto58["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipo_rubro",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto60["m_sql"] = "cont_tipo_rubro";
$proto60["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_tipopre",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto62["m_sql"] = "cont_tipopre";
$proto62["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_causalc",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto64["m_sql"] = "cont_causalc";
$proto64["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_objeto",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto66["m_sql"] = "cont_objeto";
$proto66["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ctb_tipo_nombre",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto68["m_sql"] = "ctb_tipo_nombre";
$proto68["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_cargo",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto70["m_sql"] = "nombre_cargo";
$proto70["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre_dependencia",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto72["m_sql"] = "nombre_dependencia";
$proto72["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento_superior",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto74["m_sql"] = "Departamento_superior";
$proto74["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_secop_proceso",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto76["m_sql"] = "cont_secop_proceso";
$proto76["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fecha_aprobgarantia",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto78["m_sql"] = "cont_fecha_aprobgarantia";
$proto78["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_fechaapertura",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto80["m_sql"] = "cont_fechaapertura";
$proto80["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_munejec",
	"m_strTable" => "q_bandejaentrada_supervisores",
	"m_srcTableName" => "q_bandejaentrada_supervisores_consulta"
));

$proto82["m_sql"] = "cont_munejec";
$proto82["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto84=array();
$proto84["m_link"] = "SQLL_MAIN";
			$proto85=array();
$proto85["m_strName"] = "q_bandejaentrada_supervisores";
$proto85["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto85["m_columns"] = array();
$proto85["m_columns"][] = "id_cont";
$proto85["m_columns"][] = "contractor_type";
$proto85["m_columns"][] = "cont_nit_contra_ta";
$proto85["m_columns"][] = "cont_estado";
$proto85["m_columns"][] = "numcontrato";
$proto85["m_columns"][] = "pre_contnumero";
$proto85["m_columns"][] = "contnumero";
$proto85["m_columns"][] = "cont_ano";
$proto85["m_columns"][] = "cont_codrubro";
$proto85["m_columns"][] = "cont_catalogo_presupuestal";
$proto85["m_columns"][] = "cont_fecha_inicio";
$proto85["m_columns"][] = "cont_fechafinal";
$proto85["m_columns"][] = "PLAZO";
$proto85["m_columns"][] = "cont_periodicidad";
$proto85["m_columns"][] = "cont_valorinicial";
$proto85["m_columns"][] = "cont_valormensual";
$proto85["m_columns"][] = "cont_secop_enlace";
$proto85["m_columns"][] = "documento_id";
$proto85["m_columns"][] = "nombres";
$proto85["m_columns"][] = "apellidos";
$proto85["m_columns"][] = "nombresupfull";
$proto85["m_columns"][] = "cargo_id";
$proto85["m_columns"][] = "dependencia_id";
$proto85["m_columns"][] = "sup_fechanot";
$proto85["m_columns"][] = "sup_mailnot";
$proto85["m_columns"][] = "sup_status";
$proto85["m_columns"][] = "idusrglobal_fk";
$proto85["m_columns"][] = "contractor_name";
$proto85["m_columns"][] = "contractor_lname";
$proto85["m_columns"][] = "contractor_nombresfull";
$proto85["m_columns"][] = "contractor_email";
$proto85["m_columns"][] = "contractor_email_mincit";
$proto85["m_columns"][] = "prenumero";
$proto85["m_columns"][] = "numregistro";
$proto85["m_columns"][] = "cont_unspsc";
$proto85["m_columns"][] = "cont_tipo_rubro";
$proto85["m_columns"][] = "cont_tipopre";
$proto85["m_columns"][] = "cont_causalc";
$proto85["m_columns"][] = "cont_objeto";
$proto85["m_columns"][] = "cont_obligaciones";
$proto85["m_columns"][] = "cont_plazo";
$proto85["m_columns"][] = "ctb_tipo_nombre";
$proto85["m_columns"][] = "nombre_cargo";
$proto85["m_columns"][] = "nombre_dependencia";
$proto85["m_columns"][] = "id_depto_superior";
$proto85["m_columns"][] = "Departamento_superior";
$proto85["m_columns"][] = "cont_numpoliza";
$proto85["m_columns"][] = "cont_secop_proceso";
$proto85["m_columns"][] = "cont_fecha_aprobgarantia";
$proto85["m_columns"][] = "cont_fechaapertura";
$proto85["m_columns"][] = "cont_munejec";
$proto85["m_columns"][] = "cont_cesion";
$proto85["m_columns"][] = "cont_modifica";
$proto85["m_columns"][] = "Username";
$obj = new SQLTable($proto85);

$proto84["m_table"] = $obj;
$proto84["m_sql"] = "q_bandejaentrada_supervisores";
$proto84["m_alias"] = "";
$proto84["m_srcTableName"] = "q_bandejaentrada_supervisores_consulta";
$proto86=array();
$proto86["m_sql"] = "";
$proto86["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto86["m_column"]=$obj;
$proto86["m_contained"] = array();
$proto86["m_strCase"] = "";
$proto86["m_havingmode"] = false;
$proto86["m_inBrackets"] = false;
$proto86["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto86);

$proto84["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto84);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_bandejaentrada_supervisores_consulta";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_bandejaentrada_supervisores_consulta = createSqlQuery_q_bandejaentrada_supervisores_consulta();


	
												;

																																							

$tdataq_bandejaentrada_supervisores_consulta[".sqlquery"] = $queryData_q_bandejaentrada_supervisores_consulta;



$tdataq_bandejaentrada_supervisores_consulta[".hasEvents"] = false;

?>