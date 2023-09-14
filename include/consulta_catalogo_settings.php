<?php
$tdataconsulta_catalogo = array();
$tdataconsulta_catalogo[".searchableFields"] = array();
$tdataconsulta_catalogo[".ShortName"] = "consulta_catalogo";
$tdataconsulta_catalogo[".OwnerID"] = "";
$tdataconsulta_catalogo[".OriginalTable"] = "005_catalogo";


$tdataconsulta_catalogo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsulta_catalogo[".originalPagesByType"] = $tdataconsulta_catalogo[".pagesByType"];
$tdataconsulta_catalogo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsulta_catalogo[".originalPages"] = $tdataconsulta_catalogo[".pages"];
$tdataconsulta_catalogo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsulta_catalogo[".originalDefaultPages"] = $tdataconsulta_catalogo[".defaultPages"];

//	field labels
$fieldLabelsconsulta_catalogo = array();
$fieldToolTipsconsulta_catalogo = array();
$pageTitlesconsulta_catalogo = array();
$placeHoldersconsulta_catalogo = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_catalogo["Spanish"] = array();
	$fieldToolTipsconsulta_catalogo["Spanish"] = array();
	$placeHoldersconsulta_catalogo["Spanish"] = array();
	$pageTitlesconsulta_catalogo["Spanish"] = array();
	$fieldLabelsconsulta_catalogo["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsconsulta_catalogo["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersconsulta_catalogo["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsconsulta_catalogo["Spanish"]["Id"] = "Id";
	$fieldToolTipsconsulta_catalogo["Spanish"]["Id"] = "";
	$placeHoldersconsulta_catalogo["Spanish"]["Id"] = "";
	$fieldLabelsconsulta_catalogo["Spanish"]["IDENTIFICACION"] = "IDENTIFICACION";
	$fieldToolTipsconsulta_catalogo["Spanish"]["IDENTIFICACION"] = "";
	$placeHoldersconsulta_catalogo["Spanish"]["IDENTIFICACION"] = "";
	if (count($fieldToolTipsconsulta_catalogo["Spanish"]))
		$tdataconsulta_catalogo[".isUseToolTips"] = true;
}


	$tdataconsulta_catalogo[".NCSearch"] = true;



$tdataconsulta_catalogo[".shortTableName"] = "consulta_catalogo";
$tdataconsulta_catalogo[".nSecOptions"] = 0;

$tdataconsulta_catalogo[".mainTableOwnerID"] = "";
$tdataconsulta_catalogo[".entityType"] = 1;
$tdataconsulta_catalogo[".connId"] = "dbsep_at_127_0_0_1";


$tdataconsulta_catalogo[".strOriginalTableName"] = "005_catalogo";

	



$tdataconsulta_catalogo[".showAddInPopup"] = false;

$tdataconsulta_catalogo[".showEditInPopup"] = false;

$tdataconsulta_catalogo[".showViewInPopup"] = false;

$tdataconsulta_catalogo[".listAjax"] = false;
//	temporary
//$tdataconsulta_catalogo[".listAjax"] = false;

	$tdataconsulta_catalogo[".audit"] = false;

	$tdataconsulta_catalogo[".locking"] = false;


$pages = $tdataconsulta_catalogo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_catalogo[".edit"] = true;
	$tdataconsulta_catalogo[".afterEditAction"] = 1;
	$tdataconsulta_catalogo[".closePopupAfterEdit"] = 1;
	$tdataconsulta_catalogo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_catalogo[".add"] = true;
$tdataconsulta_catalogo[".afterAddAction"] = 1;
$tdataconsulta_catalogo[".closePopupAfterAdd"] = 1;
$tdataconsulta_catalogo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_catalogo[".list"] = true;
}



$tdataconsulta_catalogo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_catalogo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_catalogo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_catalogo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_catalogo[".printFriendly"] = true;
}



$tdataconsulta_catalogo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_catalogo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_catalogo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_catalogo[".isUseAjaxSuggest"] = true;



															

