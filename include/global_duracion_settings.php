<?php
$tdataglobal_duracion = array();
$tdataglobal_duracion[".searchableFields"] = array();
$tdataglobal_duracion[".ShortName"] = "global_duracion";
$tdataglobal_duracion[".OwnerID"] = "";
$tdataglobal_duracion[".OriginalTable"] = "global_duracion";


$tdataglobal_duracion[".pagesByType"] = my_json_decode( "{}" );
$tdataglobal_duracion[".originalPagesByType"] = $tdataglobal_duracion[".pagesByType"];
$tdataglobal_duracion[".pages"] = types2pages( my_json_decode( "{}" ) );
$tdataglobal_duracion[".originalPages"] = $tdataglobal_duracion[".pages"];
$tdataglobal_duracion[".defaultPages"] = my_json_decode( "{}" );
$tdataglobal_duracion[".originalDefaultPages"] = $tdataglobal_duracion[".defaultPages"];

//	field labels
$fieldLabelsglobal_duracion = array();
$fieldToolTipsglobal_duracion = array();
$pageTitlesglobal_duracion = array();
$placeHoldersglobal_duracion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsglobal_duracion["Spanish"] = array();
	$fieldToolTipsglobal_duracion["Spanish"] = array();
	$placeHoldersglobal_duracion["Spanish"] = array();
	$pageTitlesglobal_duracion["Spanish"] = array();
	$fieldLabelsglobal_duracion["Spanish"]["COD_DURACION"] = "COD DURACION";
	$fieldToolTipsglobal_duracion["Spanish"]["COD_DURACION"] = "";
	$placeHoldersglobal_duracion["Spanish"]["COD_DURACION"] = "";
	$fieldLabelsglobal_duracion["Spanish"]["NOM_DURACION"] = "NOM DURACION";
	$fieldToolTipsglobal_duracion["Spanish"]["NOM_DURACION"] = "";
	$placeHoldersglobal_duracion["Spanish"]["NOM_DURACION"] = "";
	if (count($fieldToolTipsglobal_duracion["Spanish"]))
		$tdataglobal_duracion[".isUseToolTips"] = true;
}


	$tdataglobal_duracion[".NCSearch"] = true;



$tdataglobal_duracion[".shortTableName"] = "global_duracion";
$tdataglobal_duracion[".nSecOptions"] = 0;

$tdataglobal_duracion[".mainTableOwnerID"] = "";
$tdataglobal_duracion[".entityType"] = 0;
$tdataglobal_duracion[".connId"] = "dbgpaa_at_172_18_0_249";


$tdataglobal_duracion[".strOriginalTableName"] = "global_duracion";

	



$tdataglobal_duracion[".showAddInPopup"] = false;

$tdataglobal_duracion[".showEditInPopup"] = false;

$tdataglobal_duracion[".showViewInPopup"] = false;

$tdataglobal_duracion[".listAjax"] = false;
//	temporary
//$tdataglobal_duracion[".listAjax"] = false;

	$tdataglobal_duracion[".audit"] = true;

	$tdataglobal_duracion[".locking"] = true;


