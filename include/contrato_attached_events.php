<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_contrato_attached  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["BeforeAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
				// Before record added
function BeforeAdd(&$values, &$sqlValues, &$message, $inline, $pageObject)
{

		global $pageObject;
foreach( $pageObject->filesToMove as $key=>$val)
{
 if($pageObject->filesToMove[$key]->sourceFilename==$_FILES["value_att_file_".postvalue("id")]["tmp_name"])
 {
    //create directory if don't exist
    $dirname= "../GesDoc/Contratos/".$values['id_cont_fk'];
    if (is_dir($dirname)) {
    } else {
       mkdir("../GesDoc/Contratos/".$values['id_cont_fk'], 0777);
    }
   $pageObject->filesToMove[$key]->destFilename = $values['id_cont_fk']."/".$values['cont_pre']."_".$values['cont_num']."_".$values['cont_vigencia']."_".$values['att_cod']."_".$values['att_type']."_".$values['id_cont_fk'].".pdf";
 }
}
$values["att_file"] = $values['id_cont_fk']."/".$values['cont_pre']."_".$values['cont_num']."_".$values['cont_vigencia']."_".$values['att_cod']."_".$values['att_type']."_".$values['id_cont_fk'].".pdf";

// Place event code here.
// Use "Add Action" button to add code snippets.

return true;




;		
} // function BeforeAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
