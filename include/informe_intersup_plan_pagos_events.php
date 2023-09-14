<?php

/**
 * 	Dear developer!
 *	Never modify events.php file, it is autogenerated.
 *  Modify PHP/EventTemplates/events.txt instead.
 *
 */

 class eventclass_informe_intersup_plan_pagos  extends eventsBase
{
	function __construct()
	{
	// fill list of events
		$this->events["AfterAdd"]=true;

		$this->events["AfterEdit"]=true;

		$this->events["BeforeMoveNextList"]=true;




	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record added
function AfterAdd(&$values, &$keys, $inline, $pageObject)
{

		$sql = DB::prepareSQL("UPDATE
informe_intersup_plan_pagos
INNER JOIN q_001_control_pagos ON informe_intersup_plan_pagos.inf_id = q_001_control_pagos.inf_id
SET
informe_intersup_plan_pagos.dias_calculados = q_001_control_pagos.dias_reales,
informe_intersup_plan_pagos.dias_fiscales = q_001_control_pagos.dias_round,
informe_intersup_plan_pagos.valor_a_pagar = 
q_001_control_pagos.Valor_a_pagar;");
DB::Exec( $sql );




// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterAdd

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// After record updated
function AfterEdit(&$values, $where, &$oldvalues, &$keys, $inline, $pageObject)
{

		$sql = DB::prepareSQL("UPDATE
informe_intersup_plan_pagos
INNER JOIN q_001_control_pagos ON informe_intersup_plan_pagos.inf_id = q_001_control_pagos.inf_id
SET
informe_intersup_plan_pagos.dias_calculados = q_001_control_pagos.dias_reales,
informe_intersup_plan_pagos.dias_fiscales = q_001_control_pagos.dias_round,
informe_intersup_plan_pagos.valor_a_pagar = 
q_001_control_pagos.Valor_a_pagar;");
DB::Exec( $sql );

// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function AfterEdit

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
				// List page: After record processed
function BeforeMoveNextList(&$data, &$row, &$record, $recordId, $pageObject)
{

		// estado de la solicitud
if ($data['inf_st'] == 2){
$pageObject->hideItem("grid_edit", $recordId);
$pageObject->hideItem("grid_checkbox", $recordId);  
}


// Place event code here.
// Use "Add Action" button to add code snippets.
;		
} // function BeforeMoveNextList

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		



}
?>
