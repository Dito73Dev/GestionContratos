<?php
$dalTablecert_status = array();
$dalTablecert_status["certs_id"] = array("type"=>3,"varname"=>"certs_id", "name" => "certs_id", "autoInc" => "1");
$dalTablecert_status["certs_nombre"] = array("type"=>200,"varname"=>"certs_nombre", "name" => "certs_nombre", "autoInc" => "0");
$dalTablecert_status["certs_id"]["key"]=true;

$dal_info["dbct_at_localhost__cert_status"] = &$dalTablecert_status;
?>