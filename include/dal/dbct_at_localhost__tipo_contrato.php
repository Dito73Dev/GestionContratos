<?php
$dalTabletipo_contrato = array();
$dalTabletipo_contrato["cont_tipo"] = array("type"=>200,"varname"=>"cont_tipo", "name" => "cont_tipo", "autoInc" => "0");
$dalTabletipo_contrato["nom_tipocontrato"] = array("type"=>200,"varname"=>"nom_tipocontrato", "name" => "nom_tipocontrato", "autoInc" => "0");
$dalTabletipo_contrato["ctrl_pago"] = array("type"=>16,"varname"=>"ctrl_pago", "name" => "ctrl_pago", "autoInc" => "0");
$dalTabletipo_contrato["cont_tipo"]["key"]=true;

$dal_info["dbct_at_localhost__tipo_contrato"] = &$dalTabletipo_contrato;
?>