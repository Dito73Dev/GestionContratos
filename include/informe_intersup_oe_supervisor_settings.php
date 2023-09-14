<?php
$tdatainforme_intersup_oe_supervisor = array();
$tdatainforme_intersup_oe_supervisor[".searchableFields"] = array();
$tdatainforme_intersup_oe_supervisor[".ShortName"] = "informe_intersup_oe_supervisor";
$tdatainforme_intersup_oe_supervisor[".OwnerID"] = "";
$tdatainforme_intersup_oe_supervisor[".OriginalTable"] = "informe_intersup_oe";


$tdatainforme_intersup_oe_supervisor[".pagesByType"] = my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainforme_intersup_oe_supervisor[".originalPagesByType"] = $tdatainforme_intersup_oe_supervisor[".pagesByType"];
$tdatainforme_intersup_oe_supervisor[".pages"] = types2pages( my_json_decode( "{\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainforme_intersup_oe_supervisor[".originalPages"] = $tdatainforme_intersup_oe_supervisor[".pages"];
$tdatainforme_intersup_oe_supervisor[".defaultPages"] = my_json_decode( "{\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainforme_intersup_oe_supervisor[".originalDefaultPages"] = $tdatainforme_intersup_oe_supervisor[".defaultPages"];

//	field labels
$fieldLabelsinforme_intersup_oe_supervisor = array();
$fieldToolTipsinforme_intersup_oe_supervisor = array();
$pageTitlesinforme_intersup_oe_supervisor = array();
$placeHoldersinforme_intersup_oe_supervisor = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"] = array();
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"] = array();
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"] = array();
	$pageTitlesinforme_intersup_oe_supervisor["Spanish"] = array();
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["isoe_id"] = "Isoe Id";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["isoe_id"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["isoe_id"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["inf_id_fk"] = "Inf Id Fk";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["inf_id_fk"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["inf_id_fk"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["oe_id_fk"] = "Oe Id Fk";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["oe_id_fk"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["oe_id_fk"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["cont_nit_contra_ta_fk"] = "Cont Nit Contra Ta Fk";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["cont_nit_contra_ta_fk"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["cont_nit_contra_ta_fk"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["oe_ordinal"] = "Ordinal";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["oe_ordinal"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["oe_ordinal"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["oe"] = "Obligación";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["oe"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["oe"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["actividad"] = "Actividad";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["actividad"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["actividad"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["sup_aprueba"] = "Aprobar evidencia";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["sup_aprueba"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["sup_aprueba"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["sup_fecha"] = "Sup Fecha";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["sup_fecha"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["sup_fecha"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["sys_last_upd"] = "Sys Last Upd";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["sys_last_upd"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["sys_last_upd"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["sys_user"] = "Sys User";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["sys_user"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["sys_user"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["sup_obs"] = "Observaciones del supervisor";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["sup_obs"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["sup_obs"] = "";
	$fieldLabelsinforme_intersup_oe_supervisor["Spanish"]["evidencia_sup"] = "Evidencia";
	$fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]["evidencia_sup"] = "";
	$placeHoldersinforme_intersup_oe_supervisor["Spanish"]["evidencia_sup"] = "";
	if (count($fieldToolTipsinforme_intersup_oe_supervisor["Spanish"]))
		$tdatainforme_intersup_oe_supervisor[".isUseToolTips"] = true;
}


	$tdatainforme_intersup_oe_supervisor[".NCSearch"] = true;



$tdatainforme_intersup_oe_supervisor[".shortTableName"] = "informe_intersup_oe_supervisor";
$tdatainforme_intersup_oe_supervisor[".nSecOptions"] = 0;

$tdatainforme_intersup_oe_supervisor[".mainTableOwnerID"] = "";
$tdatainforme_intersup_oe_supervisor[".entityType"] = 1;
$tdatainforme_intersup_oe_supervisor[".connId"] = "dbct_at_localhost";


$tdatainforme_intersup_oe_supervisor[".strOriginalTableName"] = "informe_intersup_oe";

	



$tdatainforme_intersup_oe_supervisor[".showAddInPopup"] = false;

$tdatainforme_intersup_oe_supervisor[".showEditInPopup"] = false;

$tdatainforme_intersup_oe_supervisor[".showViewInPopup"] = false;

$tdatainforme_intersup_oe_supervisor[".listAjax"] = false;
//	temporary
//$tdatainforme_intersup_oe_supervisor[".listAjax"] = false;

	$tdatainforme_intersup_oe_supervisor[".audit"] = true;

	$tdatainforme_intersup_oe_supervisor[".locking"] = true;


$pages = $tdatainforme_intersup_oe_supervisor[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainforme_intersup_oe_supervisor[".edit"] = true;
	$tdatainforme_intersup_oe_supervisor[".afterEditAction"] = 1;
	$tdatainforme_intersup_oe_supervisor[".closePopupAfterEdit"] = 1;
	$tdatainforme_intersup_oe_supervisor[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainforme_intersup_oe_supervisor[".add"] = true;
$tdatainforme_intersup_oe_supervisor[".afterAddAction"] = 1;
$tdatainforme_intersup_oe_supervisor[".closePopupAfterAdd"] = 1;
$tdatainforme_intersup_oe_supervisor[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainforme_intersup_oe_supervisor[".list"] = true;
}



$tdatainforme_intersup_oe_supervisor[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainforme_intersup_oe_supervisor[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainforme_intersup_oe_supervisor[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainforme_intersup_oe_supervisor[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainforme_intersup_oe_supervisor[".printFriendly"] = true;
}



$tdatainforme_intersup_oe_supervisor[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainforme_intersup_oe_supervisor[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainforme_intersup_oe_supervisor[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainforme_intersup_oe_supervisor[".isUseAjaxSuggest"] = true;



																																													

$tdatainforme_intersup_oe_supervisor[".ajaxCodeSnippetAdded"] = false;

$tdatainforme_intersup_oe_supervisor[".buttonsAdded"] = false;

$tdatainforme_intersup_oe_supervisor[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainforme_intersup_oe_supervisor[".isUseTimeForSearch"] = false;


$tdatainforme_intersup_oe_supervisor[".badgeColor"] = "9acd32";


$tdatainforme_intersup_oe_supervisor[".allSearchFields"] = array();
$tdatainforme_intersup_oe_supervisor[".filterFields"] = array();
$tdatainforme_intersup_oe_supervisor[".requiredSearchFields"] = array();

$tdatainforme_intersup_oe_supervisor[".googleLikeFields"] = array();
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "isoe_id";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "inf_id_fk";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "oe_id_fk";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "id_cont_fk";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "cont_nit_contra_ta_fk";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "oe_ordinal";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "oe";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "actividad";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "evidencia_sup";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "sup_aprueba";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "sup_fecha";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "sup_obs";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "sys_last_upd";
$tdatainforme_intersup_oe_supervisor[".googleLikeFields"][] = "sys_user";



$tdatainforme_intersup_oe_supervisor[".tableType"] = "list";

$tdatainforme_intersup_oe_supervisor[".printerPageOrientation"] = 0;
$tdatainforme_intersup_oe_supervisor[".nPrinterPageScale"] = 100;

$tdatainforme_intersup_oe_supervisor[".nPrinterSplitRecords"] = 40;

$tdatainforme_intersup_oe_supervisor[".geocodingEnabled"] = false;










$tdatainforme_intersup_oe_supervisor[".pageSize"] = 30;

$tdatainforme_intersup_oe_supervisor[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainforme_intersup_oe_supervisor[".strOrderBy"] = $tstrOrderBy;

$tdatainforme_intersup_oe_supervisor[".orderindexes"] = array();


$tdatainforme_intersup_oe_supervisor[".sqlHead"] = "SELECT isoe_id,  inf_id_fk,  oe_id_fk,  id_cont_fk,  cont_nit_contra_ta_fk,  oe_ordinal,  oe,  actividad,  evidencia_sup,  sup_aprueba,  sup_fecha,  sup_obs,  sys_last_upd,  sys_user";
$tdatainforme_intersup_oe_supervisor[".sqlFrom"] = "FROM informe_intersup_oe";
$tdatainforme_intersup_oe_supervisor[".sqlWhereExpr"] = "";
$tdatainforme_intersup_oe_supervisor[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainforme_intersup_oe_supervisor[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainforme_intersup_oe_supervisor[".arrGroupsPerPage"] = $arrGPP;

$tdatainforme_intersup_oe_supervisor[".highlightSearchResults"] = true;

$tableKeysinforme_intersup_oe_supervisor = array();
$tableKeysinforme_intersup_oe_supervisor[] = "isoe_id";
$tdatainforme_intersup_oe_supervisor[".Keys"] = $tableKeysinforme_intersup_oe_supervisor;


$tdatainforme_intersup_oe_supervisor[".hideMobileList"] = array();




//	isoe_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "isoe_id";
	$fdata["GoodName"] = "isoe_id";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","isoe_id");
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


	$tdatainforme_intersup_oe_supervisor["isoe_id"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "isoe_id";
//	inf_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inf_id_fk";
	$fdata["GoodName"] = "inf_id_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","inf_id_fk");
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


	$tdatainforme_intersup_oe_supervisor["inf_id_fk"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "inf_id_fk";
//	oe_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "oe_id_fk";
	$fdata["GoodName"] = "oe_id_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","oe_id_fk");
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


	$tdatainforme_intersup_oe_supervisor["oe_id_fk"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "oe_id_fk";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","id_cont_fk");
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


	$tdatainforme_intersup_oe_supervisor["id_cont_fk"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "id_cont_fk";
//	cont_nit_contra_ta_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_nit_contra_ta_fk";
	$fdata["GoodName"] = "cont_nit_contra_ta_fk";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","cont_nit_contra_ta_fk");
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


	$tdatainforme_intersup_oe_supervisor["cont_nit_contra_ta_fk"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "cont_nit_contra_ta_fk";
//	oe_ordinal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "oe_ordinal";
	$fdata["GoodName"] = "oe_ordinal";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","oe_ordinal");
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


	$tdatainforme_intersup_oe_supervisor["oe_ordinal"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "oe_ordinal";
//	oe
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "oe";
	$fdata["GoodName"] = "oe";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","oe");
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


	$tdatainforme_intersup_oe_supervisor["oe"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "oe";
//	actividad
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "actividad";
	$fdata["GoodName"] = "actividad";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","actividad");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "actividad";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "actividad";

	
	
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


	$tdatainforme_intersup_oe_supervisor["actividad"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "actividad";
//	evidencia_sup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "evidencia_sup";
	$fdata["GoodName"] = "evidencia_sup";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","evidencia_sup");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "evidencia_sup";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "evidencia_sup";

	
	
				$fdata["UploadFolder"] = "../GestionContratistas/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
			$vdata["ShowFileSize"] = true;
			$vdata["ShowIcon"] = true;
			$vdata["DisplayPDF"] = true;
		
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatainforme_intersup_oe_supervisor["evidencia_sup"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "evidencia_sup";
//	sup_aprueba
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sup_aprueba";
	$fdata["GoodName"] = "sup_aprueba";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","sup_aprueba");
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


	$tdatainforme_intersup_oe_supervisor["sup_aprueba"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "sup_aprueba";
//	sup_fecha
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sup_fecha";
	$fdata["GoodName"] = "sup_fecha";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","sup_fecha");
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


	$tdatainforme_intersup_oe_supervisor["sup_fecha"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "sup_fecha";
//	sup_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sup_obs";
	$fdata["GoodName"] = "sup_obs";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","sup_obs");
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


	$tdatainforme_intersup_oe_supervisor["sup_obs"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "sup_obs";
//	sys_last_upd
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_last_upd";
	$fdata["GoodName"] = "sys_last_upd";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","sys_last_upd");
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


	$tdatainforme_intersup_oe_supervisor["sys_last_upd"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "sys_last_upd";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "informe_intersup_oe";
	$fdata["Label"] = GetFieldLabel("informe_intersup_oe_supervisor","sys_user");
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


	$tdatainforme_intersup_oe_supervisor["sys_user"] = $fdata;
		$tdatainforme_intersup_oe_supervisor[".searchableFields"][] = "sys_user";


$tables_data["informe_intersup_oe_supervisor"]=&$tdatainforme_intersup_oe_supervisor;
$field_labels["informe_intersup_oe_supervisor"] = &$fieldLabelsinforme_intersup_oe_supervisor;
$fieldToolTips["informe_intersup_oe_supervisor"] = &$fieldToolTipsinforme_intersup_oe_supervisor;
$placeHolders["informe_intersup_oe_supervisor"] = &$placeHoldersinforme_intersup_oe_supervisor;
$page_titles["informe_intersup_oe_supervisor"] = &$pageTitlesinforme_intersup_oe_supervisor;


changeTextControlsToDate( "informe_intersup_oe_supervisor" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["informe_intersup_oe_supervisor"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["informe_intersup_oe_supervisor"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="informe_intersup";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="informe_intersup";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "informe_intersup";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup_oe_supervisor"][0] = $masterParams;
				$masterTablesData["informe_intersup_oe_supervisor"][0]["masterKeys"] = array();
	$masterTablesData["informe_intersup_oe_supervisor"][0]["masterKeys"][]="inf_id";
				$masterTablesData["informe_intersup_oe_supervisor"][0]["detailKeys"] = array();
	$masterTablesData["informe_intersup_oe_supervisor"][0]["detailKeys"][]="inf_id_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="informe_intersup";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="informe_intersup2";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "informe_intersup2";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["informe_intersup_oe_supervisor"][1] = $masterParams;
				$masterTablesData["informe_intersup_oe_supervisor"][1]["masterKeys"] = array();
	$masterTablesData["informe_intersup_oe_supervisor"][1]["masterKeys"][]="inf_id";
				$masterTablesData["informe_intersup_oe_supervisor"][1]["detailKeys"] = array();
	$masterTablesData["informe_intersup_oe_supervisor"][1]["detailKeys"][]="inf_id_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_informe_intersup_oe_supervisor()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "isoe_id,  inf_id_fk,  oe_id_fk,  id_cont_fk,  cont_nit_contra_ta_fk,  oe_ordinal,  oe,  actividad,  evidencia_sup,  sup_aprueba,  sup_fecha,  sup_obs,  sys_last_upd,  sys_user";
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
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto6["m_sql"] = "isoe_id";
$proto6["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_id_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto8["m_sql"] = "inf_id_fk";
$proto8["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "oe_id_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto10["m_sql"] = "oe_id_fk";
$proto10["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto12["m_sql"] = "id_cont_fk";
$proto12["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_nit_contra_ta_fk",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto14["m_sql"] = "cont_nit_contra_ta_fk";
$proto14["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "oe_ordinal",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto16["m_sql"] = "oe_ordinal";
$proto16["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "oe",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto18["m_sql"] = "oe";
$proto18["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "actividad",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto20["m_sql"] = "actividad";
$proto20["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "evidencia_sup",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto22["m_sql"] = "evidencia_sup";
$proto22["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_aprueba",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto24["m_sql"] = "sup_aprueba";
$proto24["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fecha",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto26["m_sql"] = "sup_fecha";
$proto26["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_obs",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto28["m_sql"] = "sup_obs";
$proto28["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_last_upd",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto30["m_sql"] = "sys_last_upd";
$proto30["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "informe_intersup_oe",
	"m_srcTableName" => "informe_intersup_oe_supervisor"
));

$proto32["m_sql"] = "sys_user";
$proto32["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "informe_intersup_oe";
$proto35["m_srcTableName"] = "informe_intersup_oe_supervisor";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "isoe_id";
$proto35["m_columns"][] = "inf_id_fk";
$proto35["m_columns"][] = "oe_id_fk";
$proto35["m_columns"][] = "id_cont_fk";
$proto35["m_columns"][] = "cont_nit_contra_ta_fk";
$proto35["m_columns"][] = "oe_ordinal";
$proto35["m_columns"][] = "oe";
$proto35["m_columns"][] = "actividad";
$proto35["m_columns"][] = "evidencia";
$proto35["m_columns"][] = "evidencia_sup";
$proto35["m_columns"][] = "sup_aprueba";
$proto35["m_columns"][] = "sup_fecha";
$proto35["m_columns"][] = "sup_obs";
$proto35["m_columns"][] = "sys_last_upd";
$proto35["m_columns"][] = "sys_user";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "informe_intersup_oe";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "informe_intersup_oe_supervisor";
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
$proto0["m_srcTableName"]="informe_intersup_oe_supervisor";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_informe_intersup_oe_supervisor = createSqlQuery_informe_intersup_oe_supervisor();


	
												;

														

$tdatainforme_intersup_oe_supervisor[".sqlquery"] = $queryData_informe_intersup_oe_supervisor;



include_once(getabspath("include/informe_intersup_oe_supervisor_events.php"));
$tdatainforme_intersup_oe_supervisor[".hasEvents"] = true;

?>