<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_contractor_master  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;


	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		//**********  Insert a record into another table  ************

//**********  Send email with new data  ************

$email=$values['contractor_email'];
$from="gestion@mincit.gov.co";
$fromName="Grupo de contratos";
$msg="<img src='https://servicios.mincit.gov.co/xlogo.png' alt='MINCIT' width='299' height='59' />
<table width='100%' border='0' cellpadding='0' cellspacing='0'>
  <tr>
    <td colspan='2'>&nbsp;</td>
  </tr>
  <tr>
    <td colspan='2'>Hola, se ha creado un nuevo registro en la plataforma de contratos, ingrese al módulo de <a href='http://gestion.mincit.gov.co/Athena/GestionContratistas/login.php' target='_blank'>contratistas</a> para finalizar el proceso de actualizacion de datos</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>Cordialmente,</p>
<p>Ministerio de Comercio, Industria y Turisimo</p>";
$subject="Nuevo proveedor | Contratista";

//$msg.= "Name: ".$values["name"]."\r\n";
//$msg.= "Email: ".$values["email"]."\r\n";
//$msg.= "Age: ".$values["age"]."\r\n";

$ret=runner_mail(array('to' => $email,'cc' => $values['contractor_email_mincit'], 'bcc' => 'mincit.osi@gmail.com', 'subject' => $subject, 'htmlbody' => $msg, 'fromName'=> $fromName, 'from'=>$from));
if(!$ret["mailed"])
	echo $ret["message"];


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>