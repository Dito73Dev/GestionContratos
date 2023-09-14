<?php
$tdatacontrato_attached_ov = array();
$tdatacontrato_attached_ov[".searchableFields"] = array();
$tdatacontrato_attached_ov[".ShortName"] = "contrato_attached_ov";
$tdatacontrato_attached_ov[".OwnerID"] = "";
$tdatacontrato_attached_ov[".OriginalTable"] = "contrato_attached";


$tdatacontrato_attached_ov[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_attached_ov[".originalPagesByType"] = $tdatacontrato_attached_ov[".pagesByType"];
$tdatacontrato_attached_ov[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_attached_ov[".originalPages"] = $tdatacontrato_attached_ov[".pages"];
$tdatacontrato_attached_ov[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_attached_ov[".originalDefaultPages"] = $tdatacontrato_attached_ov[".defaultPages"];

//	field labels
$fieldLabelscontrato_attached_ov = array();
$fieldToolTipscontrato_attached_ov = array();
$pageTitlescontrato_attached_ov = array();
$placeHolderscontrato_attached_ov = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_attached_ov["Spanish"] = array();
	$fieldToolTipscontrato_attached_ov["Spanish"] = array();
	$placeHolderscontrato_attached_ov["Spanish"] = array();
	$pageTitlescontrato_attached_ov["Spanish"] = array();
	$fieldLabelscontrato_attached_ov["Spanish"]["id_att"] = "Id Att";
	$fieldToolTipscontrato_attached_ov["Spanish"]["id_att"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["id_att"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["id_cont_fk"] = "Id";
	$fieldToolTipscontrato_attached_ov["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["att_type"] = "Tipo de anexo";
	$fieldToolTipscontrato_attached_ov["Spanish"]["att_type"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["att_type"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["att_file"] = "Documento anexo";
	$fieldToolTipscontrato_attached_ov["Spanish"]["att_file"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["att_file"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipscontrato_attached_ov["Spanish"]["sys_user"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["sys_user"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["sys_date"] = "Sys Date";
	$fieldToolTipscontrato_attached_ov["Spanish"]["sys_date"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["sys_date"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["sys_time"] = "Fecha";
	$fieldToolTipscontrato_attached_ov["Spanish"]["sys_time"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["sys_time"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["sys_stat"] = "Sys Stat";
	$fieldToolTipscontrato_attached_ov["Spanish"]["sys_stat"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["sys_stat"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["att_cod"] = "Cod";
	$fieldToolTipscontrato_attached_ov["Spanish"]["att_cod"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["att_cod"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["cont_pre"] = "Número contrato / vigencia";
	$fieldToolTipscontrato_attached_ov["Spanish"]["cont_pre"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["cont_pre"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["cont_num"] = "Cont Num";
	$fieldToolTipscontrato_attached_ov["Spanish"]["cont_num"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["cont_num"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["cont_vigencia"] = "Cont Vigencia";
	$fieldToolTipscontrato_attached_ov["Spanish"]["cont_vigencia"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["cont_vigencia"] = "";
	$fieldLabelscontrato_attached_ov["Spanish"]["nom_doc"] = "Nombre documento";
	$fieldToolTipscontrato_attached_ov["Spanish"]["nom_doc"] = "";
	$placeHolderscontrato_attached_ov["Spanish"]["nom_doc"] = "";
	if (count($fieldToolTipscontrato_attached_ov["Spanish"]))
		$tdatacontrato_attached_ov[".isUseToolTips"] = true;
}


	$tdatacontrato_attached_ov[".NCSearch"] = true;



$tdatacontrato_attached_ov[".shortTableName"] = "contrato_attached_ov";
$tdatacontrato_attached_ov[".nSecOptions"] = 0;

$tdatacontrato_attached_ov[".mainTableOwnerID"] = "";
$tdatacontrato_attached_ov[".entityType"] = 1;
$tdatacontrato_attached_ov[".connId"] = "dbct_at_localhost";


$tdatacontrato_attached_ov[".strOriginalTableName"] = "contrato_attached";

	



$tdatacontrato_attached_ov[".showAddInPopup"] = false;

$tdatacontrato_attached_ov[".showEditInPopup"] = false;

$tdatacontrato_attached_ov[".showViewInPopup"] = false;

$tdatacontrato_attached_ov[".listAjax"] = false;
//	temporary
//$tdatacontrato_attached_ov[".listAjax"] = false;

	$tdatacontrato_attached_ov[".audit"] = true;

	$tdatacontrato_attached_ov[".locking"] = true;


$pages = $tdatacontrato_attached_ov[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_attached_ov[".edit"] = true;
	$tdatacontrato_attached_ov[".afterEditAction"] = 1;
	$tdatacontrato_attached_ov[".closePopupAfterEdit"] = 1;
	$tdatacontrato_attached_ov[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_attached_ov[".add"] = true;
$tdatacontrato_attached_ov[".afterAddAction"] = 1;
$tdatacontrato_attached_ov[".closePopupAfterAdd"] = 1;
$tdatacontrato_attached_ov[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_attached_ov[".list"] = true;
}



$tdatacontrato_attached_ov[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_attached_ov[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_attached_ov[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_attached_ov[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_attached_ov[".printFriendly"] = true;
}



$tdatacontrato_attached_ov[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_attached_ov[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_attached_ov[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_attached_ov[".isUseAjaxSuggest"] = true;



																														

$tdatacontrato_attached_ov[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_attached_ov[".buttonsAdded"] = false;

$tdatacontrato_attached_ov[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_attached_ov[".isUseTimeForSearch"] = false;


$tdatacontrato_attached_ov[".badgeColor"] = "bc8f8f";


$tdatacontrato_attached_ov[".allSearchFields"] = array();
$tdatacontrato_attached_ov[".filterFields"] = array();
$tdatacontrato_attached_ov[".requiredSearchFields"] = array();

$tdatacontrato_attached_ov[".googleLikeFields"] = array();
$tdatacontrato_attached_ov[".googleLikeFields"][] = "id_att";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "cont_pre";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "cont_num";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "cont_vigencia";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "att_type";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "nom_doc";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "att_cod";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "att_file";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "sys_user";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "sys_date";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "sys_time";
$tdatacontrato_attached_ov[".googleLikeFields"][] = "sys_stat";



$tdatacontrato_attached_ov[".tableType"] = "list";

$tdatacontrato_attached_ov[".printerPageOrientation"] = 0;
$tdatacontrato_attached_ov[".nPrinterPageScale"] = 100;

$tdatacontrato_attached_ov[".nPrinterSplitRecords"] = 40;

$tdatacontrato_attached_ov[".geocodingEnabled"] = false;










$tdatacontrato_attached_ov[".pageSize"] = 20;

$tdatacontrato_attached_ov[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_attached_ov[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_attached_ov[".orderindexes"] = array();


$tdatacontrato_attached_ov[".sqlHead"] = "SELECT id_att,  	id_cont_fk,  	cont_pre,  	cont_num,  	cont_vigencia,  	att_type,  	nom_doc,  	att_cod,  	att_file,  	sys_user,  	sys_date,  	sys_time,  	sys_stat";
$tdatacontrato_attached_ov[".sqlFrom"] = "FROM contrato_attached";
$tdatacontrato_attached_ov[".sqlWhereExpr"] = "";
$tdatacontrato_attached_ov[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_attached_ov[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_attached_ov[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_attached_ov[".highlightSearchResults"] = true;

$tableKeyscontrato_attached_ov = array();
$tableKeyscontrato_attached_ov[] = "id_att";
$tdatacontrato_attached_ov[".Keys"] = $tableKeyscontrato_attached_ov;


$tdatacontrato_attached_ov[".hideMobileList"] = array();




//	id_att
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_att";
	$fdata["GoodName"] = "id_att";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","id_att");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id_att";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_att";

	
	
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


	$tdatacontrato_attached_ov["id_att"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "id_att";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","id_cont_fk");
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
		$edata["autoCompleteFields"][] = array('masterF'=>"cont_pre", 'lookupF'=>"pre_contnumero");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_num", 'lookupF'=>"contnumero");
	$edata["autoCompleteFields"][] = array('masterF'=>"cont_vigencia", 'lookupF'=>"cont_ano");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_cont";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "id_cont";

	

	
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


	$tdatacontrato_attached_ov["id_cont_fk"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "id_cont_fk";
//	cont_pre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_pre";
	$fdata["GoodName"] = "cont_pre";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","cont_pre");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_pre";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_pre";

	
	
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


	$tdatacontrato_attached_ov["cont_pre"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "cont_pre";
//	cont_num
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "cont_num";
	$fdata["GoodName"] = "cont_num";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","cont_num");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_num";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_num";

	
	
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


	$tdatacontrato_attached_ov["cont_num"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "cont_num";
//	cont_vigencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cont_vigencia";
	$fdata["GoodName"] = "cont_vigencia";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","cont_vigencia");
	$fdata["FieldType"] = 2;


	
	
			

		$fdata["strField"] = "cont_vigencia";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_vigencia";

	
	
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


	$tdatacontrato_attached_ov["cont_vigencia"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "cont_vigencia";
//	att_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "att_type";
	$fdata["GoodName"] = "att_type";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","att_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "att_type";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_type";

	
	
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
	$edata["LookupTable"] = "contrato_attached_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"att_cod", 'lookupF'=>"att_type_cod");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id_att_type";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "att_type_name";

	

	
	$edata["LookupOrderBy"] = "att_type_name";

	
	
	
	

	
	
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
	$fdata["filterTotals"] = 1;
		$fdata["filterMultiSelect"] = 1;
		$fdata["filterTotalFields"] = "id_att";
		$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatacontrato_attached_ov["att_type"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "att_type";
//	nom_doc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "nom_doc";
	$fdata["GoodName"] = "nom_doc";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","nom_doc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nom_doc";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nom_doc";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacontrato_attached_ov["nom_doc"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "nom_doc";
//	att_cod
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "att_cod";
	$fdata["GoodName"] = "att_cod";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","att_cod");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "att_cod";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_cod";

	
	
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


	$tdatacontrato_attached_ov["att_cod"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "att_cod";
//	att_file
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "att_file";
	$fdata["GoodName"] = "att_file";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","att_file");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "att_file";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "att_file";

		$fdata["DeleteAssociatedFile"] = true;

		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "_attached/";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("pdf");
						$edata["acceptFileTypesHtml"] = ".pdf";

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


	$tdatacontrato_attached_ov["att_file"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "att_file";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","sys_user");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacontrato_attached_ov["sys_user"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","sys_date");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_date";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_date";

	
	
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


	$tdatacontrato_attached_ov["sys_date"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "sys_date";
//	sys_time
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sys_time";
	$fdata["GoodName"] = "sys_time";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","sys_time");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sys_time";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_time";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
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


	$tdatacontrato_attached_ov["sys_time"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "sys_time";
//	sys_stat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sys_stat";
	$fdata["GoodName"] = "sys_stat";
	$fdata["ownerTable"] = "contrato_attached";
	$fdata["Label"] = GetFieldLabel("contrato_attached_ov","sys_stat");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sys_stat";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sys_stat";

	
	
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


	$tdatacontrato_attached_ov["sys_stat"] = $fdata;
		$tdatacontrato_attached_ov[".searchableFields"][] = "sys_stat";


$tables_data["contrato_attached_ov"]=&$tdatacontrato_attached_ov;
$field_labels["contrato_attached_ov"] = &$fieldLabelscontrato_attached_ov;
$fieldToolTips["contrato_attached_ov"] = &$fieldToolTipscontrato_attached_ov;
$placeHolders["contrato_attached_ov"] = &$placeHolderscontrato_attached_ov;
$page_titles["contrato_attached_ov"] = &$pageTitlescontrato_attached_ov;


changeTextControlsToDate( "contrato_attached_ov" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_attached_ov"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_attached_ov"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_ov";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_ov";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_attached_ov"][0] = $masterParams;
				$masterTablesData["contrato_attached_ov"][0]["masterKeys"] = array();
	$masterTablesData["contrato_attached_ov"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_attached_ov"][0]["detailKeys"] = array();
	$masterTablesData["contrato_attached_ov"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_attached_ov()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_att,  	id_cont_fk,  	cont_pre,  	cont_num,  	cont_vigencia,  	att_type,  	nom_doc,  	att_cod,  	att_file,  	sys_user,  	sys_date,  	sys_time,  	sys_stat";
$proto0["m_strFrom"] = "FROM contrato_attached";
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
	"m_strName" => "id_att",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto6["m_sql"] = "id_att";
$proto6["m_srcTableName"] = "contrato_attached_ov";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_attached_ov";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_pre",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto10["m_sql"] = "cont_pre";
$proto10["m_srcTableName"] = "contrato_attached_ov";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_num",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto12["m_sql"] = "cont_num";
$proto12["m_srcTableName"] = "contrato_attached_ov";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_vigencia",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto14["m_sql"] = "cont_vigencia";
$proto14["m_srcTableName"] = "contrato_attached_ov";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "att_type",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto16["m_sql"] = "att_type";
$proto16["m_srcTableName"] = "contrato_attached_ov";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "nom_doc",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto18["m_sql"] = "nom_doc";
$proto18["m_srcTableName"] = "contrato_attached_ov";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "att_cod",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto20["m_sql"] = "att_cod";
$proto20["m_srcTableName"] = "contrato_attached_ov";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "att_file",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto22["m_sql"] = "att_file";
$proto22["m_srcTableName"] = "contrato_attached_ov";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto24["m_sql"] = "sys_user";
$proto24["m_srcTableName"] = "contrato_attached_ov";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto26["m_sql"] = "sys_date";
$proto26["m_srcTableName"] = "contrato_attached_ov";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_time",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto28["m_sql"] = "sys_time";
$proto28["m_srcTableName"] = "contrato_attached_ov";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_stat",
	"m_strTable" => "contrato_attached",
	"m_srcTableName" => "contrato_attached_ov"
));

$proto30["m_sql"] = "sys_stat";
$proto30["m_srcTableName"] = "contrato_attached_ov";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "contrato_attached";
$proto33["m_srcTableName"] = "contrato_attached_ov";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "id_att";
$proto33["m_columns"][] = "id_cont_fk";
$proto33["m_columns"][] = "cont_pre";
$proto33["m_columns"][] = "cont_num";
$proto33["m_columns"][] = "cont_vigencia";
$proto33["m_columns"][] = "att_type";
$proto33["m_columns"][] = "nom_doc";
$proto33["m_columns"][] = "att_cod";
$proto33["m_columns"][] = "att_file";
$proto33["m_columns"][] = "sys_user";
$proto33["m_columns"][] = "sys_date";
$proto33["m_columns"][] = "sys_time";
$proto33["m_columns"][] = "sys_stat";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "contrato_attached";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "contrato_attached_ov";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_attached_ov";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_attached_ov = createSqlQuery_contrato_attached_ov();


	
												;

													

$tdatacontrato_attached_ov[".sqlquery"] = $queryData_contrato_attached_ov;



include_once(getabspath("include/contrato_attached_ov_events.php"));
$tdatacontrato_attached_ov[".hasEvents"] = true;

?>