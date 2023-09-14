<?php
$tdatainforme_intersup_oe_adm = array();
$tdatainforme_intersup_oe_adm[".searchableFields"] = array();
$tdatainforme_intersup_oe_adm[".ShortName"] = "informe_intersup_oe_adm";
$tdatainforme_intersup_oe_adm[".OwnerID"] = "";
$tdatainforme_intersup_oe_adm[".OriginalTable"] = "informe_intersup_oe";


$tdatainforme_intersup_oe_adm[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_oe_adm[".originalPagesByType"] = $tdatainforme_intersup_oe_adm[".pagesByType"];
$tdatainforme_intersup_oe_adm[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_oe_adm[".originalPages"] = $tdatainforme_intersup_oe_adm[".pages"];
$tdatainforme_intersup_oe_adm[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_oe_adm[".originalDefaultPages"] = $tdatainforme_intersup_oe_adm[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_oe_adm = array();
$fieldToolTipsinforme_intersup_oe_adm = array();
$pageTitlesinforme_intersup_oe_adm = array();
$placeHoldersinforme_intersup_oe_adm = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_oe_adm["Spanish"] = array();
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"] = array();
	$placeHoldersinforme_intersup_oe_adm["Spanish"] = array();
	$pageTitlesinforme_intersup_oe_adm["Spanish"] = array();
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["isoe_id"] = "Isoe Id";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["isoe_id"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["isoe_id"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["inf_id_fk"] = "Inf Id Fk";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["inf_id_fk"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["inf_id_fk"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["oe_id_fk"] = "Oe Id Fk";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["oe_id_fk"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["oe_id_fk"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["cont_nit_contra_ta_fk"] = "Cont Nit Contra Ta Fk";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["cont_nit_contra_ta_fk"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["cont_nit_contra_ta_fk"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["oe_ordinal"] = "Ordinal";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["oe_ordinal"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["oe_ordinal"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["oe"] = "Obligación";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["oe"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["oe"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["actividad"] = "Actividad";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["actividad"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["actividad"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["evidencia"] = "Evidencia";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["evidencia"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["evidencia"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["sup_aprueba"] = "Estado evidencia";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["sup_aprueba"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["sup_aprueba"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["sup_fecha"] = "Sup Fecha";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["sup_fecha"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["sup_fecha"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["sys_last_upd"] = "Sys Last Upd";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["sys_last_upd"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["sys_last_upd"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["sys_user"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["sys_user"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["sup_obs"] = "Observaciones del supervisor";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["sup_obs"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["sup_obs"] = "";
	$fieldLabelsinforme_intersup_oe_adm["Spanish"]["evidencia_sup"] = "Evidencia Sup";
	$fieldToolTipsinforme_intersup_oe_adm["Spanish"]["evidencia_sup"] = "";
	$placeHoldersinforme_intersup_oe_adm["Spanish"]["evidencia_sup"] = "";
	if (count($fieldToolTipsinforme_intersup_oe_adm["Spanish"]))
		$tdatainforme_intersup_oe_adm[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_oe_adm[".NCSearch"] = true;



$tdatainforme_intersup_oe_adm[".shortTableName"] = "informe_intersup_oe_adm";
$tdatainforme_intersup_oe_adm[".nSecOptions"] = 0;

$tdatainforme_intersup_oe_adm[".mainTableOwnerID"] = "";
$tdatainforme_intersup_oe_adm[".entityType"] = 1;
$tdatainforme_intersup_oe_adm[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_oe_adm[".strOriginalTableName"] = "informe_intersup_oe";

	



$tdatainforme_intersup_oe_adm[".showAddInPopup"] = false;

$tdatainforme_intersup_oe_adm[".showEditInPopup"] = false;

$tdatainforme_intersup_oe_adm[".showViewInPopup"] = false;

$tdatainforme_intersup_oe_adm[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_oe_adm[".listAjax"] = false;

	$tdatainforme_intersup_oe_adm[".audit"] = true;

	$tdatainforme_intersup_oe_adm[".locking"] = true;


$pages = $tdatainforme_intersup_oe_adm[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_oe_adm[".edit"] = true;
	$tdatainforme_intersup_oe_adm[".afterEditAction"] = 1;
	$tdatainforme_intersup_oe_adm[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_oe_adm[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_oe_adm[".add"] = true;
$tdatainforme_intersup_oe_adm[".afterAddAction"] = 1;
$tdatainforme_intersup_oe_adm[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_oe_adm[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_oe_adm[".list"] = true;
}



$tdatainforme_intersup_oe_adm[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_oe_adm[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_oe_adm[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_oe_adm[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_oe_adm[".printFriendly"] = true;
}



$tdatainforme_intersup_oe_adm[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_oe_adm[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_oe_adm[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_oe_adm[".isUseAjaxSuggest"] = true;



																														

$tdatainforme_intersup_oe_adm[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_oe_adm[".buttonsAdded"] = false;

$tdatainforme_intersup_oe_adm[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_oe_adm[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_oe_adm[".badgeColor"] = "dc143c";


$tdatainforme_intersup_oe_adm[".allSearchFields"] = array();
$tdatainforme_intersup_oe_adm[".filterFields"] = array();
$tdatainforme_intersup_oe_adm[".requiredSearchFields"] = array();

$tdatainforme_intersup_oe_adm[".googleLikeFields"] = array();
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "isoe_id";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "inf_id_fk";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "oe_id_fk";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "cont_nit_contra_ta_fk";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "oe_ordinal";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "oe";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "actividad";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "evidencia";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "evidencia_sup";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "sup_aprueba";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "sup_fecha";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "sup_obs";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "sys_last_upd";
$tdatainforme_intersup_oe_adm[".googleLikeFields"][] = "sys_user";



$tdatainforme_intersup_oe_adm[".tableType"] = "list";

$tdatainforme_intersup_oe_adm[".printerPageOrientation"] = 0;
$tdatainforme_intersup_oe_adm[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_oe_adm[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_oe_adm[".geocodingEnabled"] = false;










$tdatainforme_intersup_oe_adm[".pageSize"] = 20;

$tdatainforme_intersup_oe_adm[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup_oe_adm[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_oe_adm[".orderindexes"] = array();


$tdatainforme_intersup_oe_adm[".sqlHead"] = "SELECT isoe_id,  	inf_id_fk,  	oe_id_fk,  	id_cont_fk,  	cont_nit_contra_ta_fk,  	oe_ordinal,  	oe,  	actividad,  	evidencia,  	evidencia_sup,  	sup_aprueba,  	sup_fecha,  	sup_obs,  	sys_last_upd,  	sys_user";
$tdatainforme_intersup_oe_adm[".sqlFrom"] = "FROM informe_intersup_oe";
$tdatainforme_intersup_oe_adm[".sqlWhereExpr"] = "";
$tdatainforme_intersup_oe_adm[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_oe_adm[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_oe_adm[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_oe_adm[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_oe_adm = array();
$tableKeysinforme_intersup_oe_adm[] = "isoe_id";
$tdatainforme_intersup_oe_adm[".Keys"] = $tableKeysinforme_intersup_oe_adm;


$tdatainforme_intersup_oe_adm[".hideMobileList"] = array();




//	isoe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "isoe_id";
	$fdata["GoodName"] = "isoe_id";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","isoe_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "isoe_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isoe_id";

	
	
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


	$tdatainforme_intersup_oe_adm["isoe_id"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "isoe_id";
//	inf_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inf_id_fk";
	$fdata["GoodName"] = "inf_id_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","inf_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "inf_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_id_fk";

	
	
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
	$edata["LookupTable"] = "informe_intersup";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "inf_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "inf_id";

	

	
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


	$tdatainforme_intersup_oe_adm["inf_id_fk"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "inf_id_fk";
//	oe_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "oe_id_fk";
	$fdata["GoodName"] = "oe_id_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","oe_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "oe_id_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oe_id_fk";

	
	
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
	$edata["LookupTable"] = "contrato_oe";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "oe_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "oe_id";

	

	
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


	$tdatainforme_intersup_oe_adm["oe_id_fk"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "oe_id_fk";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","id_cont_fk");
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


	$tdatainforme_intersup_oe_adm["id_cont_fk"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "id_cont_fk";
//	cont_nit_contra_ta_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_nit_contra_ta_fk";
	$fdata["GoodName"] = "cont_nit_contra_ta_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","cont_nit_contra_ta_fk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_nit_contra_ta_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_nit_contra_ta_fk";

	
	
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


	$tdatainforme_intersup_oe_adm["cont_nit_contra_ta_fk"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "cont_nit_contra_ta_fk";
//	oe_ordinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "oe_ordinal";
	$fdata["GoodName"] = "oe_ordinal";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","oe_ordinal");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "oe_ordinal";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oe_ordinal";

	
	
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


	$tdatainforme_intersup_oe_adm["oe_ordinal"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "oe_ordinal";
//	oe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "oe";
	$fdata["GoodName"] = "oe";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","oe");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "oe";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "oe";

	
	
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


	$tdatainforme_intersup_oe_adm["oe"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "oe";
//	actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actividad";
	$fdata["GoodName"] = "actividad";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "actividad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actividad";

	
	
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
			$edata["EditParams"].= " maxlength=800";

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


	$tdatainforme_intersup_oe_adm["actividad"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "actividad";
//	evidencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "evidencia";
	$fdata["GoodName"] = "evidencia";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","evidencia");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "evidencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evidencia";

	
	
				$fdata["UploadFolder"] = "../GestionContratistas/anexos_oe/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
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


	$fdata["Absolute"] = true;


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


	$tdatainforme_intersup_oe_adm["evidencia"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "evidencia";
//	evidencia_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "evidencia_sup";
	$fdata["GoodName"] = "evidencia_sup";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","evidencia_sup");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "evidencia_sup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evidencia_sup";

	
	
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


	$tdatainforme_intersup_oe_adm["evidencia_sup"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "evidencia_sup";
//	sup_aprueba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sup_aprueba";
	$fdata["GoodName"] = "sup_aprueba";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","sup_aprueba");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sup_aprueba";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_aprueba";

	
	
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
	$edata["LookupTable"] = "tparam_sn_oe";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "sn_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "sn_oe";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
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


	$tdatainforme_intersup_oe_adm["sup_aprueba"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "sup_aprueba";
//	sup_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sup_fecha";
	$fdata["GoodName"] = "sup_fecha";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","sup_fecha");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sup_fecha";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_fecha";

	
	
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


	$tdatainforme_intersup_oe_adm["sup_fecha"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "sup_fecha";
//	sup_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sup_obs";
	$fdata["GoodName"] = "sup_obs";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","sup_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sup_obs";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_obs";

	
	
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

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatainforme_intersup_oe_adm["sup_obs"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "sup_obs";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","sys_last_upd");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_last_upd";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_last_upd";

	
	
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


	$tdatainforme_intersup_oe_adm["sys_last_upd"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "sys_last_upd";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_adm","sys_user");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sys_user";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_user";

	
	
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
	
		$edata["autoUpdatable"] = true;

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


	$tdatainforme_intersup_oe_adm["sys_user"] = $fdata;
		$tdatainforme_intersup_oe_adm[".searchableFields"][] = "sys_user";


$tables_data["informe_intersup_oe_adm"]=&$tdatainforme_intersup_oe_adm;
$field_labels["informe_intersup_oe_adm"] = &$fieldLabelsinforme_intersup_oe_adm;
$fieldToolTips["informe_intersup_oe_adm"] = &$fieldToolTipsinforme_intersup_oe_adm;
$placeHolders["informe_intersup_oe_adm"] = &$placeHoldersinforme_intersup_oe_adm;
$page_titles["informe_intersup_oe_adm"] = &$pageTitlesinforme_intersup_oe_adm;


changeTextControlsToDate( "informe_intersup_oe_adm" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_oe_adm"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_oe_adm"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="informe_intersup";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="informe_intersup_adm";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "informe_intersup_adm";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup_oe_adm"][0] = $masterParams;
				$masterTablesData["informe_intersup_oe_adm"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup_oe_adm"][0]["masterKeys"][]="inf_id";
				$masterTablesData["informe_intersup_oe_adm"][0]["masterKeys"][]="id_cont_fk";
				$masterTablesData["informe_intersup_oe_adm"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup_oe_adm"][0]["detailKeys"][]="inf_id_fk";
				$masterTablesData["informe_intersup_oe_adm"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_oe_adm()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "isoe_id,  	inf_id_fk,  	oe_id_fk,  	id_cont_fk,  	cont_nit_contra_ta_fk,  	oe_ordinal,  	oe,  	actividad,  	evidencia,  	evidencia_sup,  	sup_aprueba,  	sup_fecha,  	sup_obs,  	sys_last_upd,  	sys_user";
$proto0["m_strFrom"] = "FROM informe_intersup_oe";
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
	"m_strName" => "isoe_id",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto6["m_sql"] = "isoe_id";
$proto6["m_srcTableName"] = "informe_intersup_oe_adm";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto8["m_sql"] = "inf_id_fk";
$proto8["m_srcTableName"] = "informe_intersup_oe_adm";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "oe_id_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto10["m_sql"] = "oe_id_fk";
$proto10["m_srcTableName"] = "informe_intersup_oe_adm";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto12["m_sql"] = "id_cont_fk";
$proto12["m_srcTableName"] = "informe_intersup_oe_adm";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto14["m_sql"] = "cont_nit_contra_ta_fk";
$proto14["m_srcTableName"] = "informe_intersup_oe_adm";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "oe_ordinal",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto16["m_sql"] = "oe_ordinal";
$proto16["m_srcTableName"] = "informe_intersup_oe_adm";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "oe",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto18["m_sql"] = "oe";
$proto18["m_srcTableName"] = "informe_intersup_oe_adm";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "actividad",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto20["m_sql"] = "actividad";
$proto20["m_srcTableName"] = "informe_intersup_oe_adm";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "evidencia",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto22["m_sql"] = "evidencia";
$proto22["m_srcTableName"] = "informe_intersup_oe_adm";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "evidencia_sup",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto24["m_sql"] = "evidencia_sup";
$proto24["m_srcTableName"] = "informe_intersup_oe_adm";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_aprueba",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto26["m_sql"] = "sup_aprueba";
$proto26["m_srcTableName"] = "informe_intersup_oe_adm";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fecha",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto28["m_sql"] = "sup_fecha";
$proto28["m_srcTableName"] = "informe_intersup_oe_adm";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_obs",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto30["m_sql"] = "sup_obs";
$proto30["m_srcTableName"] = "informe_intersup_oe_adm";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto32["m_sql"] = "sys_last_upd";
$proto32["m_srcTableName"] = "informe_intersup_oe_adm";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_adm"
));

$proto34["m_sql"] = "sys_user";
$proto34["m_srcTableName"] = "informe_intersup_oe_adm";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "informe_intersup_oe";
$proto37["m_srcTableName"] = "informe_intersup_oe_adm";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "isoe_id";
$proto37["m_columns"][] = "inf_id_fk";
$proto37["m_columns"][] = "oe_id_fk";
$proto37["m_columns"][] = "id_cont_fk";
$proto37["m_columns"][] = "cont_nit_contra_ta_fk";
$proto37["m_columns"][] = "oe_ordinal";
$proto37["m_columns"][] = "oe";
$proto37["m_columns"][] = "actividad";
$proto37["m_columns"][] = "evidencia";
$proto37["m_columns"][] = "evidencia_sup";
$proto37["m_columns"][] = "sup_aprueba";
$proto37["m_columns"][] = "sup_fecha";
$proto37["m_columns"][] = "sup_obs";
$proto37["m_columns"][] = "sys_last_upd";
$proto37["m_columns"][] = "sys_user";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "informe_intersup_oe";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "informe_intersup_oe_adm";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="informe_intersup_oe_adm";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_oe_adm = createSqlQuery_informe_intersup_oe_adm();


	
												;

															

$tdatainforme_intersup_oe_adm[".sqlquery"] = $queryData_informe_intersup_oe_adm;



include_once(getabspath("include/informe_intersup_oe_adm_events.php"));
$tdatainforme_intersup_oe_adm[".hasEvents"] = true;

?>