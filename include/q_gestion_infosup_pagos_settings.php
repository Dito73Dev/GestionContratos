<?php
$tdataq_gestion_infosup_pagos = array();
$tdataq_gestion_infosup_pagos[".searchableFields"] = array();
$tdataq_gestion_infosup_pagos[".ShortName"] = "q_gestion_infosup_pagos";
$tdataq_gestion_infosup_pagos[".OwnerID"] = "";
$tdataq_gestion_infosup_pagos[".OriginalTable"] = "q_gestion_infosup_pagos";


$tdataq_gestion_infosup_pagos[".pagesByType"] = my_json_decode( "{}" );
$tdataq_gestion_infosup_pagos[".originalPagesByType"] = $tdataq_gestion_infosup_pagos[".pagesByType"];
$tdataq_gestion_infosup_pagos[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataq_gestion_infosup_pagos[".originalPages"] = $tdataq_gestion_infosup_pagos[".pages"];
$tdataq_gestion_infosup_pagos[".defaultPages"] = my_json_decode( "{}" );
$tdataq_gestion_infosup_pagos[".originalDefaultPages"] = $tdataq_gestion_infosup_pagos[".defaultPages"];

//	field labels
$fieldLabelsq_gestion_infosup_pagos = array();
$fieldToolTipsq_gestion_infosup_pagos = array();
$pageTitlesq_gestion_infosup_pagos = array();
$placeHoldersq_gestion_infosup_pagos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsq_gestion_infosup_pagos["Spanish"] = array();
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"] = array();
	$placeHoldersq_gestion_infosup_pagos["Spanish"] = array();
	$pageTitlesq_gestion_infosup_pagos["Spanish"] = array();
	$fieldLabelsq_gestion_infosup_pagos["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"]["id_cont_fk"] = "";
	$placeHoldersq_gestion_infosup_pagos["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsq_gestion_infosup_pagos["Spanish"]["inf_consecutivo"] = "Inf Consecutivo";
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"]["inf_consecutivo"] = "";
	$placeHoldersq_gestion_infosup_pagos["Spanish"]["inf_consecutivo"] = "";
	$fieldLabelsq_gestion_infosup_pagos["Spanish"]["inf_fecharep_i"] = "Inf Fecharep I";
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"]["inf_fecharep_i"] = "";
	$placeHoldersq_gestion_infosup_pagos["Spanish"]["inf_fecharep_i"] = "";
	$fieldLabelsq_gestion_infosup_pagos["Spanish"]["inf_fecharep_f"] = "Inf Fecharep F";
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"]["inf_fecharep_f"] = "";
	$placeHoldersq_gestion_infosup_pagos["Spanish"]["inf_fecharep_f"] = "";
	$fieldLabelsq_gestion_infosup_pagos["Spanish"]["inf_valorcontrato"] = "Inf Valorcontrato";
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"]["inf_valorcontrato"] = "";
	$placeHoldersq_gestion_infosup_pagos["Spanish"]["inf_valorcontrato"] = "";
	$fieldLabelsq_gestion_infosup_pagos["Spanish"]["inf_valor_pago"] = "Inf Valor Pago";
	$fieldToolTipsq_gestion_infosup_pagos["Spanish"]["inf_valor_pago"] = "";
	$placeHoldersq_gestion_infosup_pagos["Spanish"]["inf_valor_pago"] = "";
	if (count($fieldToolTipsq_gestion_infosup_pagos["Spanish"]))
		$tdataq_gestion_infosup_pagos[".isUseToolTips"] = true;
}


	$tdataq_gestion_infosup_pagos[".NCSearch"] = true;



$tdataq_gestion_infosup_pagos[".shortTableName"] = "q_gestion_infosup_pagos";
$tdataq_gestion_infosup_pagos[".nSecOptions"] = 0;

$tdataq_gestion_infosup_pagos[".mainTableOwnerID"] = "";
$tdataq_gestion_infosup_pagos[".entityType"] = 0;
$tdataq_gestion_infosup_pagos[".connId"] = "dbct_at_localhost";


$tdataq_gestion_infosup_pagos[".strOriginalTableName"] = "q_gestion_infosup_pagos";

	



$tdataq_gestion_infosup_pagos[".showAddInPopup"] = false;

$tdataq_gestion_infosup_pagos[".showEditInPopup"] = false;

$tdataq_gestion_infosup_pagos[".showViewInPopup"] = false;

$tdataq_gestion_infosup_pagos[".listAjax"] = false;
//	temporary
//$tdataq_gestion_infosup_pagos[".listAjax"] = false;

	$tdataq_gestion_infosup_pagos[".audit"] = true;

	$tdataq_gestion_infosup_pagos[".locking"] = true;


$pages = $tdataq_gestion_infosup_pagos[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataq_gestion_infosup_pagos[".edit"] = true;
	$tdataq_gestion_infosup_pagos[".afterEditAction"] = 1;
	$tdataq_gestion_infosup_pagos[".closePopupAfterEdit"] = 1;
	$tdataq_gestion_infosup_pagos[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataq_gestion_infosup_pagos[".add"] = true;
$tdataq_gestion_infosup_pagos[".afterAddAction"] = 1;
$tdataq_gestion_infosup_pagos[".closePopupAfterAdd"] = 1;
$tdataq_gestion_infosup_pagos[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataq_gestion_infosup_pagos[".list"] = true;
}



$tdataq_gestion_infosup_pagos[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataq_gestion_infosup_pagos[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataq_gestion_infosup_pagos[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataq_gestion_infosup_pagos[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataq_gestion_infosup_pagos[".printFriendly"] = true;
}



$tdataq_gestion_infosup_pagos[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataq_gestion_infosup_pagos[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataq_gestion_infosup_pagos[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataq_gestion_infosup_pagos[".isUseAjaxSuggest"] = true;



															

$tdataq_gestion_infosup_pagos[".ajaxCodeSnippetAdded"] = false;

$tdataq_gestion_infosup_pagos[".buttonsAdded"] = false;

$tdataq_gestion_infosup_pagos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataq_gestion_infosup_pagos[".isUseTimeForSearch"] = false;


$tdataq_gestion_infosup_pagos[".badgeColor"] = "DAA520";


$tdataq_gestion_infosup_pagos[".allSearchFields"] = array();
$tdataq_gestion_infosup_pagos[".filterFields"] = array();
$tdataq_gestion_infosup_pagos[".requiredSearchFields"] = array();

$tdataq_gestion_infosup_pagos[".googleLikeFields"] = array();
$tdataq_gestion_infosup_pagos[".googleLikeFields"][] = "id_cont_fk";
$tdataq_gestion_infosup_pagos[".googleLikeFields"][] = "inf_consecutivo";
$tdataq_gestion_infosup_pagos[".googleLikeFields"][] = "inf_fecharep_i";
$tdataq_gestion_infosup_pagos[".googleLikeFields"][] = "inf_fecharep_f";
$tdataq_gestion_infosup_pagos[".googleLikeFields"][] = "inf_valorcontrato";
$tdataq_gestion_infosup_pagos[".googleLikeFields"][] = "inf_valor_pago";



$tdataq_gestion_infosup_pagos[".tableType"] = "list";

$tdataq_gestion_infosup_pagos[".printerPageOrientation"] = 0;
$tdataq_gestion_infosup_pagos[".nPrinterPageScale"] = 100;

$tdataq_gestion_infosup_pagos[".nPrinterSplitRecords"] = 40;

$tdataq_gestion_infosup_pagos[".geocodingEnabled"] = false;










$tdataq_gestion_infosup_pagos[".pageSize"] = 20;

$tdataq_gestion_infosup_pagos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataq_gestion_infosup_pagos[".strOrderBy"] = $tstrOrderBy;

$tdataq_gestion_infosup_pagos[".orderindexes"] = array();


$tdataq_gestion_infosup_pagos[".sqlHead"] = "SELECT id_cont_fk,  	inf_consecutivo,  	inf_fecharep_i,  	inf_fecharep_f,  	inf_valorcontrato,  	inf_valor_pago";
$tdataq_gestion_infosup_pagos[".sqlFrom"] = "FROM q_gestion_infosup_pagos";
$tdataq_gestion_infosup_pagos[".sqlWhereExpr"] = "";
$tdataq_gestion_infosup_pagos[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataq_gestion_infosup_pagos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataq_gestion_infosup_pagos[".arrGroupsPerPage"] = $arrGPP;

$tdataq_gestion_infosup_pagos[".highlightSearchResults"] = true;

$tableKeysq_gestion_infosup_pagos = array();
$tdataq_gestion_infosup_pagos[".Keys"] = $tableKeysq_gestion_infosup_pagos;


$tdataq_gestion_infosup_pagos[".hideMobileList"] = array();




//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "q_gestion_infosup_pagos";
	$fdata["Label"] = GetFieldLabel("q_gestion_infosup_pagos","id_cont_fk");
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


	$tdataq_gestion_infosup_pagos["id_cont_fk"] = $fdata;
		$tdataq_gestion_infosup_pagos[".searchableFields"][] = "id_cont_fk";
//	inf_consecutivo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "inf_consecutivo";
	$fdata["GoodName"] = "inf_consecutivo";
	$fdata["ownerTable"] = "q_gestion_infosup_pagos";
	$fdata["Label"] = GetFieldLabel("q_gestion_infosup_pagos","inf_consecutivo");
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


	$tdataq_gestion_infosup_pagos["inf_consecutivo"] = $fdata;
		$tdataq_gestion_infosup_pagos[".searchableFields"][] = "inf_consecutivo";
//	inf_fecharep_i
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "inf_fecharep_i";
	$fdata["GoodName"] = "inf_fecharep_i";
	$fdata["ownerTable"] = "q_gestion_infosup_pagos";
	$fdata["Label"] = GetFieldLabel("q_gestion_infosup_pagos","inf_fecharep_i");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataq_gestion_infosup_pagos["inf_fecharep_i"] = $fdata;
		$tdataq_gestion_infosup_pagos[".searchableFields"][] = "inf_fecharep_i";
//	inf_fecharep_f
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "inf_fecharep_f";
	$fdata["GoodName"] = "inf_fecharep_f";
	$fdata["ownerTable"] = "q_gestion_infosup_pagos";
	$fdata["Label"] = GetFieldLabel("q_gestion_infosup_pagos","inf_fecharep_f");
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

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdataq_gestion_infosup_pagos["inf_fecharep_f"] = $fdata;
		$tdataq_gestion_infosup_pagos[".searchableFields"][] = "inf_fecharep_f";
//	inf_valorcontrato
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "inf_valorcontrato";
	$fdata["GoodName"] = "inf_valorcontrato";
	$fdata["ownerTable"] = "q_gestion_infosup_pagos";
	$fdata["Label"] = GetFieldLabel("q_gestion_infosup_pagos","inf_valorcontrato");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valorcontrato";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valorcontrato";

	
	
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


	$tdataq_gestion_infosup_pagos["inf_valorcontrato"] = $fdata;
		$tdataq_gestion_infosup_pagos[".searchableFields"][] = "inf_valorcontrato";
//	inf_valor_pago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "inf_valor_pago";
	$fdata["GoodName"] = "inf_valor_pago";
	$fdata["ownerTable"] = "q_gestion_infosup_pagos";
	$fdata["Label"] = GetFieldLabel("q_gestion_infosup_pagos","inf_valor_pago");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "inf_valor_pago";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "inf_valor_pago";

	
	
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


	$tdataq_gestion_infosup_pagos["inf_valor_pago"] = $fdata;
		$tdataq_gestion_infosup_pagos[".searchableFields"][] = "inf_valor_pago";


$tables_data["q_gestion_infosup_pagos"]=&$tdataq_gestion_infosup_pagos;
$field_labels["q_gestion_infosup_pagos"] = &$fieldLabelsq_gestion_infosup_pagos;
$fieldToolTips["q_gestion_infosup_pagos"] = &$fieldToolTipsq_gestion_infosup_pagos;
$placeHolders["q_gestion_infosup_pagos"] = &$placeHoldersq_gestion_infosup_pagos;
$page_titles["q_gestion_infosup_pagos"] = &$pageTitlesq_gestion_infosup_pagos;


changeTextControlsToDate( "q_gestion_infosup_pagos" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["q_gestion_infosup_pagos"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["q_gestion_infosup_pagos"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_q_gestion_infosup_pagos()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_cont_fk,  	inf_consecutivo,  	inf_fecharep_i,  	inf_fecharep_f,  	inf_valorcontrato,  	inf_valor_pago";
$proto0["m_strFrom"] = "FROM q_gestion_infosup_pagos";
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
	"m_strName" => "id_cont_fk",
	"m_strTable" => "q_gestion_infosup_pagos",
	"m_srcTableName" => "q_gestion_infosup_pagos"
));

$proto6["m_sql"] = "id_cont_fk";
$proto6["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_consecutivo",
	"m_strTable" => "q_gestion_infosup_pagos",
	"m_srcTableName" => "q_gestion_infosup_pagos"
));

$proto8["m_sql"] = "inf_consecutivo";
$proto8["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_i",
	"m_strTable" => "q_gestion_infosup_pagos",
	"m_srcTableName" => "q_gestion_infosup_pagos"
));

$proto10["m_sql"] = "inf_fecharep_i";
$proto10["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_fecharep_f",
	"m_strTable" => "q_gestion_infosup_pagos",
	"m_srcTableName" => "q_gestion_infosup_pagos"
));

$proto12["m_sql"] = "inf_fecharep_f";
$proto12["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valorcontrato",
	"m_strTable" => "q_gestion_infosup_pagos",
	"m_srcTableName" => "q_gestion_infosup_pagos"
));

$proto14["m_sql"] = "inf_valorcontrato";
$proto14["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "inf_valor_pago",
	"m_strTable" => "q_gestion_infosup_pagos",
	"m_srcTableName" => "q_gestion_infosup_pagos"
));

$proto16["m_sql"] = "inf_valor_pago";
$proto16["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "q_gestion_infosup_pagos";
$proto19["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id_cont_fk";
$proto19["m_columns"][] = "inf_consecutivo";
$proto19["m_columns"][] = "inf_fecharep_i";
$proto19["m_columns"][] = "inf_fecharep_f";
$proto19["m_columns"][] = "inf_valorcontrato";
$proto19["m_columns"][] = "inf_valor_pago";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "q_gestion_infosup_pagos";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "q_gestion_infosup_pagos";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="q_gestion_infosup_pagos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_q_gestion_infosup_pagos = createSqlQuery_q_gestion_infosup_pagos();


	
												;

						

$tdataq_gestion_infosup_pagos[".sqlquery"] = $queryData_q_gestion_infosup_pagos;



$tdataq_gestion_infosup_pagos[".hasEvents"] = false;

?>