<?php
$tdatacontrato_modifica_suspension = array();
$tdatacontrato_modifica_suspension[".searchableFields"] = array();
$tdatacontrato_modifica_suspension[".ShortName"] = "contrato_modifica_suspension";
$tdatacontrato_modifica_suspension[".OwnerID"] = "";
$tdatacontrato_modifica_suspension[".OriginalTable"] = "contrato_modifica";


$tdatacontrato_modifica_suspension[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacontrato_modifica_suspension[".originalPagesByType"] = $tdatacontrato_modifica_suspension[".pagesByType"];
$tdatacontrato_modifica_suspension[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacontrato_modifica_suspension[".originalPages"] = $tdatacontrato_modifica_suspension[".pages"];
$tdatacontrato_modifica_suspension[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacontrato_modifica_suspension[".originalDefaultPages"] = $tdatacontrato_modifica_suspension[".defaultPages"];

//	field labels
$fieldLabelscontrato_modifica_suspension = array();
$fieldToolTipscontrato_modifica_suspension = array();
$pageTitlescontrato_modifica_suspension = array();
$placeHolderscontrato_modifica_suspension = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscontrato_modifica_suspension["Spanish"] = array();
	$fieldToolTipscontrato_modifica_suspension["Spanish"] = array();
	$placeHolderscontrato_modifica_suspension["Spanish"] = array();
	$pageTitlescontrato_modifica_suspension["Spanish"] = array();
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_id"] = "Mod Id";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_id"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_id"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["id_cont_fk"] = "Id Cont Fk";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["id_cont_fk"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["id_cont_fk"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_tipo"] = "Tipo de modificación";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_tipo"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_tipo"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_fecha_suscripcion"] = "Fecha Suscripcion";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_fecha_suscripcion"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_fecha_suscripcion"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_fecha_ini"] = "Fecha inicial";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_fecha_ini"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_fecha_ini"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_fecha_fin"] = "Fecha final";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_fecha_fin"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_fecha_fin"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_observ"] = "Observaciones";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_observ"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_observ"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["mod_valor"] = "Valor";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["mod_valor"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["mod_valor"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["sys_user"] = "Registrado por";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["sys_user"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["sys_user"] = "";
	$fieldLabelscontrato_modifica_suspension["Spanish"]["sys_date"] = "Fecha";
	$fieldToolTipscontrato_modifica_suspension["Spanish"]["sys_date"] = "";
	$placeHolderscontrato_modifica_suspension["Spanish"]["sys_date"] = "";
	if (count($fieldToolTipscontrato_modifica_suspension["Spanish"]))
		$tdatacontrato_modifica_suspension[".isUseToolTips"] = true;
}


	$tdatacontrato_modifica_suspension[".NCSearch"] = true;



$tdatacontrato_modifica_suspension[".shortTableName"] = "contrato_modifica_suspension";
$tdatacontrato_modifica_suspension[".nSecOptions"] = 0;

$tdatacontrato_modifica_suspension[".mainTableOwnerID"] = "";
$tdatacontrato_modifica_suspension[".entityType"] = 1;
$tdatacontrato_modifica_suspension[".connId"] = "dbct_at_localhost";


$tdatacontrato_modifica_suspension[".strOriginalTableName"] = "contrato_modifica";

	



$tdatacontrato_modifica_suspension[".showAddInPopup"] = false;

$tdatacontrato_modifica_suspension[".showEditInPopup"] = false;

$tdatacontrato_modifica_suspension[".showViewInPopup"] = false;

$tdatacontrato_modifica_suspension[".listAjax"] = false;
//	temporary
//$tdatacontrato_modifica_suspension[".listAjax"] = false;

	$tdatacontrato_modifica_suspension[".audit"] = true;

	$tdatacontrato_modifica_suspension[".locking"] = true;


$pages = $tdatacontrato_modifica_suspension[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacontrato_modifica_suspension[".edit"] = true;
	$tdatacontrato_modifica_suspension[".afterEditAction"] = 1;
	$tdatacontrato_modifica_suspension[".closePopupAfterEdit"] = 1;
	$tdatacontrato_modifica_suspension[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacontrato_modifica_suspension[".add"] = true;
$tdatacontrato_modifica_suspension[".afterAddAction"] = 1;
$tdatacontrato_modifica_suspension[".closePopupAfterAdd"] = 1;
$tdatacontrato_modifica_suspension[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacontrato_modifica_suspension[".list"] = true;
}



$tdatacontrato_modifica_suspension[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacontrato_modifica_suspension[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacontrato_modifica_suspension[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacontrato_modifica_suspension[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacontrato_modifica_suspension[".printFriendly"] = true;
}



$tdatacontrato_modifica_suspension[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacontrato_modifica_suspension[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacontrato_modifica_suspension[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacontrato_modifica_suspension[".isUseAjaxSuggest"] = true;



																														

$tdatacontrato_modifica_suspension[".ajaxCodeSnippetAdded"] = false;

$tdatacontrato_modifica_suspension[".buttonsAdded"] = false;

$tdatacontrato_modifica_suspension[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacontrato_modifica_suspension[".isUseTimeForSearch"] = false;


$tdatacontrato_modifica_suspension[".badgeColor"] = "2f4f4f";


$tdatacontrato_modifica_suspension[".allSearchFields"] = array();
$tdatacontrato_modifica_suspension[".filterFields"] = array();
$tdatacontrato_modifica_suspension[".requiredSearchFields"] = array();

$tdatacontrato_modifica_suspension[".googleLikeFields"] = array();
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_id";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "id_cont_fk";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_tipo";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_fecha_suscripcion";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_fecha_ini";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_fecha_fin";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_observ";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "mod_valor";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "sys_user";
$tdatacontrato_modifica_suspension[".googleLikeFields"][] = "sys_date";



$tdatacontrato_modifica_suspension[".tableType"] = "list";

$tdatacontrato_modifica_suspension[".printerPageOrientation"] = 0;
$tdatacontrato_modifica_suspension[".nPrinterPageScale"] = 100;

$tdatacontrato_modifica_suspension[".nPrinterSplitRecords"] = 40;

$tdatacontrato_modifica_suspension[".geocodingEnabled"] = false;










$tdatacontrato_modifica_suspension[".pageSize"] = 20;

$tdatacontrato_modifica_suspension[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacontrato_modifica_suspension[".strOrderBy"] = $tstrOrderBy;

$tdatacontrato_modifica_suspension[".orderindexes"] = array();


$tdatacontrato_modifica_suspension[".sqlHead"] = "SELECT mod_id,  id_cont_fk,  mod_tipo,  mod_fecha_suscripcion,  mod_fecha_ini,  mod_fecha_fin,  mod_observ,  mod_valor,  sys_user,  sys_date";
$tdatacontrato_modifica_suspension[".sqlFrom"] = "FROM contrato_modifica";
$tdatacontrato_modifica_suspension[".sqlWhereExpr"] = "(mod_tipo = 3)";
$tdatacontrato_modifica_suspension[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacontrato_modifica_suspension[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacontrato_modifica_suspension[".arrGroupsPerPage"] = $arrGPP;

$tdatacontrato_modifica_suspension[".highlightSearchResults"] = true;

$tableKeyscontrato_modifica_suspension = array();
$tableKeyscontrato_modifica_suspension[] = "mod_id";
$tdatacontrato_modifica_suspension[".Keys"] = $tableKeyscontrato_modifica_suspension;


$tdatacontrato_modifica_suspension[".hideMobileList"] = array();




//	mod_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mod_id";
	$fdata["GoodName"] = "mod_id";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "mod_id";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_id";

	
	
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


	$tdatacontrato_modifica_suspension["mod_id"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_id";
//	id_cont_fk
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "id_cont_fk";
	$fdata["GoodName"] = "id_cont_fk";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","id_cont_fk");
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


	$tdatacontrato_modifica_suspension["id_cont_fk"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "id_cont_fk";
//	mod_tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mod_tipo";
	$fdata["GoodName"] = "mod_tipo";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_tipo");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "mod_tipo";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_tipo";

	
	
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
	$edata["LookupTable"] = "contrato_modifica_type";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "modt_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "modt_name";

				$edata["LookupWhere"] = "modt_grupo = 4";


	
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


	$tdatacontrato_modifica_suspension["mod_tipo"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_tipo";
//	mod_fecha_suscripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mod_fecha_suscripcion";
	$fdata["GoodName"] = "mod_fecha_suscripcion";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_fecha_suscripcion");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "mod_fecha_suscripcion";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_fecha_suscripcion";

	
	
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
	$edata["InitialYearFactor"] = 0;
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


	$tdatacontrato_modifica_suspension["mod_fecha_suscripcion"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_fecha_suscripcion";
//	mod_fecha_ini
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "mod_fecha_ini";
	$fdata["GoodName"] = "mod_fecha_ini";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_fecha_ini");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "mod_fecha_ini";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_fecha_ini";

	
	
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
	$edata["InitialYearFactor"] = 0;
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


	$tdatacontrato_modifica_suspension["mod_fecha_ini"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_fecha_ini";
//	mod_fecha_fin
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mod_fecha_fin";
	$fdata["GoodName"] = "mod_fecha_fin";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_fecha_fin");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "mod_fecha_fin";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_fecha_fin";

	
	
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
	$edata["InitialYearFactor"] = 0;
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


	$tdatacontrato_modifica_suspension["mod_fecha_fin"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_fecha_fin";
//	mod_observ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "mod_observ";
	$fdata["GoodName"] = "mod_observ";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_observ");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mod_observ";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_observ";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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


	$tdatacontrato_modifica_suspension["mod_observ"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_observ";
//	mod_valor
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "mod_valor";
	$fdata["GoodName"] = "mod_valor";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","mod_valor");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "mod_valor";

	
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mod_valor";

	
	
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


	$tdatacontrato_modifica_suspension["mod_valor"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "mod_valor";
//	sys_user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "sys_user";
	$fdata["GoodName"] = "sys_user";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","sys_user");
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


	$tdatacontrato_modifica_suspension["sys_user"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "sys_user";
//	sys_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sys_date";
	$fdata["GoodName"] = "sys_date";
	$fdata["ownerTable"] = "contrato_modifica";
	$fdata["Label"] = GetFieldLabel("contrato_modifica_suspension","sys_date");
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


	$tdatacontrato_modifica_suspension["sys_date"] = $fdata;
		$tdatacontrato_modifica_suspension[".searchableFields"][] = "sys_date";


$tables_data["contrato_modifica_suspension"]=&$tdatacontrato_modifica_suspension;
$field_labels["contrato_modifica_suspension"] = &$fieldLabelscontrato_modifica_suspension;
$fieldToolTips["contrato_modifica_suspension"] = &$fieldToolTipscontrato_modifica_suspension;
$placeHolders["contrato_modifica_suspension"] = &$placeHolderscontrato_modifica_suspension;
$page_titles["contrato_modifica_suspension"] = &$pageTitlescontrato_modifica_suspension;


changeTextControlsToDate( "contrato_modifica_suspension" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["contrato_modifica_suspension"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["contrato_modifica_suspension"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="contrato";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="contrato";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "contrato";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["contrato_modifica_suspension"][0] = $masterParams;
				$masterTablesData["contrato_modifica_suspension"][0]["masterKeys"] = array();
	$masterTablesData["contrato_modifica_suspension"][0]["masterKeys"][]="id_cont";
				$masterTablesData["contrato_modifica_suspension"][0]["detailKeys"] = array();
	$masterTablesData["contrato_modifica_suspension"][0]["detailKeys"][]="id_cont_fk";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_contrato_modifica_suspension()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mod_id,  id_cont_fk,  mod_tipo,  mod_fecha_suscripcion,  mod_fecha_ini,  mod_fecha_fin,  mod_observ,  mod_valor,  sys_user,  sys_date";
$proto0["m_strFrom"] = "FROM contrato_modifica";
$proto0["m_strWhere"] = "(mod_tipo = 3)";
$proto0["m_strOrderBy"] = "";
	
												;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "mod_tipo = 3";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "mod_tipo",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "= 3";
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
	"m_strName" => "mod_id",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto6["m_sql"] = "mod_id";
$proto6["m_srcTableName"] = "contrato_modifica_suspension";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "id_cont_fk",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto8["m_sql"] = "id_cont_fk";
$proto8["m_srcTableName"] = "contrato_modifica_suspension";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_tipo",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto10["m_sql"] = "mod_tipo";
$proto10["m_srcTableName"] = "contrato_modifica_suspension";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_suscripcion",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto12["m_sql"] = "mod_fecha_suscripcion";
$proto12["m_srcTableName"] = "contrato_modifica_suspension";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_ini",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto14["m_sql"] = "mod_fecha_ini";
$proto14["m_srcTableName"] = "contrato_modifica_suspension";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_fecha_fin",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto16["m_sql"] = "mod_fecha_fin";
$proto16["m_srcTableName"] = "contrato_modifica_suspension";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_observ",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto18["m_sql"] = "mod_observ";
$proto18["m_srcTableName"] = "contrato_modifica_suspension";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "mod_valor",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto20["m_sql"] = "mod_valor";
$proto20["m_srcTableName"] = "contrato_modifica_suspension";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_user",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto22["m_sql"] = "sys_user";
$proto22["m_srcTableName"] = "contrato_modifica_suspension";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sys_date",
	"m_strTable" => "contrato_modifica",
	"m_srcTableName" => "contrato_modifica_suspension"
));

$proto24["m_sql"] = "sys_date";
$proto24["m_srcTableName"] = "contrato_modifica_suspension";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "contrato_modifica";
$proto27["m_srcTableName"] = "contrato_modifica_suspension";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "mod_id";
$proto27["m_columns"][] = "id_cont_fk";
$proto27["m_columns"][] = "mod_tipo";
$proto27["m_columns"][] = "mod_fecha_suscripcion";
$proto27["m_columns"][] = "mod_fecha_ini";
$proto27["m_columns"][] = "mod_fecha_fin";
$proto27["m_columns"][] = "mod_observ";
$proto27["m_columns"][] = "mod_valor";
$proto27["m_columns"][] = "mod_cedente";
$proto27["m_columns"][] = "mod_decente_cedula";
$proto27["m_columns"][] = "mod_cesionario";
$proto27["m_columns"][] = "mod_cesionario_cedula";
$proto27["m_columns"][] = "sys_user";
$proto27["m_columns"][] = "sys_date";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "contrato_modifica";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "contrato_modifica_suspension";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="contrato_modifica_suspension";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_contrato_modifica_suspension = createSqlQuery_contrato_modifica_suspension();


	
												;

										

$tdatacontrato_modifica_suspension[".sqlquery"] = $queryData_contrato_modifica_suspension;



$tdatacontrato_modifica_suspension[".hasEvents"] = false;

?>