<?php
$dalTablecontrato_dependencia = array();
$dalTablecontrato_dependencia["dep_id"] = array("type"=>3,"varname"=>"dep_id", "name" => "dep_id", "autoInc" => "1");
$dalTablecontrato_dependencia["id_cont_fk"] = array("type"=>3,"varname"=>"id_cont_fk", "name" => "id_cont_fk", "autoInc" => "0");
$dalTablecontrato_dependencia["dep_sup"] = array("type"=>3,"varname"=>"dep_sup", "name" => "dep_sup", "autoInc" => "0");
$dalTablecontrato_dependencia["dep"] = array("type"=>3,"varname"=>"dep", "name" => "dep", "autoInc" => "0");
$dalTablecontrato_dependencia["dep_id"]["key"]=true;

$dal_info["dbct_at_localhost__contrato_dependencia"] = &$dalTablecontrato_dependencia;
?>