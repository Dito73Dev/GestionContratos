<?php
$dalTablecontrato_modifica = array();
$dalTablecontrato_modifica["mod_id"] = array("type"=>3,"varname"=>"mod_id", "name" => "mod_id", "autoInc" => "1");
$dalTablecontrato_modifica["id_cont_fk"] = array("type"=>3,"varname"=>"id_cont_fk", "name" => "id_cont_fk", "autoInc" => "0");
$dalTablecontrato_modifica["mod_tipo"] = array("type"=>3,"varname"=>"mod_tipo", "name" => "mod_tipo", "autoInc" => "0");
$dalTablecontrato_modifica["mod_fecha_suscripcion"] = array("type"=>7,"varname"=>"mod_fecha_suscripcion", "name" => "mod_fecha_suscripcion", "autoInc" => "0");
$dalTablecontrato_modifica["mod_fecha_ini"] = array("type"=>7,"varname"=>"mod_fecha_ini", "name" => "mod_fecha_ini", "autoInc" => "0");
$dalTablecontrato_modifica["mod_fecha_fin"] = array("type"=>7,"varname"=>"mod_fecha_fin", "name" => "mod_fecha_fin", "autoInc" => "0");
$dalTablecontrato_modifica["mod_observ"] = array("type"=>200,"varname"=>"mod_observ", "name" => "mod_observ", "autoInc" => "0");
$dalTablecontrato_modifica["mod_valor"] = array("type"=>14,"varname"=>"mod_valor", "name" => "mod_valor", "autoInc" => "0");
$dalTablecontrato_modifica["mod_cedente"] = array("type"=>3,"varname"=>"mod_cedente", "name" => "mod_cedente", "autoInc" => "0");
$dalTablecontrato_modifica["mod_decente_cedula"] = array("type"=>200,"varname"=>"mod_decente_cedula", "name" => "mod_decente_cedula", "autoInc" => "0");
$dalTablecontrato_modifica["mod_cesionario"] = array("type"=>3,"varname"=>"mod_cesionario", "name" => "mod_cesionario", "autoInc" => "0");
$dalTablecontrato_modifica["mod_cesionario_cedula"] = array("type"=>200,"varname"=>"mod_cesionario_cedula", "name" => "mod_cesionario_cedula", "autoInc" => "0");
$dalTablecontrato_modifica["sys_user"] = array("type"=>200,"varname"=>"sys_user", "name" => "sys_user", "autoInc" => "0");
$dalTablecontrato_modifica["sys_date"] = array("type"=>135,"varname"=>"sys_date", "name" => "sys_date", "autoInc" => "0");
$dalTablecontrato_modifica["mod_id"]["key"]=true;

$dal_info["dbct_at_localhost__contrato_modifica"] = &$dalTablecontrato_modifica;
?>