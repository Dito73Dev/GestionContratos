<?php
$dalTablecontrato_paa = array();
$dalTablecontrato_paa["order_id"] = array("type"=>3,"varname"=>"order_id", "name" => "order_id", "autoInc" => "1");
$dalTablecontrato_paa["id_cont_fk"] = array("type"=>3,"varname"=>"id_cont_fk", "name" => "id_cont_fk", "autoInc" => "0");
$dalTablecontrato_paa["paa_id_fk"] = array("type"=>3,"varname"=>"paa_id_fk", "name" => "paa_id_fk", "autoInc" => "0");
$dalTablecontrato_paa["paa_valor"] = array("type"=>5,"varname"=>"paa_valor", "name" => "paa_valor", "autoInc" => "0");
$dalTablecontrato_paa["paa_valor_ct"] = array("type"=>5,"varname"=>"paa_valor_ct", "name" => "paa_valor_ct", "autoInc" => "0");
$dalTablecontrato_paa["paa_obs"] = array("type"=>200,"varname"=>"paa_obs", "name" => "paa_obs", "autoInc" => "0");
$dalTablecontrato_paa["paa_unspsc"] = array("type"=>200,"varname"=>"paa_unspsc", "name" => "paa_unspsc", "autoInc" => "0");
$dalTablecontrato_paa["order_id"]["key"]=true;

$dal_info["dbct_at_localhost__contrato_paa"] = &$dalTablecontrato_paa;
?>