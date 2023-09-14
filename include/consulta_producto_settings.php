<?php
$tdataconsulta_producto = array();
$tdataconsulta_producto[".searchableFields"] = array();
$tdataconsulta_producto[".ShortName"] = "consulta_producto";
$tdataconsulta_producto[".OwnerID"] = "";
$tdataconsulta_producto[".OriginalTable"] = "002_producto";


$tdataconsulta_producto[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataconsulta_producto[".originalPagesByType"] = $tdataconsulta_producto[".pagesByType"];
$tdataconsulta_producto[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataconsulta_producto[".originalPages"] = $tdataconsulta_producto[".pages"];
$tdataconsulta_producto[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataconsulta_producto[".originalDefaultPages"] = $tdataconsulta_producto[".defaultPages"];

//	field labels
$fieldLabelsconsulta_producto = array();
$fieldToolTipsconsulta_producto = array();
$pageTitlesconsulta_producto = array();
$placeHoldersconsulta_producto = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsconsulta_producto["Spanish"] = array();
	$fieldToolTipsconsulta_producto["Spanish"] = array();
	$placeHoldersconsulta_producto["Spanish"] = array();
	$pageTitlesconsulta_producto["Spanish"] = array();
	$fieldLabelsconsulta_producto["Spanish"]["DESCRIPCION"] = "DESCRIPCION";
	$fieldToolTipsconsulta_producto["Spanish"]["DESCRIPCION"] = "";
	$placeHoldersconsulta_producto["Spanish"]["DESCRIPCION"] = "";
	$fieldLabelsconsulta_producto["Spanish"]["PROD_ID"] = "PROD ID";
	$fieldToolTipsconsulta_producto["Spanish"]["PROD_ID"] = "";
	$placeHoldersconsulta_producto["Spanish"]["PROD_ID"] = "";
	$fieldLabelsconsulta_producto["Spanish"]["PRODUCTO"] = "PRODUCTO";
	$fieldToolTipsconsulta_producto["Spanish"]["PRODUCTO"] = "";
	$placeHoldersconsulta_producto["Spanish"]["PRODUCTO"] = "";
	if (count($fieldToolTipsconsulta_producto["Spanish"]))
		$tdataconsulta_producto[".isUseToolTips"] = true;
}


	$tdataconsulta_producto[".NCSearch"] = true;



$tdataconsulta_producto[".shortTableName"] = "consulta_producto";
$tdataconsulta_producto[".nSecOptions"] = 0;

$tdataconsulta_producto[".mainTableOwnerID"] = "";
$tdataconsulta_producto[".entityType"] = 1;
$tdataconsulta_producto[".connId"] = "dbsep_at_127_0_0_1";


$tdataconsulta_producto[".strOriginalTableName"] = "002_producto";

	



$tdataconsulta_producto[".showAddInPopup"] = false;

$tdataconsulta_producto[".showEditInPopup"] = false;

$tdataconsulta_producto[".showViewInPopup"] = false;

$tdataconsulta_producto[".listAjax"] = false;
//	temporary
//$tdataconsulta_producto[".listAjax"] = false;

	$tdataconsulta_producto[".audit"] = false;

	$tdataconsulta_producto[".locking"] = false;


$pages = $tdataconsulta_producto[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataconsulta_producto[".edit"] = true;
	$tdataconsulta_producto[".afterEditAction"] = 1;
	$tdataconsulta_producto[".closePopupAfterEdit"] = 1;
	$tdataconsulta_producto[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataconsulta_producto[".add"] = true;
$tdataconsulta_producto[".afterAddAction"] = 1;
$tdataconsulta_producto[".closePopupAfterAdd"] = 1;
$tdataconsulta_producto[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataconsulta_producto[".list"] = true;
}



$tdataconsulta_producto[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataconsulta_producto[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataconsulta_producto[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataconsulta_producto[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataconsulta_producto[".printFriendly"] = true;
}



$tdataconsulta_producto[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataconsulta_producto[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataconsulta_producto[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataconsulta_producto[".isUseAjaxSuggest"] = true;



															

$tdataconsulta_producto[".ajaxCodeSnippetAdded"] = false;

$tdataconsulta_producto[".buttonsAdded"] = false;

$tdataconsulta_producto[".addPageEvents"] = false;

// use timepicker for search panel
$tdataconsulta_producto[".isUseTimeForSearch"] = false;


$tdataconsulta_producto[".badgeColor"] = "6493EA";


$tdataconsulta_producto[".allSearchFields"] = array();
$tdataconsulta_producto[".filterFields"] = array();
$tdataconsulta_producto[".requiredSearchFields"] = array();

$tdataconsulta_producto[".googleLikeFields"] = array();
$tdataconsulta_producto[".googleLikeFields"][] = "PROD_ID";
$tdataconsulta_producto[".googleLikeFields"][] = "PRODUCTO";
$tdataconsulta_producto[".googleLikeFields"][] = "DESCRIPCION";



$tdataconsulta_producto[".tableType"] = "list";

$tdataconsulta_producto[".printerPageOrientation"] = 0;
$tdataconsulta_producto[".nPrinterPageScale"] = 100;

$tdataconsulta_producto[".nPrinterSplitRecords"] = 40;

$tdataconsulta_producto[".geocodingEnabled"] = false;










$tdataconsulta_producto[".pageSize"] = 20;

$tdataconsulta_producto[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataconsulta_producto[".strOrderBy"] = $tstrOrderBy;

$tdataconsulta_producto[".orderindexes"] = array();


$tdataconsulta_producto[".sqlHead"] = "SELECT PROD_ID,  PRODUCTO,  DESCRIPCION";
$tdataconsulta_producto[".sqlFrom"] = "FROM `002_producto`";
$tdataconsulta_producto[".sqlWhereExpr"] = "";
$tdataconsulta_producto[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataconsulta_producto[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataconsulta_producto[".arrGroupsPerPage"] = $arrGPP;

$tdataconsulta_producto[".highlightSearchResults"] = true;

$tableKeysconsulta_producto = array();
$tableKeysconsulta_producto[] = "PROD_ID";
$tdataconsulta_producto[".Keys"] = $tableKeysconsulta_producto;


$tdataconsulta_producto[".hideMobileList"] = array();




//	PROD_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "PROD_ID";
	$fdata["GoodName"] = "PROD_ID";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("consulta_producto","PROD_ID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "PROD_ID";

		$fdata["sourceSingle"] = "PROD_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PROD_ID";

	
	
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


	$tdataconsulta_producto["PROD_ID"] = $fdata;
		$tdataconsulta_producto[".searchableFields"][] = "PROD_ID";
//	PRODUCTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "PRODUCTO";
	$fdata["GoodName"] = "PRODUCTO";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("consulta_producto","PRODUCTO");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PRODUCTO";

		$fdata["sourceSingle"] = "PRODUCTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PRODUCTO";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataconsulta_producto["PRODUCTO"] = $fdata;
		$tdataconsulta_producto[".searchableFields"][] = "PRODUCTO";
//	DESCRIPCION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "DESCRIPCION";
	$fdata["GoodName"] = "DESCRIPCION";
	$fdata["ownerTable"] = "002_producto";
	$fdata["Label"] = GetFieldLabel("consulta_producto","DESCRIPCION");
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


	$tdataconsulta_producto["DESCRIPCION"] = $fdata;
		$tdataconsulta_producto[".searchableFields"][] = "DESCRIPCION";


$tables_data["consulta_producto"]=&$tdataconsulta_producto;
$field_labels["consulta_producto"] = &$fieldLabelsconsulta_producto;
$fieldToolTips["consulta_producto"] = &$fieldToolTipsconsulta_producto;
$placeHolders["consulta_producto"] = &$placeHoldersconsulta_producto;
$page_titles["consulta_producto"] = &$pageTitlesconsulta_producto;


changeTextControlsToDate( "consulta_producto" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["consulta_producto"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["consulta_producto"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_consulta_producto()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "PROD_ID,  PRODUCTO,  DESCRIPCION";
$proto0["m_strFrom"] = "FROM `002_producto`";
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
	"m_strName" => "PROD_ID",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "consulta_producto"
));

$proto6["m_sql"] = "PROD_ID";
$proto6["m_srcTableName"] = "consulta_producto";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "PRODUCTO",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "consulta_producto"
));

$proto8["m_sql"] = "PRODUCTO";
$proto8["m_srcTableName"] = "consulta_producto";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "DESCRIPCION",
	"m_strTable" => "002_producto",
	"m_srcTableName" => "consulta_producto"
));

$proto10["m_sql"] = "DESCRIPCION";
$proto10["m_srcTableName"] = "consulta_producto";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "002_producto";
$proto13["m_srcTableName"] = "consulta_producto";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "PROD_ID";
$proto13["m_columns"][] = "RUBRO_ID_FK";
$proto13["m_columns"][] = "VIGENCIA";
$proto13["m_columns"][] = "UEJ";
$proto13["m_columns"][] = "PRODUCTO";
$proto13["m_columns"][] = "DESCRIPCION";
$proto13["m_columns"][] = "REC";
$proto13["m_columns"][] = "FUENTE";
$proto13["m_columns"][] = "PROD_PRESUPUESTO";
$proto13["m_columns"][] = "OBJ-ESPECIFICO";
$proto13["m_columns"][] = "INDICADORES";
$proto13["m_columns"][] = "RUBRO";
$proto13["m_columns"][] = "UTILIZADO";
$proto13["m_columns"][] = "SALDO";
$proto13["m_columns"][] = "META";
$proto13["m_columns"][] = "META_ANIO";
$proto13["m_columns"][] = "Dependencia";
$proto13["m_columns"][] = "UsuarioResp";
$proto13["m_columns"][] = "TIPO";
$proto13["m_columns"][] = "sol_paa";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`002_producto`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "consulta_producto";
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
$proto0["m_srcTableName"]="consulta_producto";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_consulta_producto = createSqlQuery_consulta_producto();


	
												;

			

$tdataconsulta_producto[".sqlquery"] = $queryData_consulta_producto;



$tdataconsulta_producto[".hasEvents"] = false;

?>