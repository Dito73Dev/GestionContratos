<?php
$tdatainterventor_interno = array();
$tdatainterventor_interno[".searchableFields"] = array();
$tdatainterventor_interno[".ShortName"] = "interventor_interno";
$tdatainterventor_interno[".OwnerID"] = "";
$tdatainterventor_interno[".OriginalTable"] = "interventor_interno";


$tdatainterventor_interno[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatainterventor_interno[".originalPagesByType"] = $tdatainterventor_interno[".pagesByType"];
$tdatainterventor_interno[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatainterventor_interno[".originalPages"] = $tdatainterventor_interno[".pages"];
$tdatainterventor_interno[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatainterventor_interno[".originalDefaultPages"] = $tdatainterventor_interno[".defaultPages"];

//	field labels
$fieldLabelsinterventor_interno = array();
$fieldToolTipsinterventor_interno = array();
$pageTitlesinterventor_interno = array();
$placeHoldersinterventor_interno = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsinterventor_interno["Spanish"] = array();
	$fieldToolTipsinterventor_interno["Spanish"] = array();
	$placeHoldersinterventor_interno["Spanish"] = array();
	$pageTitlesinterventor_interno["Spanish"] = array();
	$fieldLabelsinterventor_interno["Spanish"]["interventor_id"] = "Interventor Id";
	$fieldToolTipsinterventor_interno["Spanish"]["interventor_id"] = "";
	$placeHoldersinterventor_interno["Spanish"]["interventor_id"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["id_cont_fk"] = "Número interno";
	$fieldToolTipsinterventor_interno["Spanish"]["id_cont_fk"] = "";
	$placeHoldersinterventor_interno["Spanish"]["id_cont_fk"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["cont_hash_fk"] = "Hash";
	$fieldToolTipsinterventor_interno["Spanish"]["cont_hash_fk"] = "";
	$placeHoldersinterventor_interno["Spanish"]["cont_hash_fk"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["idusrglobal_fk"] = "Supervisor";
	$fieldToolTipsinterventor_interno["Spanish"]["idusrglobal_fk"] = "Escriba el nombre del supervisor";
	$placeHoldersinterventor_interno["Spanish"]["idusrglobal_fk"] = "Escriba el nombre del supervisor";
	$fieldLabelsinterventor_interno["Spanish"]["sys_date"] = "Fecha";
	$fieldToolTipsinterventor_interno["Spanish"]["sys_date"] = "";
	$placeHoldersinterventor_interno["Spanish"]["sys_date"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["sys_user"] = "Usuario";
	$fieldToolTipsinterventor_interno["Spanish"]["sys_user"] = "";
	$placeHoldersinterventor_interno["Spanish"]["sys_user"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["sup_status"] = "Estado de vinculación";
	$fieldToolTipsinterventor_interno["Spanish"]["sup_status"] = "";
	$placeHoldersinterventor_interno["Spanish"]["sup_status"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["sup_fechanot"] = "Fecha notificación";
	$fieldToolTipsinterventor_interno["Spanish"]["sup_fechanot"] = "";
	$placeHoldersinterventor_interno["Spanish"]["sup_fechanot"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["sup_mailnot"] = "Email notificación";
	$fieldToolTipsinterventor_interno["Spanish"]["sup_mailnot"] = "";
	$placeHoldersinterventor_interno["Spanish"]["sup_mailnot"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["documento_id"] = "Documento";
	$fieldToolTipsinterventor_interno["Spanish"]["documento_id"] = "";
	$placeHoldersinterventor_interno["Spanish"]["documento_id"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["nombres"] = "Nombres";
	$fieldToolTipsinterventor_interno["Spanish"]["nombres"] = "";
	$placeHoldersinterventor_interno["Spanish"]["nombres"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["apellidos"] = "Apellidos";
	$fieldToolTipsinterventor_interno["Spanish"]["apellidos"] = "";
	$placeHoldersinterventor_interno["Spanish"]["apellidos"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["cargo_id"] = "Cargo";
	$fieldToolTipsinterventor_interno["Spanish"]["cargo_id"] = "";
	$placeHoldersinterventor_interno["Spanish"]["cargo_id"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["dependencia_id"] = "Dependencia";
	$fieldToolTipsinterventor_interno["Spanish"]["dependencia_id"] = "";
	$placeHoldersinterventor_interno["Spanish"]["dependencia_id"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["fecha_inicio"] = "Fecha inicio de supervisión";
	$fieldToolTipsinterventor_interno["Spanish"]["fecha_inicio"] = "";
	$placeHoldersinterventor_interno["Spanish"]["fecha_inicio"] = "";
	$fieldLabelsinterventor_interno["Spanish"]["fecha_fin"] = "Fecha final de supervisión";
	$fieldToolTipsinterventor_interno["Spanish"]["fecha_fin"] = "";
	$placeHoldersinterventor_interno["Spanish"]["fecha_fin"] = "";
	if (count($fieldToolTipsinterventor_interno["Spanish"]))
		$tdatainterventor_interno[".isUseToolTips"] = true;
}


	$tdatainterventor_interno[".NCSearch"] = true;



$tdatainterventor_interno[".shortTableName"] = "interventor_interno";
$tdatainterventor_interno[".nSecOptions"] = 0;

$tdatainterventor_interno[".mainTableOwnerID"] = "";
$tdatainterventor_interno[".entityType"] = 0;
$tdatainterventor_interno[".connId"] = "dbct_at_localhost";


$tdatainterventor_interno[".strOriginalTableName"] = "interventor_interno";

	



$tdatainterventor_interno[".showAddInPopup"] = false;

$tdatainterventor_interno[".showEditInPopup"] = false;

$tdatainterventor_interno[".showViewInPopup"] = false;

$tdatainterventor_interno[".listAjax"] = false;
//	temporary
//$tdatainterventor_interno[".listAjax"] = false;

	$tdatainterventor_interno[".audit"] = true;

	$tdatainterventor_interno[".locking"] = true;


$pages = $tdatainterventor_interno[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatainterventor_interno[".edit"] = true;
	$tdatainterventor_interno[".afterEditAction"] = 1;
	$tdatainterventor_interno[".closePopupAfterEdit"] = 1;
	$tdatainterventor_interno[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatainterventor_interno[".add"] = true;
$tdatainterventor_interno[".afterAddAction"] = 1;
$tdatainterventor_interno[".closePopupAfterAdd"] = 1;
$tdatainterventor_interno[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatainterventor_interno[".list"] = true;
}



$tdatainterventor_interno[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatainterventor_interno[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatainterventor_interno[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatainterventor_interno[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatainterventor_interno[".printFriendly"] = true;
}



$tdatainterventor_interno[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatainterventor_interno[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatainterventor_interno[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatainterventor_interno[".isUseAjaxSuggest"] = true;



																																													

$tdatainterventor_interno[".ajaxCodeSnippetAdded"] = false;

$tdatainterventor_interno[".buttonsAdded"] = false;

$tdatainterventor_interno[".addPageEvents"] = false;

// use timepicker for search panel
$tdatainterventor_interno[".isUseTimeForSearch"] = false;


$tdatainterventor_interno[".badgeColor"] = "5f9ea0";


$tdatainterventor_interno[".allSearchFields"] = array();
$tdatainterventor_interno[".filterFields"] = array();
$tdatainterventor_interno[".requiredSearchFields"] = array();

$tdatainterventor_interno[".googleLikeFields"] = array();
$tdatainterventor_interno[".googleLikeFields"][] = "interventor_id";
$tdatainterventor_interno[".googleLikeFields"][] = "id_cont_fk";
$tdatainterventor_interno[".googleLikeFields"][] = "cont_hash_fk";
$tdatainterventor_interno[".googleLikeFields"][] = "idusrglobal_fk";
$tdatainterventor_interno[".googleLikeFields"][] = "documento_id";
$tdatainterventor_interno[".googleLikeFields"][] = "nombres";
$tdatainterventor_interno[".googleLikeFields"][] = "apellidos";
$tdatainterventor_interno[".googleLikeFields"][] = "cargo_id";
$tdatainterventor_interno[".googleLikeFields"][] = "dependencia_id";
$tdatainterventor_interno[".googleLikeFields"][] = "sys_date";
$tdatainterventor_interno[".googleLikeFields"][] = "sys_user";
$tdatainterventor_interno[".googleLikeFields"][] = "sup_status";
$tdatainterventor_interno[".googleLikeFields"][] = "sup_fechanot";
$tdatainterventor_interno[".googleLikeFields"][] = "sup_mailnot";
$tdatainterventor_interno[".googleLikeFields"][] = "fecha_inicio";
$tdatainterventor_interno[".googleLikeFields"][] = "fecha_fin";



$tdatainterventor_interno[".tableType"] = "list";

$tdatainterventor_interno[".printerPageOrientation"] = 0;
$tdatainterventor_interno[".nPrinterPageScale"] = 100;

$tdatainterventor_interno[".nPrinterSplitRecords"] = 40;

$tdatainterventor_interno[".geocodingEnabled"] = false;










$tdatainterventor_interno[".pageSize"] = 20;

$tdatainterventor_interno[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatainterventor_interno[".strOrderBy"] = $tstrOrderBy;

$tdatainterventor_interno[".orderindexes"] = array();


$tdatainterventor_interno[".sqlHead"] = "SELECT interventor_id,  id_cont_fk,  cont_hash_fk,  idusrglobal_fk,  documento_id,  nombres,  apellidos,  cargo_id,  dependencia_id,  sys_date,  sys_user,  sup_status,  sup_fechanot,  sup_mailnot,  fecha_inicio,  fecha_fin";
$tdatainterventor_interno[".sqlFrom"] = "FROM interventor_interno";
$tdatainterventor_interno[".sqlWhereExpr"] = "";
$tdatainterventor_interno[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatainterventor_interno[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatainterventor_interno[".arrGroupsPerPage"] = $arrGPP;

$tdatainterventor_interno[".highlightSearchResults"] = true;

$tableKeysinterventor_interno = array();
$tableKeysinterventor_interno[] = "interventor_id";
$tdatainterventor_interno[".Keys"] = $tableKeysinterventor_interno;


$tdatainterventor_interno[".hideMobileList"] = array();




//	interventor_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "interventor_id";
	$fdata["GoodName"] = "interventor_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","interventor_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "interventor_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "interventor_id";

	
	
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


	$tdatainterventor_interno["interventor_id"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "interventor_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","id_cont_fk");
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


	$tdatainterventor_interno["id_cont_fk"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "id_cont_fk";
//	cont_hash_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "cont_hash_fk";
	$fdata["GoodName"] = "cont_hash_fk";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","cont_hash_fk");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "cont_hash_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cont_hash_fk";

	
	
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


	$tdatainterventor_interno["cont_hash_fk"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "cont_hash_fk";
//	idusrglobal_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "idusrglobal_fk";
	$fdata["GoodName"] = "idusrglobal_fk";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","idusrglobal_fk");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "idusrglobal_fk";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "idusrglobal_fk";

	
	
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
	$edata["LookupTable"] = "global_users_sup";
		$edata["listPageId"] = "list";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"documento_id", 'lookupF'=>"usr_personalid");
	$edata["autoCompleteFields"][] = array('masterF'=>"nombres", 'lookupF'=>"usr_name");
	$edata["autoCompleteFields"][] = array('masterF'=>"apellidos", 'lookupF'=>"usr_lname");
	$edata["autoCompleteFields"][] = array('masterF'=>"cargo_id", 'lookupF'=>"usr_cargo");
	$edata["autoCompleteFields"][] = array('masterF'=>"dependencia_id", 'lookupF'=>"usr_dep");
	$edata["autoCompleteFields"][] = array('masterF'=>"sup_mailnot", 'lookupF'=>"usr_email");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "idusrglobal";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "usr_nombresfull";

	

	
	$edata["LookupOrderBy"] = "usr_nombresfull";

	
	
	
	

	
	
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


	$tdatainterventor_interno["idusrglobal_fk"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "idusrglobal_fk";
//	documento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "documento_id";
	$fdata["GoodName"] = "documento_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","documento_id");
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


	$tdatainterventor_interno["documento_id"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "documento_id";
//	nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nombres";
	$fdata["GoodName"] = "nombres";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","nombres");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nombres";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombres";

	
	
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


	$tdatainterventor_interno["nombres"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "nombres";
//	apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "apellidos";
	$fdata["GoodName"] = "apellidos";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","apellidos");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "apellidos";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "apellidos";

	
	
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


	$tdatainterventor_interno["apellidos"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "apellidos";
//	cargo_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "cargo_id";
	$fdata["GoodName"] = "cargo_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","cargo_id");
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


	$tdatainterventor_interno["cargo_id"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "cargo_id";
//	dependencia_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "dependencia_id";
	$fdata["GoodName"] = "dependencia_id";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","dependencia_id");
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


	$tdatainterventor_interno["dependencia_id"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "dependencia_id";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","sys_date");
	$fdata["FieldType"] = 7;


	
	
			

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

	$edata = array("EditFormat" => "Readonly");

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
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


	$tdatainterventor_interno["sys_date"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "sys_date";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","sys_user");
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


	$tdatainterventor_interno["sys_user"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "sys_user";
//	sup_status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "sup_status";
	$fdata["GoodName"] = "sup_status";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","sup_status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "sup_status";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_status";

	
	
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
	$edata["LookupTable"] = "tparam_habilita";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;

		$edata["HorizontalLookup"] = true;

		
	$edata["LinkField"] = "habilitado_id";
	$edata["LinkFieldType"] = 16;
	$edata["DisplayField"] = "habilitado_name";

	

	
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


	$tdatainterventor_interno["sup_status"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "sup_status";
//	sup_fechanot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "sup_fechanot";
	$fdata["GoodName"] = "sup_fechanot";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","sup_fechanot");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "sup_fechanot";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sup_fechanot";

	
	
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


	$tdatainterventor_interno["sup_fechanot"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "sup_fechanot";
//	sup_mailnot
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "sup_mailnot";
	$fdata["GoodName"] = "sup_mailnot";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","sup_mailnot");
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


	$tdatainterventor_interno["sup_mailnot"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "sup_mailnot";
//	fecha_inicio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "fecha_inicio";
	$fdata["GoodName"] = "fecha_inicio";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","fecha_inicio");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_inicio";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_inicio";

	
	
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


	$tdatainterventor_interno["fecha_inicio"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "fecha_inicio";
//	fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "fecha_fin";
	$fdata["GoodName"] = "fecha_fin";
	$fdata["ownerTable"] = "interventor_interno";
	$fdata["Label"] = GetFieldLabel("interventor_interno","fecha_fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "fecha_fin";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fecha_fin";

	
	
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


	$tdatainterventor_interno["fecha_fin"] = $fdata;
		$tdatainterventor_interno[".searchableFields"][] = "fecha_fin";


$tables_data["interventor_interno"]=&$tdatainterventor_interno;
$field_labels["interventor_interno"] = &$fieldLabelsinterventor_interno;
$fieldToolTips["interventor_interno"] = &$fieldToolTipsinterventor_interno;
$placeHolders["interventor_interno"] = &$placeHoldersinterventor_interno;
$page_titles["interventor_interno"] = &$pageTitlesinterventor_interno;


changeTextControlsToDate( "interventor_interno" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["interventor_interno"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["interventor_interno"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["interventor_interno"][0] = $masterParams;
				$masterTablesData["interventor_interno"][0]["masterKeys"] = array();
	$masterTablesData["interventor_interno"][0]["masterKeys"][]="id_cont";
				$masterTablesData["interventor_interno"][0]["detailKeys"] = array();
	$masterTablesData["interventor_interno"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato_audit";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato_audit";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["interventor_interno"][1] = $masterParams;
				$masterTablesData["interventor_interno"][1]["masterKeys"] = array();
	$masterTablesData["interventor_interno"][1]["masterKeys"][]="id_cont";
				$masterTablesData["interventor_interno"][1]["detailKeys"] = array();
	$masterTablesData["interventor_interno"][1]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_interventor_interno()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "interventor_id,  id_cont_fk,  cont_hash_fk,  idusrglobal_fk,  documento_id,  nombres,  apellidos,  cargo_id,  dependencia_id,  sys_date,  sys_user,  sup_status,  sup_fechanot,  sup_mailnot,  fecha_inicio,  fecha_fin";
$proto0["m_strFrom"] = "FROM interventor_interno";
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
	"m_strName" => "interventor_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto6["m_sql"] = "interventor_id";
$proto6["m_srcTableName"] = "interventor_interno";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "interventor_interno";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "cont_hash_fk",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto10["m_sql"] = "cont_hash_fk";
$proto10["m_srcTableName"] = "interventor_interno";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "idusrglobal_fk",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto12["m_sql"] = "idusrglobal_fk";
$proto12["m_srcTableName"] = "interventor_interno";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "documento_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto14["m_sql"] = "documento_id";
$proto14["m_srcTableName"] = "interventor_interno";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "nombres",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto16["m_sql"] = "nombres";
$proto16["m_srcTableName"] = "interventor_interno";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "apellidos",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto18["m_sql"] = "apellidos";
$proto18["m_srcTableName"] = "interventor_interno";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "cargo_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto20["m_sql"] = "cargo_id";
$proto20["m_srcTableName"] = "interventor_interno";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "dependencia_id",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto22["m_sql"] = "dependencia_id";
$proto22["m_srcTableName"] = "interventor_interno";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto24["m_sql"] = "sys_date";
$proto24["m_srcTableName"] = "interventor_interno";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto26["m_sql"] = "sys_user";
$proto26["m_srcTableName"] = "interventor_interno";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_status",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto28["m_sql"] = "sup_status";
$proto28["m_srcTableName"] = "interventor_interno";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_fechanot",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto30["m_sql"] = "sup_fechanot";
$proto30["m_srcTableName"] = "interventor_interno";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "sup_mailnot",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto32["m_sql"] = "sup_mailnot";
$proto32["m_srcTableName"] = "interventor_interno";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_inicio",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto34["m_sql"] = "fecha_inicio";
$proto34["m_srcTableName"] = "interventor_interno";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "fecha_fin",
	"m_strTable" => "interventor_interno",
	"m_srcTableName" => "interventor_interno"
));

$proto36["m_sql"] = "fecha_fin";
$proto36["m_srcTableName"] = "interventor_interno";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "interventor_interno";
$proto39["m_srcTableName"] = "interventor_interno";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "interventor_id";
$proto39["m_columns"][] = "id_cont_fk";
$proto39["m_columns"][] = "cont_hash_fk";
$proto39["m_columns"][] = "idusrglobal_fk";
$proto39["m_columns"][] = "documento_id";
$proto39["m_columns"][] = "nombres";
$proto39["m_columns"][] = "apellidos";
$proto39["m_columns"][] = "cargo_id";
$proto39["m_columns"][] = "dependencia_id";
$proto39["m_columns"][] = "sys_date";
$proto39["m_columns"][] = "sys_time";
$proto39["m_columns"][] = "sys_user";
$proto39["m_columns"][] = "sup_status";
$proto39["m_columns"][] = "sup_fechanot";
$proto39["m_columns"][] = "sup_horanot";
$proto39["m_columns"][] = "sup_mailnot";
$proto39["m_columns"][] = "sup_fechanot2";
$proto39["m_columns"][] = "sup_mailnot2";
$proto39["m_columns"][] = "fecha_inicio";
$proto39["m_columns"][] = "fecha_fin";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "interventor_interno";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "interventor_interno";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="interventor_interno";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_interventor_interno = createSqlQuery_interventor_interno();


	
												;

																

$tdatainterventor_interno[".sqlquery"] = $queryData_interventor_interno;



$tdatainterventor_interno[".hasEvents"] = false;

?>