$pages = $tdataglobal_duracion[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataglobal_duracion[".edit"] = true;
	$tdataglobal_duracion[".afterEditAction"] = 1;
	$tdataglobal_duracion[".closePopupAfterEdit"] = 1;
	$tdataglobal_duracion[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataglobal_duracion[".add"] = true;
$tdataglobal_duracion[".afterAddAction"] = 1;
$tdataglobal_duracion[".closePopupAfterAdd"] = 1;
$tdataglobal_duracion[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataglobal_duracion[".list"] = true;
}



$tdataglobal_duracion[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataglobal_duracion[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataglobal_duracion[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataglobal_duracion[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataglobal_duracion[".printFriendly"] = true;
}



$tdataglobal_duracion[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataglobal_duracion[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataglobal_duracion[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataglobal_duracion[".isUseAjaxSuggest"] = true;



															

$tdataglobal_duracion[".ajaxCodeSnippetAdded"] = false;

$tdataglobal_duracion[".buttonsAdded"] = false;

$tdataglobal_duracion[".addPageEvents"] = false;

// use timepicker for search panel
$tdataglobal_duracion[".isUseTimeForSearch"] = false;


$tdataglobal_duracion[".badgeColor"] = "6DA5C8";


$tdataglobal_duracion[".allSearchFields"] = array();
$tdataglobal_duracion[".filterFields"] = array();
$tdataglobal_duracion[".requiredSearchFields"] = array();

$tdataglobal_duracion[".googleLikeFields"] = array();
$tdataglobal_duracion[".googleLikeFields"][] = "COD_DURACION";
$tdataglobal_duracion[".googleLikeFields"][] = "NOM_DURACION";



$tdataglobal_duracion[".tableType"] = "list";

$tdataglobal_duracion[".printerPageOrientation"] = 0;
$tdataglobal_duracion[".nPrinterPageScale"] = 100;

$tdataglobal_duracion[".nPrinterSplitRecords"] = 40;

$tdataglobal_duracion[".geocodingEnabled"] = false;










$tdataglobal_duracion[".pageSize"] = 20;

$tdataglobal_duracion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataglobal_duracion[".strOrderBy"] = $tstrOrderBy;

$tdataglobal_duracion[".orderindexes"] = array();


$tdataglobal_duracion[".sqlHead"] = "SELECT COD_DURACION,  	NOM_DURACION";
$tdataglobal_duracion[".sqlFrom"] = "FROM global_duracion";
$tdataglobal_duracion[".sqlWhereExpr"] = "";
$tdataglobal_duracion[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataglobal_duracion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataglobal_duracion[".arrGroupsPerPage"] = $arrGPP;

$tdataglobal_duracion[".highlightSearchResults"] = true;

$tableKeysglobal_duracion = array();
$tableKeysglobal_duracion[] = "COD_DURACION";
$tdataglobal_duracion[".Keys"] = $tableKeysglobal_duracion;


$tdataglobal_duracion[".hideMobileList"] = array();




//	COD_DURACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "COD_DURACION";
	$fdata["GoodName"] = "COD_DURACION";
	$fdata["ownerTable"] = "global_duracion";
	$fdata["Label"] = GetFieldLabel("global_duracion","COD_DURACION");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "COD_DURACION";

		$fdata["sourceSingle"] = "COD_DURACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COD_DURACION";

	
	
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


	$tdataglobal_duracion["COD_DURACION"] = $fdata;
		$tdataglobal_duracion[".searchableFields"][] = "COD_DURACION";
//	NOM_DURACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "NOM_DURACION";
	$fdata["GoodName"] = "NOM_DURACION";
	$fdata["ownerTable"] = "global_duracion";
	$fdata["Label"] = GetFieldLabel("global_duracion","NOM_DURACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NOM_DURACION";

		$fdata["sourceSingle"] = "NOM_DURACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NOM_DURACION";

	
	
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


	$tdataglobal_duracion["NOM_DURACION"] = $fdata;
		$tdataglobal_duracion[".searchableFields"][] = "NOM_DURACION";


$tables_data["global_duracion"]=&$tdataglobal_duracion;
$field_labels["global_duracion"] = &$fieldLabelsglobal_duracion;
$fieldToolTips["global_duracion"] = &$fieldToolTipsglobal_duracion;
$placeHolders["global_duracion"] = &$placeHoldersglobal_duracion;
$page_titles["global_duracion"] = &$pageTitlesglobal_duracion;


changeTextControlsToDate( "global_duracion" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["global_duracion"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["global_duracion"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_global_duracion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "COD_DURACION,  	NOM_DURACION";
$proto0["m_strFrom"] = "FROM global_duracion";
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
	"m_strName" => "COD_DURACION",
	"m_strTable" => "global_duracion",
	"m_srcTableName" => "global_duracion"
));

$proto6["m_sql"] = "COD_DURACION";
$proto6["m_srcTableName"] = "global_duracion";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "NOM_DURACION",
	"m_strTable" => "global_duracion",
	"m_srcTableName" => "global_duracion"
));

$proto8["m_sql"] = "NOM_DURACION";
$proto8["m_srcTableName"] = "global_duracion";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "global_duracion";
$proto11["m_srcTableName"] = "global_duracion";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "COD_DURACION";
$proto11["m_columns"][] = "NOM_DURACION";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "global_duracion";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "global_duracion";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="global_duracion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_global_duracion = createSqlQuery_global_duracion();


	
												;

		

$tdataglobal_duracion[".sqlquery"] = $queryData_global_duracion;



$tdataglobal_duracion[".hasEvents"] = false;

?>