<?php
$tdatainforme_intersup_plan_pagos_adm = array();
$tdatainforme_intersup_plan_pagos_adm[".searchableFields"] = array();
$tdatainforme_intersup_plan_pagos_adm[".ShortName"] = "informe_intersup_plan_pagos_adm";
$tdatainforme_intersup_plan_pagos_adm[".OwnerID"] = "";
$tdatainforme_intersup_plan_pagos_adm[".OriginalTable"] = "informe_intersup_plan_pagos";


$tdatainforme_intersup_plan_pagos_adm[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_plan_pagos_adm[".originalPagesByType"] = $tdatainforme_intersup_plan_pagos_adm[".pagesByType"];
$tdatainforme_intersup_plan_pagos_adm[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_plan_pagos_adm[".originalPages"] = $tdatainforme_intersup_plan_pagos_adm[".pages"];
$tdatainforme_intersup_plan_pagos_adm[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_plan_pagos_adm[".originalDefaultPages"] = $tdatainforme_intersup_plan_pagos_adm[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_plan_pagos_adm = array();
$fieldToolTipsinforme_intersup_plan_pagos_adm = array();
$pageTitlesinforme_intersup_plan_pagos_adm = array();
$placeHoldersinforme_intersup_plan_pagos_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"] = array();
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"] = array();
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"] = array();
	$pageTitlesinforme_intersup_plan_pagos_adm["Spanish"] = array();
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_id"] = "Inf Id";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_id"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_id"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["id_cont_fk"] = "Id";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_consecutivo"] = "Consecutivo";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_fecharep_i"] = "Fecha de inicio";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_fecharep_f"] = "Fecha Final";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_valorcontrato"] = "Valor del contrato";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_valor_pago"] = "Valor a pagar";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_valor_pago"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_valor_pago"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["dias_calculados"] = "Dias Calculados";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["dias_calculados"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["dias_calculados"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["dias_fiscales"] = "Dias Fiscales";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["dias_fiscales"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["dias_fiscales"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["valor_a_pagar"] = "Valor a Pagar";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["valor_a_pagar"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["valor_a_pagar"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["avgavance"] = "% avance";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["avgavance"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["avgavance"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_st"] = "Estado";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_st"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_st"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_mes"] = "Mes";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_mes"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_mes"] = "";
	$fieldLabelsinforme_intersup_plan_pagos_adm["Spanish"]["inf_tipopago"] = "Tipo pago";
	$fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]["inf_tipopago"] = "";
	$placeHoldersinforme_intersup_plan_pagos_adm["Spanish"]["inf_tipopago"] = "";
	if (count($fieldToolTipsinforme_intersup_plan_pagos_adm["Spanish"]))
		$tdatainforme_intersup_plan_pagos_adm[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_plan_pagos_adm[".NCSearch"] = true;



$tdatainforme_intersup_plan_pagos_adm[".shortTableName"] = "informe_intersup_plan_pagos_adm";
$tdatainforme_intersup_plan_pagos_adm[".nSecOptions"] = 0;

$tdatainforme_intersup_plan_pagos_adm[".mainTableOwnerID"] = "";
$tdatainforme_intersup_plan_pagos_adm[".entityType"] = 1;
$tdatainforme_intersup_plan_pagos_adm[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_plan_pagos_adm[".strOriginalTableName"] = "informe_intersup_plan_pagos";

	



$tdatainforme_intersup_plan_pagos_adm[".showAddInPopup"] = false;

$tdatainforme_intersup_plan_pagos_adm[".showEditInPopup"] = false;

$tdatainforme_intersup_plan_pagos_adm[".showViewInPopup"] = false;

$tdatainforme_intersup_plan_pagos_adm[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_plan_pagos_adm[".listAjax"] = false;

	$tdatainforme_intersup_plan_pagos_adm[".audit"] = true;

	$tdatainforme_intersup_plan_pagos_adm[".locking"] = true;


$pages = $tdatainforme_intersup_plan_pagos_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_plan_pagos_adm[".edit"] = true;
	$tdatainforme_intersup_plan_pagos_adm[".afterEditAction"] = 1;
	$tdatainforme_intersup_plan_pagos_adm[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_plan_pagos_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_plan_pagos_adm[".add"] = true;
$tdatainforme_intersup_plan_pagos_adm[".afterAddAction"] = 1;
$tdatainforme_intersup_plan_pagos_adm[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_plan_pagos_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_plan_pagos_adm[".list"] = true;
}



$tdatainforme_intersup_plan_pagos_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_plan_pagos_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_plan_pagos_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_plan_pagos_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_plan_pagos_adm[".printFriendly"] = true;
}



$tdatainforme_intersup_plan_pagos_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_plan_pagos_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_plan_pagos_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_plan_pagos_adm[".isUseAjaxSuggest"] = true;



																														

$tdatainforme_intersup_plan_pagos_adm[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_plan_pagos_adm[".buttonsAdded"] = false;

$tdatainforme_intersup_plan_pagos_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_plan_pagos_adm[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_plan_pagos_adm[".badgeColor"] = "008b8b";


$tdatainforme_intersup_plan_pagos_adm[".allSearchFields"] = array();
$tdatainforme_intersup_plan_pagos_adm[".filterFields"] = array();
$tdatainforme_intersup_plan_pagos_adm[".requiredSearchFields"] = array();

$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"] = array();
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_id";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_consecutivo";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_fecharep_i";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_fecharep_f";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_valorcontrato";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_valor_pago";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "dias_calculados";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "dias_fiscales";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "valor_a_pagar";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "avgavance";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_st";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_mes";
$tdatainforme_intersup_plan_pagos_adm[".googleLikeFields"][] = "inf_tipopago";



$tdatainforme_intersup_plan_pagos_adm[".tableType"] = "list";

$tdatainforme_intersup_plan_pagos_adm[".printerPageOrientation"] = 0;
$tdatainforme_intersup_plan_pagos_adm[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_plan_pagos_adm[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_plan_pagos_adm[".geocodingEnabled"] = false;










$tdatainforme_intersup_plan_pagos_adm[".pageSize"] = 20;

$tdatainforme_intersup_plan_pagos_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY inf_consecutivo";
$tdatainforme_intersup_plan_pagos_adm[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_plan_pagos_adm[".orderindexes"] = array();
			$tdatainforme_intersup_plan_pagos_adm[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "inf_consecutivo");


$tdatainforme_intersup_plan_pagos_adm[".sqlHead"] = "SELECT inf_id,  id_cont_fk,  inf_consecutivo,  inf_fecharep_i,  inf_fecharep_f,  inf_valorcontrato,  inf_valor_pago,  dias_calculados,  dias_fiscales,  valor_a_pagar,  avgavance,  inf_st,  inf_mes,  inf_tipopago";
$tdatainforme_intersup_plan_pagos_adm[".sqlFrom"] = "FROM informe_intersup_plan_pagos";
$tdatainforme_intersup_plan_pagos_adm[".sqlWhereExpr"] = "";
$tdatainforme_intersup_plan_pagos_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_plan_pagos_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_plan_pagos_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_plan_pagos_adm[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_plan_pagos_adm = array();
$tableKeysinforme_intersup_plan_pagos_adm[] = "inf_id";
$tdatainforme_intersup_plan_pagos_adm[".Keys"] = $tableKeysinforme_intersup_plan_pagos_adm;


$tdatainforme_intersup_plan_pagos_adm[".hideMobileList"] = array();




//	inf_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "inf_id";
	$fdata["GoodName"] = "inf_id";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "inf_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_id"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_cont_fk";

	
	
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
	$edata["LookupTable"] = "contrato";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_valorcontrato", 'lookupF'=>"cont_valorinicial");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_valor_pago", 'lookupF'=>"cont_valormensual");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	
				//dependent dropdowns @deprecated data ?
	$edata["DependentLookups"] = array();
	$edata["DependentLookups"][] = "inf_consecutivo";
				$edata["DependentLookups"][] = "inf_consecutivo";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["id_cont_fk"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "id_cont_fk";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_consecutivo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_consecutivo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_consecutivo";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Readonly");

	
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
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_000_control_informes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"inf_fecharep_i", 'lookupF'=>"ultimo_informe");
	$edata["autoCompleteFields"][] = array('masterF'=>"inf_fecharep_f", 'lookupF'=>"ultimo_informeA");
	$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "csc_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "csc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont" );

	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "q_000_control_informes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "csc_id";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "csc_id";

	

	
	$edata["LookupOrderBy"] = "";

	
		$edata["UseCategory"] = true;
	$edata["categoryFields"] = array();
	$edata["categoryFields"][] = array( "main" => "id_cont_fk", "lookup" => "id_cont" );

	
	

	
	
	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatainforme_intersup_plan_pagos_adm["inf_consecutivo"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_consecutivo";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_fecharep_i");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_i";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_i";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_fecharep_i"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_fecharep_f");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "inf_fecharep_f";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_fecharep_f";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_fecharep_f"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_fecharep_f";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_valorcontrato"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_valorcontrato";
//	inf_valor_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "inf_valor_pago";
	$fdata["GoodName"] = "inf_valor_pago";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_valor_pago");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valor_pago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valor_pago";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_valor_pago"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_valor_pago";
//	dias_calculados
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dias_calculados";
	$fdata["GoodName"] = "dias_calculados";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","dias_calculados");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_calculados";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_calculados";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["dias_calculados"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "dias_calculados";
//	dias_fiscales
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dias_fiscales";
	$fdata["GoodName"] = "dias_fiscales";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","dias_fiscales");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "dias_fiscales";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dias_fiscales";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["dias_fiscales"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "dias_fiscales";
//	valor_a_pagar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "valor_a_pagar";
	$fdata["GoodName"] = "valor_a_pagar";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","valor_a_pagar");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "valor_a_pagar";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "valor_a_pagar";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["valor_a_pagar"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "valor_a_pagar";
//	avgavance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "avgavance";
	$fdata["GoodName"] = "avgavance";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","avgavance");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "avgavance";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "avgavance";

	
	
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


	$tdatainforme_intersup_plan_pagos_adm["avgavance"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "avgavance";
//	inf_st
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "inf_st";
	$fdata["GoodName"] = "inf_st";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_st");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_st";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_st";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["list"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["print"] = $vdata;
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["export"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_plan_pagos_st";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "st_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "st_name";

				$edata["LookupWhereCode"] = true;


	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_plan_pagos_st";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "st_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "st_name";

				$edata["LookupWhereCode"] = true;


	
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

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "informe_intersup_plan_pagos_st";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "st_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "st_name";

				$edata["LookupWhereCode"] = true;


	
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




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


	$tdatainforme_intersup_plan_pagos_adm["inf_st"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_st";
//	inf_mes
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "inf_mes";
	$fdata["GoodName"] = "inf_mes";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_mes");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_mes";

		$fdata["sourceSingle"] = "inf_mes";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_mes";

	
	
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
	$edata["LookupTable"] = "nomina_cont_meses";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mes_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mes_name";

	

	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_mes"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_mes";
//	inf_tipopago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "inf_tipopago";
	$fdata["GoodName"] = "inf_tipopago";
	$fdata["ownerTable"] = "informe_intersup_plan_pagos";
	$fdata["Label"] = GetFieldLabel("informe_intersup_plan_pagos_adm","inf_tipopago");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "inf_tipopago";

		$fdata["sourceSingle"] = "inf_tipopago";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_tipopago";

	
	
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
	$edata["LookupTable"] = "tparam_tipopago";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "tipopago_id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "tipopago_nombre";

	

	
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


	$tdatainforme_intersup_plan_pagos_adm["inf_tipopago"] = $fdata;
		$tdatainforme_intersup_plan_pagos_adm[".searchableFields"][] = "inf_tipopago";


$tables_data["informe_intersup_plan_pagos_adm"]=&$tdatainforme_intersup_plan_pagos_adm;
$field_labels["informe_intersup_plan_pagos_adm"] = &$fieldLabelsinforme_intersup_plan_pagos_adm;
$fieldToolTips["informe_intersup_plan_pagos_adm"] = &$fieldToolTipsinforme_intersup_plan_pagos_adm;
$placeHolders["informe_intersup_plan_pagos_adm"] = &$placeHoldersinforme_intersup_plan_pagos_adm;
$page_titles["informe_intersup_plan_pagos_adm"] = &$pageTitlesinforme_intersup_plan_pagos_adm;


changeTextControlsToDate( "informe_intersup_plan_pagos_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_plan_pagos_adm"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_plan_pagos_adm"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="informe_intersup";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="informe_intersup_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "informe_intersup_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup_plan_pagos_adm"][0] = $masterParams;
				$masterTablesData["informe_intersup_plan_pagos_adm"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup_plan_pagos_adm"][0]["masterKeys"][]="id_cont_fk";
				$masterTablesData["informe_intersup_plan_pagos_adm"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup_plan_pagos_adm"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_plan_pagos_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "inf_id,  id_cont_fk,  inf_consecutivo,  inf_fecharep_i,  inf_fecharep_f,  inf_valorcontrato,  inf_valor_pago,  dias_calculados,  dias_fiscales,  valor_a_pagar,  avgavance,  inf_st,  inf_mes,  inf_tipopago";
$proto0["m_strFrom"] = "FROM informe_intersup_plan_pagos";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY inf_consecutivo";
	
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
	"m_strName" => "inf_id",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto6["m_sql"] = "inf_id";
$proto6["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto10["m_sql"] = "inf_consecutivo";
$proto10["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto12["m_sql"] = "inf_fecharep_i";
$proto12["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto14["m_sql"] = "inf_fecharep_f";
$proto14["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto16["m_sql"] = "inf_valorcontrato";
$proto16["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valor_pago",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto18["m_sql"] = "inf_valor_pago";
$proto18["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_calculados",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto20["m_sql"] = "dias_calculados";
$proto20["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dias_fiscales",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto22["m_sql"] = "dias_fiscales";
$proto22["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "valor_a_pagar",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto24["m_sql"] = "valor_a_pagar";
$proto24["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "avgavance",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto26["m_sql"] = "avgavance";
$proto26["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_st",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto28["m_sql"] = "inf_st";
$proto28["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_mes",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto30["m_sql"] = "inf_mes";
$proto30["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_tipopago",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto32["m_sql"] = "inf_tipopago";
$proto32["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "informe_intersup_plan_pagos";
$proto35["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "inf_id";
$proto35["m_columns"][] = "id_cont_fk";
$proto35["m_columns"][] = "inf_consecutivo";
$proto35["m_columns"][] = "inf_fecharep_i";
$proto35["m_columns"][] = "inf_fecharep_f";
$proto35["m_columns"][] = "inf_valorcontrato";
$proto35["m_columns"][] = "inf_valor_pago";
$proto35["m_columns"][] = "dias_calculados";
$proto35["m_columns"][] = "dias_fiscales";
$proto35["m_columns"][] = "valor_a_pagar";
$proto35["m_columns"][] = "avgavance";
$proto35["m_columns"][] = "inf_st";
$proto35["m_columns"][] = "inf_mes";
$proto35["m_columns"][] = "inf_tipopago";
$proto35["m_columns"][] = "sysuser";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "informe_intersup_plan_pagos";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "informe_intersup_plan_pagos_adm";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "informe_intersup_plan_pagos",
	"m_srcTableName" => "informe_intersup_plan_pagos_adm"
));

$proto38["m_column"]=$obj;
$proto38["m_bAsc"] = 1;
$proto38["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto38);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="informe_intersup_plan_pagos_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_plan_pagos_adm = createSqlQuery_informe_intersup_plan_pagos_adm();


	
												;

														

$tdatainforme_intersup_plan_pagos_adm[".sqlquery"] = $queryData_informe_intersup_plan_pagos_adm;



include_once(getabspath("include/informe_intersup_plan_pagos_adm_events.php"));
$tdatainforme_intersup_plan_pagos_adm[".hasEvents"] = true;

?>