$tdataconsulta_catalogo[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_catalogo[".buttonsAdded"] = false;

$tdataconsulta_catalogo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_catalogo[".isUseTimeForSearch"] = false;


$tdataconsulta_catalogo[".badgeColor"] = "DAA520";


$tdataconsulta_catalogo[".allSearchFields"] = array();
$tdataconsulta_catalogo[".filterFields"] = array();
$tdataconsulta_catalogo[".requiredSearchFields"] = array();

$tdataconsulta_catalogo[".googleLikeFields"] = array();
$tdataconsulta_catalogo[".googleLikeFields"][] = "Id";
$tdataconsulta_catalogo[".googleLikeFields"][] = "IDENTIFICACION";
$tdataconsulta_catalogo[".googleLikeFields"][] = "DESCRIPCION";



$tdataconsulta_catalogo[".tableType"] = "list";

$tdataconsulta_catalogo[".printerPageOrientation"] = 0;
$tdataconsulta_catalogo[".nPrinterPageScale"] = 100;

$tdataconsulta_catalogo[".nPrinterSplitRecords"] = 40;

$tdataconsulta_catalogo[".geocodingEnabled"] = false;










$tdataconsulta_catalogo[".pageSize"] = 20;

$tdataconsulta_catalogo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulta_catalogo[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_catalogo[".orderindexes"] = array();


$tdataconsulta_catalogo[".sqlHead"] = "SELECT Id,  IDENTIFICACION,  DESCRIPCION";
$tdataconsulta_catalogo[".sqlFrom"] = "FROM `005_catalogo`";
$tdataconsulta_catalogo[".sqlWhereExpr"] = "";
$tdataconsulta_catalogo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_catalogo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_catalogo[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_catalogo[".highlightSearchResults"] = true;

$tableKeysconsulta_catalogo = array();
$tableKeysconsulta_catalogo[] = "Id";
$tdataconsulta_catalogo[".Keys"] = $tableKeysconsulta_catalogo;


$tdataconsulta_catalogo[".hideMobileList"] = array();




//	Id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Id";
	$fdata["GoodName"] = "Id";
	$fdata["ownerTable"] = "005_catalogo";
	$fdata["Label"] = GetFieldLabel("consulta_catalogo","Id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Id";

		$fdata["sourceSingle"] = "Id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Id";

	
	
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


	$tdataconsulta_catalogo["Id"] = $fdata;
		$tdataconsulta_catalogo[".searchableFields"][] = "Id";
//	IDENTIFICACION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "IDENTIFICACION";
	$fdata["GoodName"] = "IDENTIFICACION";
	$fdata["ownerTable"] = "005_catalogo";
	$fdata["Label"] = GetFieldLabel("consulta_catalogo","IDENTIFICACION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "IDENTIFICACION";

		$fdata["sourceSingle"] = "IDENTIFICACION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "IDENTIFICACION";

	
	
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


	$tdataconsulta_catalogo["IDENTIFICACION"] = $fdata;
		$tdataconsulta_catalogo[".searchableFields"][] = "IDENTIFICACION";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "005_catalogo";
	$fdata["Label"] = GetFieldLabel("consulta_catalogo","DESCRIPCION");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "DESCRIPCION";

		$fdata["sourceSingle"] = "DESCRIPCION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DESCRIPCION";

	
	
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


	$tdataconsulta_catalogo["DESCRIPCION"] = $fdata;
		$tdataconsulta_catalogo[".searchableFields"][] = "DESCRIPCION";


$tables_data["consulta_catalogo"]=&$tdataconsulta_catalogo;
$field_labels["consulta_catalogo"] = &$fieldLabelsconsulta_catalogo;
$fieldToolTips["consulta_catalogo"] = &$fieldToolTipsconsulta_catalogo;
$placeHolders["consulta_catalogo"] = &$placeHoldersconsulta_catalogo;
$page_titles["consulta_catalogo"] = &$pageTitlesconsulta_catalogo;


changeTextControlsToDate( "consulta_catalogo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["consulta_catalogo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["consulta_catalogo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulta_catalogo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Id,  IDENTIFICACION,  DESCRIPCION";
$proto0["m_strFrom"] = "FROM `005_catalogo`";
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
	"m_strName" => "Id",
	"m_strTable" => "005_catalogo",
	"m_srcTableName" => "consulta_catalogo"
));

$proto6["m_sql"] = "Id";
$proto6["m_srcTableName"] = "consulta_catalogo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "IDENTIFICACION",
	"m_strTable" => "005_catalogo",
	"m_srcTableName" => "consulta_catalogo"
));

$proto8["m_sql"] = "IDENTIFICACION";
$proto8["m_srcTableName"] = "consulta_catalogo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "005_catalogo",
	"m_srcTableName" => "consulta_catalogo"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "consulta_catalogo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "005_catalogo";
$proto13["m_srcTableName"] = "consulta_catalogo";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Id";
$proto13["m_columns"][] = "Tipo Presupuesto";
$proto13["m_columns"][] = "Cuenta / Programa";
$proto13["m_columns"][] = "Subcuenta / Subprograma";
$proto13["m_columns"][] = "Objeto / Proyecto";
$proto13["m_columns"][] = "Ordinal / Subproy";
$proto13["m_columns"][] = "SubOrdinal";
$proto13["m_columns"][] = "Item";
$proto13["m_columns"][] = "SubItem 1";
$proto13["m_columns"][] = "Subitem 2";
$proto13["m_columns"][] = "IDENTIFICACION";
$proto13["m_columns"][] = "DESCRIPCION";
$proto13["m_columns"][] = "Estado";
$proto13["m_columns"][] = "Entidad que desagregó";
$proto13["m_columns"][] = "Afecta Apropiación";
$proto13["m_columns"][] = "Nivel normativo";
$proto13["m_columns"][] = "Requiere Usos Presupuestales";
$proto13["m_columns"][] = "Usos Presupuestales";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`005_catalogo`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "consulta_catalogo";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="consulta_catalogo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulta_catalogo = createSqlQuery_consulta_catalogo();


	
												;

			

$tdataconsulta_catalogo[".sqlquery"] = $queryData_consulta_catalogo;



$tdataconsulta_catalogo[".hasEvents"] = false;

?>