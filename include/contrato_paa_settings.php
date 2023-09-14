<?php
$tdatacontrato_paa = array();
$tdatacontrato_paa[".searchableFields"] = array();
$tdatacontrato_paa[".ShortName"] = "contrato_paa";
$tdatacontrato_paa[".OwnerID"] = "";
$tdatacontrato_paa[".OriginalTable"] = "contrato_paa";


$tdatacontrato_paa[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_paa[".originalPagesByType"] = $tdatacontrato_paa[".pagesByType"];
$tdatacontrato_paa[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_paa[".originalPages"] = $tdatacontrato_paa[".pages"];
$tdatacontrato_paa[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_paa[".originalDefaultPages"] = $tdatacontrato_paa[".defaultPages"];

//	field labels
$fieldLabelscontrato_paa = array();
$fieldToolTipscontrato_paa = array();
$pageTitlescontrato_paa = array();
$placeHolderscontrato_paa = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_paa["Spanish"] = array();
	$fieldToolTipscontrato_paa["Spanish"] = array();
	$placeHolderscontrato_paa["Spanish"] = array();
	$pageTitlescontrato_paa["Spanish"] = array();
	$fieldLabelscontrato_paa["Spanish"]["order_id"] = "Order Id";
	$fieldToolTipscontrato_paa["Spanish"]["order_id"] = "";
	$placeHolderscontrato_paa["Spanish"]["order_id"] = "";
	$fieldLabelscontrato_paa["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_paa["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_paa["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_paa["Spanish"]["paa_id_fk"] = "PAA";
	$fieldToolTipscontrato_paa["Spanish"]["paa_id_fk"] = "";
	$placeHolderscontrato_paa["Spanish"]["paa_id_fk"] = "";
	$fieldLabelscontrato_paa["Spanish"]["paa_valor"] = "VALOR PUBLICADO EN SECOP";
	$fieldToolTipscontrato_paa["Spanish"]["paa_valor"] = "";
	$placeHolderscontrato_paa["Spanish"]["paa_valor"] = "";
	$fieldLabelscontrato_paa["Spanish"]["paa_valor_ct"] = "VALOR DEL CONTRATO";
	$fieldToolTipscontrato_paa["Spanish"]["paa_valor_ct"] = "";
	$placeHolderscontrato_paa["Spanish"]["paa_valor_ct"] = "";
	$fieldLabelscontrato_paa["Spanish"]["paa_obs"] = "OBS";
	$fieldToolTipscontrato_paa["Spanish"]["paa_obs"] = "";
	$placeHolderscontrato_paa["Spanish"]["paa_obs"] = "";
	$fieldLabelscontrato_paa["Spanish"]["paa_unspsc"] = "COD. UNSPSC";
	$fieldToolTipscontrato_paa["Spanish"]["paa_unspsc"] = "";
	$placeHolderscontrato_paa["Spanish"]["paa_unspsc"] = "";
	if (count($fieldToolTipscontrato_paa["Spanish"]))
		$tdatacontrato_paa[".isUseToolTips"] = true;
}


	$tdatacontrato_paa[".NCSearch"] = true;



$tdatacontrato_paa[".shortTableName"] = "contrato_paa";
$tdatacontrato_paa[".nSecOptions"] = 0;

$tdatacontrato_paa[".mainTableOwnerID"] = "";
$tdatacontrato_paa[".entityType"] = 0;
$tdatacontrato_paa[".connId"] = "dbct_at_localhost";


$tdatacontrato_paa[".strOriginalTableName"] = "contrato_paa";

	



$tdatacontrato_paa[".showAddInPopup"] = false;

$tdatacontrato_paa[".showEditInPopup"] = false;

$tdatacontrato_paa[".showViewInPopup"] = false;

$tdatacontrato_paa[".listAjax"] = false;
//	temporary
//$tdatacontrato_paa[".listAjax"] = false;

	$tdatacontrato_paa[".audit"] = true;

	$tdatacontrato_paa[".locking"] = true;


$pages = $tdatacontrato_paa[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_paa[".edit"] = true;
	$tdatacontrato_paa[".afterEditAction"] = 1;
	$tdatacontrato_paa[".closePopupAfterEdit"] = 1;
	$tdatacontrato_paa[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_paa[".add"] = true;
$tdatacontrato_paa[".afterAddAction"] = 1;
$tdatacontrato_paa[".closePopupAfterAdd"] = 1;
$tdatacontrato_paa[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_paa[".list"] = true;
}



$tdatacontrato_paa[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_paa[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_paa[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_paa[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_paa[".printFriendly"] = true;
}



$tdatacontrato_paa[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_paa[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_paa[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_paa[".isUseAjaxSuggest"] = true;



																														

$tdatacontrato_paa[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_paa[".buttonsAdded"] = false;

$tdatacontrato_paa[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_paa[".isUseTimeForSearch"] = false;


$tdatacontrato_paa[".badgeColor"] = "db7093";


$tdatacontrato_paa[".allSearchFields"] = array();
$tdatacontrato_paa[".filterFields"] = array();
$tdatacontrato_paa[".requiredSearchFields"] = array();

$tdatacontrato_paa[".googleLikeFields"] = array();
$tdatacontrato_paa[".googleLikeFields"][] = "order_id";
$tdatacontrato_paa[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_paa[".googleLikeFields"][] = "paa_id_fk";
$tdatacontrato_paa[".googleLikeFields"][] = "paa_valor";
$tdatacontrato_paa[".googleLikeFields"][] = "paa_valor_ct";
$tdatacontrato_paa[".googleLikeFields"][] = "paa_obs";
$tdatacontrato_paa[".googleLikeFields"][] = "paa_unspsc";



$tdatacontrato_paa[".tableType"] = "list";

$tdatacontrato_paa[".printerPageOrientation"] = 0;
$tdatacontrato_paa[".nPrinterPageScale"] = 100;

$tdatacontrato_paa[".nPrinterSplitRecords"] = 40;

$tdatacontrato_paa[".geocodingEnabled"] = false;










$tdatacontrato_paa[".pageSize"] = 20;

$tdatacontrato_paa[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_paa[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_paa[".orderindexes"] = array();


$tdatacontrato_paa[".sqlHead"] = "SELECT order_id,  	id_cont_fk,  	paa_id_fk,  	paa_valor,  	paa_valor_ct,  	paa_obs,  	paa_unspsc";
$tdatacontrato_paa[".sqlFrom"] = "FROM contrato_paa";
$tdatacontrato_paa[".sqlWhereExpr"] = "";
$tdatacontrato_paa[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_paa[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_paa[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_paa[".highlightSearchResults"] = true;

$tableKeyscontrato_paa = array();
$tableKeyscontrato_paa[] = "order_id";
$tdatacontrato_paa[".Keys"] = $tableKeyscontrato_paa;


$tdatacontrato_paa[".hideMobileList"] = array();




//	order_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "order_id";
	$fdata["GoodName"] = "order_id";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","order_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "order_id";

		$fdata["sourceSingle"] = "order_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "order_id";

	
	
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


	$tdatacontrato_paa["order_id"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "order_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","id_cont_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "id_cont_fk";

		$fdata["sourceSingle"] = "id_cont_fk";

	
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
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "cont_hash";

	

	
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


	$tdatacontrato_paa["id_cont_fk"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "id_cont_fk";
//	paa_id_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "paa_id_fk";
	$fdata["GoodName"] = "paa_id_fk";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","paa_id_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "paa_id_fk";

		$fdata["sourceSingle"] = "paa_id_fk";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_id_fk";

	
	
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
	$edata["LookupTable"] = "q_informe_secop_publicados_dbgpaa";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 1;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"paa_valor", 'lookupF'=>"VALOR");
	$edata["autoCompleteFields"][] = array('masterF'=>"paa_unspsc", 'lookupF'=>"COD_UNSPSC");
	$edata["LCType"] = 2;

	
		
	$edata["LinkField"] = "PAA_ID";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "PAA_ID";

	

	
	$edata["LookupOrderBy"] = "PAA_ID";

	
	
	
	

	
	
	
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


	$tdatacontrato_paa["paa_id_fk"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "paa_id_fk";
//	paa_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "paa_valor";
	$fdata["GoodName"] = "paa_valor";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","paa_valor");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "paa_valor";

		$fdata["sourceSingle"] = "paa_valor";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_valor";

	
	
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


	$tdatacontrato_paa["paa_valor"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "paa_valor";
//	paa_valor_ct
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "paa_valor_ct";
	$fdata["GoodName"] = "paa_valor_ct";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","paa_valor_ct");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "paa_valor_ct";

		$fdata["sourceSingle"] = "paa_valor_ct";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_valor_ct";

	
	
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


	$tdatacontrato_paa["paa_valor_ct"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "paa_valor_ct";
//	paa_obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "paa_obs";
	$fdata["GoodName"] = "paa_obs";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","paa_obs");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "paa_obs";

		$fdata["sourceSingle"] = "paa_obs";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_obs";

	
	
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


	$tdatacontrato_paa["paa_obs"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "paa_obs";
//	paa_unspsc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "paa_unspsc";
	$fdata["GoodName"] = "paa_unspsc";
	$fdata["ownerTable"] = "contrato_paa";
	$fdata["Label"] = GetFieldLabel("contrato_paa","paa_unspsc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "paa_unspsc";

		$fdata["sourceSingle"] = "paa_unspsc";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "paa_unspsc";

	
	
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


	$tdatacontrato_paa["paa_unspsc"] = $fdata;
		$tdatacontrato_paa[".searchableFields"][] = "paa_unspsc";


$tables_data["contrato_paa"]=&$tdatacontrato_paa;
$field_labels["contrato_paa"] = &$fieldLabelscontrato_paa;
$fieldToolTips["contrato_paa"] = &$fieldToolTipscontrato_paa;
$placeHolders["contrato_paa"] = &$placeHolderscontrato_paa;
$page_titles["contrato_paa"] = &$pageTitlescontrato_paa;


changeTextControlsToDate( "contrato_paa" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_paa"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_paa"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_paa"][0] = $masterParams;
				$masterTablesData["contrato_paa"][0]["masterKeys"] = array();
	$masterTablesData["contrato_paa"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_paa"][0]["detailKeys"] = array();
	$masterTablesData["contrato_paa"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_paa()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "order_id,  	id_cont_fk,  	paa_id_fk,  	paa_valor,  	paa_valor_ct,  	paa_obs,  	paa_unspsc";
$proto0["m_strFrom"] = "FROM contrato_paa";
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
	"m_strName" => "order_id",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto6["m_sql"] = "order_id";
$proto6["m_srcTableName"] = "contrato_paa";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_paa";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_id_fk",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto10["m_sql"] = "paa_id_fk";
$proto10["m_srcTableName"] = "contrato_paa";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_valor",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto12["m_sql"] = "paa_valor";
$proto12["m_srcTableName"] = "contrato_paa";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_valor_ct",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto14["m_sql"] = "paa_valor_ct";
$proto14["m_srcTableName"] = "contrato_paa";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_obs",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto16["m_sql"] = "paa_obs";
$proto16["m_srcTableName"] = "contrato_paa";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "paa_unspsc",
	"m_strTable" => "contrato_paa",
	"m_srcTableName" => "contrato_paa"
));

$proto18["m_sql"] = "paa_unspsc";
$proto18["m_srcTableName"] = "contrato_paa";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "contrato_paa";
$proto21["m_srcTableName"] = "contrato_paa";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "order_id";
$proto21["m_columns"][] = "id_cont_fk";
$proto21["m_columns"][] = "paa_id_fk";
$proto21["m_columns"][] = "paa_valor";
$proto21["m_columns"][] = "paa_valor_ct";
$proto21["m_columns"][] = "paa_obs";
$proto21["m_columns"][] = "paa_unspsc";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "contrato_paa";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "contrato_paa";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_paa";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_paa = createSqlQuery_contrato_paa();


	
												;

							

$tdatacontrato_paa[".sqlquery"] = $queryData_contrato_paa;



$tdatacontrato_paa[".hasEvents"] = false;

?>