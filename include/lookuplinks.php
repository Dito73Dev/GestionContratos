<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["edl.funcionario"] ) ) {
			$lookupTableLinks["edl.funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["edl.funcionario"]["global_users.id_fk"] )) {
			$lookupTableLinks["edl.funcionario"]["global_users.id_fk"] = array();
		}
		$lookupTableLinks["edl.funcionario"]["global_users.id_fk"]["edit"] = array("table" => "global_users", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_users.usr_dep"] )) {
			$lookupTableLinks["dependencia"]["global_users.usr_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["global_users.usr_dep"]["edit"] = array("table" => "global_users", "field" => "usr_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["global_users.usr_cargo"] )) {
			$lookupTableLinks["cargo"]["global_users.usr_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["global_users.usr_cargo"]["edit"] = array("table" => "global_users", "field" => "usr_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato.cont_ano"]["edit"] = array("table" => "contrato", "field" => "cont_ano", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato.cont_paa_id"] )) {
			$lookupTableLinks[""]["contrato.cont_paa_id"] = array();
		}
		$lookupTableLinks[""]["contrato.cont_paa_id"]["edit"] = array("table" => "contrato", "field" => "cont_paa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"] )) {
			$lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato.cont_nit_contra_ta"]["edit"] = array("table" => "contrato", "field" => "cont_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato.nombre_cont"] )) {
			$lookupTableLinks["contractor_master"]["contrato.nombre_cont"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato.nombre_cont"]["edit"] = array("table" => "contrato", "field" => "nombre_cont", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato.cont_estado"]["edit"] = array("table" => "contrato", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_pre"] ) ) {
			$lookupTableLinks["contrato_pre"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_pre"]["contrato.pre_contnumero"] )) {
			$lookupTableLinks["contrato_pre"]["contrato.pre_contnumero"] = array();
		}
		$lookupTableLinks["contrato_pre"]["contrato.pre_contnumero"]["edit"] = array("table" => "contrato", "field" => "pre_contnumero", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo"] ) ) {
			$lookupTableLinks["contrato_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] )) {
			$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"] = array();
		}
		$lookupTableLinks["contrato_tipo"]["contrato.cont_tipo"]["edit"] = array("table" => "contrato", "field" => "cont_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["consulta_producto"] ) ) {
			$lookupTableLinks["consulta_producto"] = array();
		}
		if( !isset( $lookupTableLinks["consulta_producto"]["contrato.cont_codrubro"] )) {
			$lookupTableLinks["consulta_producto"]["contrato.cont_codrubro"] = array();
		}
		$lookupTableLinks["consulta_producto"]["contrato.cont_codrubro"]["edit"] = array("table" => "contrato", "field" => "cont_codrubro", "page" => "edit");
		if( !isset( $lookupTableLinks["consulta_catalogo"] ) ) {
			$lookupTableLinks["consulta_catalogo"] = array();
		}
		if( !isset( $lookupTableLinks["consulta_catalogo"]["contrato.cont_catalogo_presupuestal"] )) {
			$lookupTableLinks["consulta_catalogo"]["contrato.cont_catalogo_presupuestal"] = array();
		}
		$lookupTableLinks["consulta_catalogo"]["contrato.cont_catalogo_presupuestal"]["edit"] = array("table" => "contrato", "field" => "cont_catalogo_presupuestal", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"] ) ) {
			$lookupTableLinks["contrato_tipo_unidad"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"]["contrato.cont_tipopre"] )) {
			$lookupTableLinks["contrato_tipo_unidad"]["contrato.cont_tipopre"] = array();
		}
		$lookupTableLinks["contrato_tipo_unidad"]["contrato.cont_tipopre"]["edit"] = array("table" => "contrato", "field" => "cont_tipopre", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["contrato.cont_periodicidad"]["edit"] = array("table" => "contrato", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["contrato.cont_tipoc"]["edit"] = array("table" => "contrato", "field" => "cont_tipoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["contrato.cont_modalidad"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["contrato.cont_modalidad"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["contrato.cont_modalidad"]["edit"] = array("table" => "contrato", "field" => "cont_modalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato.cont_causalc"]["edit"] = array("table" => "contrato", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_contrato"] ) ) {
			$lookupTableLinks["tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_contrato"]["contrato.cont_tipoproceso"] )) {
			$lookupTableLinks["tipo_contrato"]["contrato.cont_tipoproceso"] = array();
		}
		$lookupTableLinks["tipo_contrato"]["contrato.cont_tipoproceso"]["edit"] = array("table" => "contrato", "field" => "cont_tipoproceso", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_forma_pago"] ) ) {
			$lookupTableLinks["contrato_forma_pago"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] )) {
			$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"] = array();
		}
		$lookupTableLinks["contrato_forma_pago"]["contrato.cont_formapago"]["edit"] = array("table" => "contrato", "field" => "cont_formapago", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_acta_liquidacion"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_acta_liquidacion"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_acta_liquidacion"]["edit"] = array("table" => "contrato", "field" => "cont_acta_liquidacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_vigencias_futuras"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_vigencias_futuras"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_vigencias_futuras"]["edit"] = array("table" => "contrato", "field" => "cont_vigencias_futuras", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_sigep"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_sigep"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_sigep"]["edit"] = array("table" => "contrato", "field" => "cont_sigep", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"]["contrato.cont_tipo_rubro"] )) {
			$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato.cont_tipo_rubro"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato.cont_tipo_rubro"]["edit"] = array("table" => "contrato", "field" => "cont_tipo_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contrato.cont_munejec"] )) {
			$lookupTableLinks["q_divipola"]["contrato.cont_munejec"] = array();
		}
		$lookupTableLinks["q_divipola"]["contrato.cont_munejec"]["edit"] = array("table" => "contrato", "field" => "cont_munejec", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contrato.cont_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["contrato.cont_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contrato.cont_depsup"]["edit"] = array("table" => "contrato", "field" => "cont_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato.cont_dep"] )) {
			$lookupTableLinks["dependencia"]["contrato.cont_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato.cont_dep"]["edit"] = array("table" => "contrato", "field" => "cont_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato.cont_auditoria"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato.cont_auditoria"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato.cont_auditoria"]["edit"] = array("table" => "contrato", "field" => "cont_auditoria", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master.contractor_type"]["edit"] = array("table" => "contractor_master", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] )) {
			$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"] = array();
		}
		$lookupTableLinks["q_divipola"]["contractor_master.contractor_city"]["edit"] = array("table" => "contractor_master", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master.bank_name"]["edit"] = array("table" => "contractor_master", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master.bank_cta_type"]["edit"] = array("table" => "contractor_master", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_status"] ) ) {
			$lookupTableLinks["global_status"] = array();
		}
		if( !isset( $lookupTableLinks["global_status"]["contractor_master.active"] )) {
			$lookupTableLinks["global_status"]["contractor_master.active"] = array();
		}
		$lookupTableLinks["global_status"]["contractor_master.active"]["edit"] = array("table" => "contractor_master", "field" => "active", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_regimen_tribut"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_regimen_tribut"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_regimen_tribut"]["contractor_master.iva_regimen"] )) {
			$lookupTableLinks["tparam_tipo_ct_regimen_tribut"]["contractor_master.iva_regimen"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_regimen_tribut"]["contractor_master.iva_regimen"]["edit"] = array("table" => "contractor_master", "field" => "iva_regimen", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_docidentidad"] ) ) {
			$lookupTableLinks["tipo_docidentidad"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_docidentidad"]["contractor_master_vinc.contractor_type"] )) {
			$lookupTableLinks["tipo_docidentidad"]["contractor_master_vinc.contractor_type"] = array();
		}
		$lookupTableLinks["tipo_docidentidad"]["contractor_master_vinc.contractor_type"]["edit"] = array("table" => "contractor_master_vinc", "field" => "contractor_type", "page" => "edit");
		if( !isset( $lookupTableLinks["divipola"] ) ) {
			$lookupTableLinks["divipola"] = array();
		}
		if( !isset( $lookupTableLinks["divipola"]["contractor_master_vinc.contractor_city"] )) {
			$lookupTableLinks["divipola"]["contractor_master_vinc.contractor_city"] = array();
		}
		$lookupTableLinks["divipola"]["contractor_master_vinc.contractor_city"]["edit"] = array("table" => "contractor_master_vinc", "field" => "contractor_city", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_banco"] ) ) {
			$lookupTableLinks["tipo_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_banco"]["contractor_master_vinc.bank_name"] )) {
			$lookupTableLinks["tipo_banco"]["contractor_master_vinc.bank_name"] = array();
		}
		$lookupTableLinks["tipo_banco"]["contractor_master_vinc.bank_name"]["edit"] = array("table" => "contractor_master_vinc", "field" => "bank_name", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_cta_banco"] ) ) {
			$lookupTableLinks["tipo_cta_banco"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_cta_banco"]["contractor_master_vinc.bank_cta_type"] )) {
			$lookupTableLinks["tipo_cta_banco"]["contractor_master_vinc.bank_cta_type"] = array();
		}
		$lookupTableLinks["tipo_cta_banco"]["contractor_master_vinc.bank_cta_type"]["edit"] = array("table" => "contractor_master_vinc", "field" => "bank_cta_type", "page" => "edit");
		if( !isset( $lookupTableLinks["global_status"] ) ) {
			$lookupTableLinks["global_status"] = array();
		}
		if( !isset( $lookupTableLinks["global_status"]["contractor_master_vinc.active"] )) {
			$lookupTableLinks["global_status"]["contractor_master_vinc.active"] = array();
		}
		$lookupTableLinks["global_status"]["contractor_master_vinc.active"]["edit"] = array("table" => "contractor_master_vinc", "field" => "active", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["tparam_tipo_ct_001.ct_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_001", "field" => "ct_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["tparam_tipo_ct_002.cta_tipo_id_fk"]["edit"] = array("table" => "tparam_tipo_ct_002", "field" => "cta_tipo_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_attached.id_cont_fk"]["edit"] = array("table" => "contrato_attached", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_attached_type"] ) ) {
			$lookupTableLinks["contrato_attached_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"] )) {
			$lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"] = array();
		}
		$lookupTableLinks["contrato_attached_type"]["contrato_attached.att_type"]["edit"] = array("table" => "contrato_attached", "field" => "att_type", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["polizas_master.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["polizas_master.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["polizas_master.id_cont_fk"]["edit"] = array("table" => "polizas_master", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_attached"] ) ) {
			$lookupTableLinks["contrato_attached"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_attached"]["polizas_master.id_att_fk"] )) {
			$lookupTableLinks["contrato_attached"]["polizas_master.id_att_fk"] = array();
		}
		$lookupTableLinks["contrato_attached"]["polizas_master.id_att_fk"]["edit"] = array("table" => "polizas_master", "field" => "id_att_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["polizas_aseguradoras"] ) ) {
			$lookupTableLinks["polizas_aseguradoras"] = array();
		}
		if( !isset( $lookupTableLinks["polizas_aseguradoras"]["polizas_master.poli_compania"] )) {
			$lookupTableLinks["polizas_aseguradoras"]["polizas_master.poli_compania"] = array();
		}
		$lookupTableLinks["polizas_aseguradoras"]["polizas_master.poli_compania"]["edit"] = array("table" => "polizas_master", "field" => "poli_compania", "page" => "edit");
		if( !isset( $lookupTableLinks["polizas_tipo"] ) ) {
			$lookupTableLinks["polizas_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["polizas_tipo"]["polizas_master.poli_codamparo"] )) {
			$lookupTableLinks["polizas_tipo"]["polizas_master.poli_codamparo"] = array();
		}
		$lookupTableLinks["polizas_tipo"]["polizas_master.poli_codamparo"]["edit"] = array("table" => "polizas_master", "field" => "poli_codamparo", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users_sup"] ) ) {
			$lookupTableLinks["global_users_sup"] = array();
		}
		if( !isset( $lookupTableLinks["global_users_sup"]["interventor_interno.idusrglobal_fk"] )) {
			$lookupTableLinks["global_users_sup"]["interventor_interno.idusrglobal_fk"] = array();
		}
		$lookupTableLinks["global_users_sup"]["interventor_interno.idusrglobal_fk"]["edit"] = array("table" => "interventor_interno", "field" => "idusrglobal_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_habilita"] ) ) {
			$lookupTableLinks["tparam_habilita"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"] )) {
			$lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"] = array();
		}
		$lookupTableLinks["tparam_habilita"]["interventor_interno.sup_status"]["edit"] = array("table" => "interventor_interno", "field" => "sup_status", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_cdp.id_cont_FK"] )) {
			$lookupTableLinks["contrato"]["contrato_cdp.id_cont_FK"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_cdp.id_cont_FK"]["edit"] = array("table" => "contrato_cdp", "field" => "id_cont_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_cdp.dependencias"] )) {
			$lookupTableLinks["dependencia"]["contrato_cdp.dependencias"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_cdp.dependencias"]["edit"] = array("table" => "contrato_cdp", "field" => "dependencias", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] )) {
			$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"] = array();
		}
		$lookupTableLinks["dependencias_001"]["dependencia.id_depto_superior"]["edit"] = array("table" => "dependencia", "field" => "id_depto_superior", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_rp.id_cont_FK"] )) {
			$lookupTableLinks["contrato"]["contrato_rp.id_cont_FK"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_rp.id_cont_FK"]["edit"] = array("table" => "contrato_rp", "field" => "id_cont_FK", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_rp.dependencias_rp"] )) {
			$lookupTableLinks["dependencia"]["contrato_rp.dependencias_rp"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_rp.dependencias_rp"]["edit"] = array("table" => "contrato_rp", "field" => "dependencias_rp", "page" => "edit");
		if( !isset( $lookupTableLinks["comportamental"] ) ) {
			$lookupTableLinks["comportamental"] = array();
		}
		if( !isset( $lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] )) {
			$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"] = array();
		}
		$lookupTableLinks["comportamental"]["cargo.idComportamentalFK"]["edit"] = array("table" => "cargo", "field" => "idComportamentalFK", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["informe_intersup_plan_pagos.id_cont_fk"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_000_control_informes"] ) ) {
			$lookupTableLinks["q_000_control_informes"] = array();
		}
		if( !isset( $lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] )) {
			$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"]["add"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["q_000_control_informes"] ) ) {
			$lookupTableLinks["q_000_control_informes"] = array();
		}
		if( !isset( $lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] )) {
			$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos.inf_consecutivo"]["search"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["add"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos.inf_st"]["search"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_st", "page" => "search");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["informe_intersup_plan_pagos.inf_mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["informe_intersup_plan_pagos.inf_mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["informe_intersup_plan_pagos.inf_mes"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_mes", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipopago"] ) ) {
			$lookupTableLinks["tparam_tipopago"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipopago"]["informe_intersup_plan_pagos.inf_tipopago"] )) {
			$lookupTableLinks["tparam_tipopago"]["informe_intersup_plan_pagos.inf_tipopago"] = array();
		}
		$lookupTableLinks["tparam_tipopago"]["informe_intersup_plan_pagos.inf_tipopago"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "inf_tipopago", "page" => "edit");
		if( !isset( $lookupTableLinks["global_users"] ) ) {
			$lookupTableLinks["global_users"] = array();
		}
		if( !isset( $lookupTableLinks["global_users"]["informe_intersup_plan_pagos.sysuser"] )) {
			$lookupTableLinks["global_users"]["informe_intersup_plan_pagos.sysuser"] = array();
		}
		$lookupTableLinks["global_users"]["informe_intersup_plan_pagos.sysuser"]["edit"] = array("table" => "informe_intersup_plan_pagos", "field" => "sysuser", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_chart_tiporubro.cont_tipo_rubro"] )) {
			$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_chart_tiporubro.cont_tipo_rubro"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_chart_tiporubro.cont_tipo_rubro"]["search"] = array("table" => "contrato_chart_tiporubro", "field" => "cont_tipo_rubro", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_tiporubro.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_tiporubro.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_tiporubro.cont_ano"]["search"] = array("table" => "contrato_chart_tiporubro", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato_chart_estado.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato_chart_estado.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato_chart_estado.cont_estado"]["search"] = array("table" => "contrato_chart_estado", "field" => "cont_estado", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_estado.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_estado.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_estado.cont_ano"]["search"] = array("table" => "contrato_chart_estado", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato_chart_tipocont.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato_chart_tipocont.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato_chart_tipocont.cont_causalc"]["search"] = array("table" => "contrato_chart_tipocont", "field" => "cont_causalc", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_tipocont.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_tipocont.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_tipocont.cont_ano"]["search"] = array("table" => "contrato_chart_tipocont", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_dependencia.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_dependencia.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_dependencia.cont_ano"]["search"] = array("table" => "contrato_chart_dependencia", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_chart_dependencia.contractor_dependencia"] )) {
			$lookupTableLinks["dependencia"]["contrato_chart_dependencia.contractor_dependencia"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_chart_dependencia.contractor_dependencia"]["search"] = array("table" => "contrato_chart_dependencia", "field" => "contractor_dependencia", "page" => "search");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_chart_supjer.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_chart_supjer.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_chart_supjer.cont_ano"]["search"] = array("table" => "contrato_chart_supjer", "field" => "cont_ano", "page" => "search");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contrato_chart_supjer.contractor_sup_jerarquico"] )) {
			$lookupTableLinks["dependencias_001"]["contrato_chart_supjer.contractor_sup_jerarquico"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contrato_chart_supjer.contractor_sup_jerarquico"]["search"] = array("table" => "contrato_chart_supjer", "field" => "contractor_sup_jerarquico", "page" => "search");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_oe.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_oe.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_oe.id_cont_fk"]["edit"] = array("table" => "contrato_oe", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_oe_ordinal"] ) ) {
			$lookupTableLinks["q_oe_ordinal"] = array();
		}
		if( !isset( $lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] )) {
			$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] = array();
		}
		$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"]["add"] = array("table" => "contrato_oe", "field" => "oe_ordinal", "page" => "add");
		if( !isset( $lookupTableLinks["q_oe_ordinal"] ) ) {
			$lookupTableLinks["q_oe_ordinal"] = array();
		}
		if( !isset( $lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] )) {
			$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"] = array();
		}
		$lookupTableLinks["q_oe_ordinal"]["contrato_oe.oe_ordinal"]["search"] = array("table" => "contrato_oe", "field" => "oe_ordinal", "page" => "search");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores1.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores1.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores1.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores1.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores1.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores1.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores1.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores1.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores1.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores1.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores1.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores1.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores1.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores1.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores1.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores1", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup.id_cont_fk"]["edit"] = array("table" => "informe_intersup", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_gestion_infosup_pagos"] ) ) {
			$lookupTableLinks["q_gestion_infosup_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["q_gestion_infosup_pagos"]["informe_intersup.inf_consecutivo"] )) {
			$lookupTableLinks["q_gestion_infosup_pagos"]["informe_intersup.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_gestion_infosup_pagos"]["informe_intersup.inf_consecutivo"]["add"] = array("table" => "informe_intersup", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_consecutivo"]["search"] = array("table" => "informe_intersup", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup.inf_estado"]["add"] = array("table" => "informe_intersup", "field" => "inf_estado", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_avgejecucion"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_avgejecucion"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup.inf_avgejecucion"]["edit"] = array("table" => "informe_intersup", "field" => "inf_avgejecucion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup.inf_declarainconf"]["edit"] = array("table" => "informe_intersup", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["informe_intersup.cert_process"] )) {
			$lookupTableLinks["tipo_si_no"]["informe_intersup.cert_process"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["informe_intersup.cert_process"]["edit"] = array("table" => "informe_intersup", "field" => "cert_process", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["informe_intersup.cert_mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["informe_intersup.cert_mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["informe_intersup.cert_mes"]["edit"] = array("table" => "informe_intersup", "field" => "cert_mes", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores2.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores2.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores2.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores2.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores2.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores2.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores2.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores2.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores2.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores2.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores2.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores2.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores2.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores2.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores2.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores2", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup"] ) ) {
			$lookupTableLinks["informe_intersup"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup"]["informe_intersup_oe.inf_id_fk"]["edit"] = array("table" => "informe_intersup_oe", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_oe"] ) ) {
			$lookupTableLinks["contrato_oe"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"] )) {
			$lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"] = array();
		}
		$lookupTableLinks["contrato_oe"]["informe_intersup_oe.oe_id_fk"]["edit"] = array("table" => "informe_intersup_oe", "field" => "oe_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_modifica.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_modifica.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_modifica.id_cont_fk"]["edit"] = array("table" => "contrato_modifica", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_modifica_type"] ) ) {
			$lookupTableLinks["contrato_modifica_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_modifica_type"]["contrato_modifica.mod_tipo"] )) {
			$lookupTableLinks["contrato_modifica_type"]["contrato_modifica.mod_tipo"] = array();
		}
		$lookupTableLinks["contrato_modifica_type"]["contrato_modifica.mod_tipo"]["edit"] = array("table" => "contrato_modifica", "field" => "mod_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_modifica_prorroga.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_modifica_prorroga.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_modifica_prorroga.id_cont_fk"]["edit"] = array("table" => "contrato_modifica_prorroga", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_modifica_type"] ) ) {
			$lookupTableLinks["contrato_modifica_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_modifica_type"]["contrato_modifica_prorroga.mod_tipo"] )) {
			$lookupTableLinks["contrato_modifica_type"]["contrato_modifica_prorroga.mod_tipo"] = array();
		}
		$lookupTableLinks["contrato_modifica_type"]["contrato_modifica_prorroga.mod_tipo"]["edit"] = array("table" => "contrato_modifica_prorroga", "field" => "mod_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_modifica_cesion.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_modifica_cesion.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_modifica_cesion.id_cont_fk"]["edit"] = array("table" => "contrato_modifica_cesion", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_modifica_type"] ) ) {
			$lookupTableLinks["contrato_modifica_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_modifica_type"]["contrato_modifica_cesion.mod_tipo"] )) {
			$lookupTableLinks["contrato_modifica_type"]["contrato_modifica_cesion.mod_tipo"] = array();
		}
		$lookupTableLinks["contrato_modifica_type"]["contrato_modifica_cesion.mod_tipo"]["edit"] = array("table" => "contrato_modifica_cesion", "field" => "mod_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato_modifica_cesion.mod_cedente"] )) {
			$lookupTableLinks["contractor_master"]["contrato_modifica_cesion.mod_cedente"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato_modifica_cesion.mod_cedente"]["edit"] = array("table" => "contrato_modifica_cesion", "field" => "mod_cedente", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato_modifica_cesion.mod_cesionario"] )) {
			$lookupTableLinks["contractor_master"]["contrato_modifica_cesion.mod_cesionario"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato_modifica_cesion.mod_cesionario"]["edit"] = array("table" => "contrato_modifica_cesion", "field" => "mod_cesionario", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores3.cont_nit_contra_taname"] )) {
			$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores3.cont_nit_contra_taname"] = array();
		}
		$lookupTableLinks["contractor_master"]["q_bandejaentrada_supervisores3.cont_nit_contra_taname"]["edit"] = array("table" => "q_bandejaentrada_supervisores3", "field" => "cont_nit_contra_taname", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores3.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores3.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores3.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores3", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores3.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores3.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores3.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores3", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores3.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores3.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores3.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores3", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores3.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores3.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores3.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores3", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup3.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup3.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup3.id_cont_fk"]["edit"] = array("table" => "informe_intersup3", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup3.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup3.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup3.inf_consecutivo"]["add"] = array("table" => "informe_intersup3", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup3.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup3.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup3.inf_consecutivo"]["search"] = array("table" => "informe_intersup3", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup3.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup3.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup3.inf_estado"]["edit"] = array("table" => "informe_intersup3", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup3.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup3.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup3.inf_declarainconf"]["edit"] = array("table" => "informe_intersup3", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup3.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup3.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup3.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup3", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contrato_dependencia.dep_sup"] )) {
			$lookupTableLinks["dependencias_001"]["contrato_dependencia.dep_sup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contrato_dependencia.dep_sup"]["edit"] = array("table" => "contrato_dependencia", "field" => "dep_sup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_dependencia.dep"] )) {
			$lookupTableLinks["dependencia"]["contrato_dependencia.dep"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_dependencia.dep"]["edit"] = array("table" => "contrato_dependencia", "field" => "dep", "page" => "edit");
		if( !isset( $lookupTableLinks["edl.funcionario"] ) ) {
			$lookupTableLinks["edl.funcionario"] = array();
		}
		if( !isset( $lookupTableLinks["edl.funcionario"]["global_users_sup.id_fk"] )) {
			$lookupTableLinks["edl.funcionario"]["global_users_sup.id_fk"] = array();
		}
		$lookupTableLinks["edl.funcionario"]["global_users_sup.id_fk"]["edit"] = array("table" => "global_users_sup", "field" => "id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["global_users_sup.usr_dep"] )) {
			$lookupTableLinks["dependencia"]["global_users_sup.usr_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["global_users_sup.usr_dep"]["edit"] = array("table" => "global_users_sup", "field" => "usr_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["global_users_sup.usr_cargo"] )) {
			$lookupTableLinks["cargo"]["global_users_sup.usr_cargo"] = array();
		}
		$lookupTableLinks["cargo"]["global_users_sup.usr_cargo"]["edit"] = array("table" => "global_users_sup", "field" => "usr_cargo", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup4.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup4.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup4.id_cont_fk"]["edit"] = array("table" => "informe_intersup4", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores"]["informe_intersup4.id_cont_fk2"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores"]["informe_intersup4.id_cont_fk2"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores"]["informe_intersup4.id_cont_fk2"]["edit"] = array("table" => "informe_intersup4", "field" => "id_cont_fk2", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup4.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup4.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup4.inf_consecutivo"]["add"] = array("table" => "informe_intersup4", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup4.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup4.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup4.inf_consecutivo"]["search"] = array("table" => "informe_intersup4", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup4.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup4.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup4.inf_estado"]["edit"] = array("table" => "informe_intersup4", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["informe_intersup4.inf_anio"] )) {
			$lookupTableLinks["vigencia"]["informe_intersup4.inf_anio"] = array();
		}
		$lookupTableLinks["vigencia"]["informe_intersup4.inf_anio"]["edit"] = array("table" => "informe_intersup4", "field" => "inf_anio", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup4.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup4.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup4.inf_declarainconf"]["edit"] = array("table" => "informe_intersup4", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup4.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup4.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup4.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup4", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup"] ) ) {
			$lookupTableLinks["informe_intersup"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup"]["informe_intersup_oe_borrar.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup"]["informe_intersup_oe_borrar.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup"]["informe_intersup_oe_borrar.inf_id_fk"]["edit"] = array("table" => "informe_intersup_oe_borrar", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_oe"] ) ) {
			$lookupTableLinks["contrato_oe"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_oe"]["informe_intersup_oe_borrar.oe_id_fk"] )) {
			$lookupTableLinks["contrato_oe"]["informe_intersup_oe_borrar.oe_id_fk"] = array();
		}
		$lookupTableLinks["contrato_oe"]["informe_intersup_oe_borrar.oe_id_fk"]["edit"] = array("table" => "informe_intersup_oe_borrar", "field" => "oe_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_borrar.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_borrar.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_borrar.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe_borrar", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup"] ) ) {
			$lookupTableLinks["informe_intersup"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup"]["informe_intersup_oe_supervisor.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup"]["informe_intersup_oe_supervisor.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup"]["informe_intersup_oe_supervisor.inf_id_fk"]["edit"] = array("table" => "informe_intersup_oe_supervisor", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_oe"] ) ) {
			$lookupTableLinks["contrato_oe"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_oe"]["informe_intersup_oe_supervisor.oe_id_fk"] )) {
			$lookupTableLinks["contrato_oe"]["informe_intersup_oe_supervisor.oe_id_fk"] = array();
		}
		$lookupTableLinks["contrato_oe"]["informe_intersup_oe_supervisor.oe_id_fk"]["edit"] = array("table" => "informe_intersup_oe_supervisor", "field" => "oe_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_supervisor.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_supervisor.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_supervisor.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe_supervisor", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup2.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup2.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup2.id_cont_fk"]["edit"] = array("table" => "informe_intersup2", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_consecutivo"]["add"] = array("table" => "informe_intersup2", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_consecutivo"]["search"] = array("table" => "informe_intersup2", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup2.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup2.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup2.inf_estado"]["edit"] = array("table" => "informe_intersup2", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup2.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup2.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup2.inf_estado"]["add"] = array("table" => "informe_intersup2", "field" => "inf_estado", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_avgejecucion"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_avgejecucion"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2.inf_avgejecucion"]["edit"] = array("table" => "informe_intersup2", "field" => "inf_avgejecucion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup2.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup2.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup2.inf_declarainconf"]["edit"] = array("table" => "informe_intersup2", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup2.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup2.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup2.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup2", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["informe_intersup2.cert_process"] )) {
			$lookupTableLinks["tipo_si_no"]["informe_intersup2.cert_process"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["informe_intersup2.cert_process"]["edit"] = array("table" => "informe_intersup2", "field" => "cert_process", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["informe_intersup2.cert_mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["informe_intersup2.cert_mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["informe_intersup2.cert_mes"]["edit"] = array("table" => "informe_intersup2", "field" => "cert_mes", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup2r.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup2r.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup2r.id_cont_fk"]["edit"] = array("table" => "informe_intersup2r", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_consecutivo"]["add"] = array("table" => "informe_intersup2r", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_consecutivo"]["search"] = array("table" => "informe_intersup2r", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup2r.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup2r.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup2r.inf_estado"]["add"] = array("table" => "informe_intersup2r", "field" => "inf_estado", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_avgejecucion"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_avgejecucion"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup2r.inf_avgejecucion"]["edit"] = array("table" => "informe_intersup2r", "field" => "inf_avgejecucion", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup2r.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup2r.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup2r.inf_declarainconf"]["edit"] = array("table" => "informe_intersup2r", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup2r.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup2r.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup2r.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup2r", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["informe_intersup2r.cert_process"] )) {
			$lookupTableLinks["tipo_si_no"]["informe_intersup2r.cert_process"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["informe_intersup2r.cert_process"]["edit"] = array("table" => "informe_intersup2r", "field" => "cert_process", "page" => "edit");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["informe_intersup2r.cert_mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["informe_intersup2r.cert_mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["informe_intersup2r.cert_mes"]["edit"] = array("table" => "informe_intersup2r", "field" => "cert_mes", "page" => "edit");
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"] ) ) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"] = array();
		}
		if( !isset( $lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup_adm.id_cont_fk"] )) {
			$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup_adm.id_cont_fk"] = array();
		}
		$lookupTableLinks["q_bandejaentrada_supervisores2"]["informe_intersup_adm.id_cont_fk"]["edit"] = array("table" => "informe_intersup_adm", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup_adm.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup_adm.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup_adm.inf_consecutivo"]["add"] = array("table" => "informe_intersup_adm", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup_adm.inf_consecutivo"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup_adm.inf_consecutivo"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos"]["informe_intersup_adm.inf_consecutivo"]["search"] = array("table" => "informe_intersup_adm", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_estado"] ) ) {
			$lookupTableLinks["informe_intersup_estado"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_estado"]["informe_intersup_adm.inf_estado"] )) {
			$lookupTableLinks["informe_intersup_estado"]["informe_intersup_adm.inf_estado"] = array();
		}
		$lookupTableLinks["informe_intersup_estado"]["informe_intersup_adm.inf_estado"]["edit"] = array("table" => "informe_intersup_adm", "field" => "inf_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup_adm.inf_declarainconf"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup_adm.inf_declarainconf"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup_adm.inf_declarainconf"]["edit"] = array("table" => "informe_intersup_adm", "field" => "inf_declarainconf", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn"] ) ) {
			$lookupTableLinks["tparam_sn"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn"]["informe_intersup_adm.inf_incumplimiento"] )) {
			$lookupTableLinks["tparam_sn"]["informe_intersup_adm.inf_incumplimiento"] = array();
		}
		$lookupTableLinks["tparam_sn"]["informe_intersup_adm.inf_incumplimiento"]["edit"] = array("table" => "informe_intersup_adm", "field" => "inf_incumplimiento", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup"] ) ) {
			$lookupTableLinks["informe_intersup"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup"]["informe_intersup_oe_adm.inf_id_fk"] )) {
			$lookupTableLinks["informe_intersup"]["informe_intersup_oe_adm.inf_id_fk"] = array();
		}
		$lookupTableLinks["informe_intersup"]["informe_intersup_oe_adm.inf_id_fk"]["edit"] = array("table" => "informe_intersup_oe_adm", "field" => "inf_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_oe"] ) ) {
			$lookupTableLinks["contrato_oe"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_oe"]["informe_intersup_oe_adm.oe_id_fk"] )) {
			$lookupTableLinks["contrato_oe"]["informe_intersup_oe_adm.oe_id_fk"] = array();
		}
		$lookupTableLinks["contrato_oe"]["informe_intersup_oe_adm.oe_id_fk"]["edit"] = array("table" => "informe_intersup_oe_adm", "field" => "oe_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_sn_oe"] ) ) {
			$lookupTableLinks["tparam_sn_oe"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_adm.sup_aprueba"] )) {
			$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_adm.sup_aprueba"] = array();
		}
		$lookupTableLinks["tparam_sn_oe"]["informe_intersup_oe_adm.sup_aprueba"]["edit"] = array("table" => "informe_intersup_oe_adm", "field" => "sup_aprueba", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["informe_intersup_plan_pagos_adm.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["informe_intersup_plan_pagos_adm.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["informe_intersup_plan_pagos_adm.id_cont_fk"]["edit"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_000_control_informes"] ) ) {
			$lookupTableLinks["q_000_control_informes"] = array();
		}
		if( !isset( $lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos_adm.inf_consecutivo"] )) {
			$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos_adm.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos_adm.inf_consecutivo"]["add"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_consecutivo", "page" => "add");
		if( !isset( $lookupTableLinks["q_000_control_informes"] ) ) {
			$lookupTableLinks["q_000_control_informes"] = array();
		}
		if( !isset( $lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos_adm.inf_consecutivo"] )) {
			$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos_adm.inf_consecutivo"] = array();
		}
		$lookupTableLinks["q_000_control_informes"]["informe_intersup_plan_pagos_adm.inf_consecutivo"]["search"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_consecutivo", "page" => "search");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"]["edit"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_st", "page" => "edit");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"]["add"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_st", "page" => "add");
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"] ) ) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"] = array();
		}
		if( !isset( $lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"] )) {
			$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"] = array();
		}
		$lookupTableLinks["informe_intersup_plan_pagos_st"]["informe_intersup_plan_pagos_adm.inf_st"]["search"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_st", "page" => "search");
		if( !isset( $lookupTableLinks["nomina_cont_meses"] ) ) {
			$lookupTableLinks["nomina_cont_meses"] = array();
		}
		if( !isset( $lookupTableLinks["nomina_cont_meses"]["informe_intersup_plan_pagos_adm.inf_mes"] )) {
			$lookupTableLinks["nomina_cont_meses"]["informe_intersup_plan_pagos_adm.inf_mes"] = array();
		}
		$lookupTableLinks["nomina_cont_meses"]["informe_intersup_plan_pagos_adm.inf_mes"]["edit"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_mes", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipopago"] ) ) {
			$lookupTableLinks["tparam_tipopago"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipopago"]["informe_intersup_plan_pagos_adm.inf_tipopago"] )) {
			$lookupTableLinks["tparam_tipopago"]["informe_intersup_plan_pagos_adm.inf_tipopago"] = array();
		}
		$lookupTableLinks["tparam_tipopago"]["informe_intersup_plan_pagos_adm.inf_tipopago"]["edit"] = array("table" => "informe_intersup_plan_pagos_adm", "field" => "inf_tipopago", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores_consulta.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores_consulta.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["q_bandejaentrada_supervisores_consulta.cont_estado"]["edit"] = array("table" => "q_bandejaentrada_supervisores_consulta", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores_consulta.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores_consulta.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["q_bandejaentrada_supervisores_consulta.cont_periodicidad"]["edit"] = array("table" => "q_bandejaentrada_supervisores_consulta", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["cargo"] ) ) {
			$lookupTableLinks["cargo"] = array();
		}
		if( !isset( $lookupTableLinks["cargo"]["q_bandejaentrada_supervisores_consulta.cargo_id"] )) {
			$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores_consulta.cargo_id"] = array();
		}
		$lookupTableLinks["cargo"]["q_bandejaentrada_supervisores_consulta.cargo_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores_consulta", "field" => "cargo_id", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores_consulta.dependencia_id"] )) {
			$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores_consulta.dependencia_id"] = array();
		}
		$lookupTableLinks["dependencia"]["q_bandejaentrada_supervisores_consulta.dependencia_id"]["edit"] = array("table" => "q_bandejaentrada_supervisores_consulta", "field" => "dependencia_id", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["q_bandejaentrada_supervisores_consulta.cont_munejec"] )) {
			$lookupTableLinks["q_divipola"]["q_bandejaentrada_supervisores_consulta.cont_munejec"] = array();
		}
		$lookupTableLinks["q_divipola"]["q_bandejaentrada_supervisores_consulta.cont_munejec"]["edit"] = array("table" => "q_bandejaentrada_supervisores_consulta", "field" => "cont_munejec", "page" => "edit");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_ov.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_ov.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_ov.cont_ano"]["edit"] = array("table" => "contrato_ov", "field" => "cont_ano", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato_ov.cont_paa_id"] )) {
			$lookupTableLinks[""]["contrato_ov.cont_paa_id"] = array();
		}
		$lookupTableLinks[""]["contrato_ov.cont_paa_id"]["edit"] = array("table" => "contrato_ov", "field" => "cont_paa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato_ov.cont_nit_contra_ta"] )) {
			$lookupTableLinks["contractor_master"]["contrato_ov.cont_nit_contra_ta"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato_ov.cont_nit_contra_ta"]["edit"] = array("table" => "contrato_ov", "field" => "cont_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato_ov.nombre_cont"] )) {
			$lookupTableLinks["contractor_master"]["contrato_ov.nombre_cont"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato_ov.nombre_cont"]["edit"] = array("table" => "contrato_ov", "field" => "nombre_cont", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato_ov.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato_ov.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato_ov.cont_estado"]["edit"] = array("table" => "contrato_ov", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_pre"] ) ) {
			$lookupTableLinks["contrato_pre"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_pre"]["contrato_ov.pre_contnumero"] )) {
			$lookupTableLinks["contrato_pre"]["contrato_ov.pre_contnumero"] = array();
		}
		$lookupTableLinks["contrato_pre"]["contrato_ov.pre_contnumero"]["edit"] = array("table" => "contrato_ov", "field" => "pre_contnumero", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo"] ) ) {
			$lookupTableLinks["contrato_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo"]["contrato_ov.cont_tipo"] )) {
			$lookupTableLinks["contrato_tipo"]["contrato_ov.cont_tipo"] = array();
		}
		$lookupTableLinks["contrato_tipo"]["contrato_ov.cont_tipo"]["edit"] = array("table" => "contrato_ov", "field" => "cont_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato_ov.cont_codrubro"] )) {
			$lookupTableLinks[""]["contrato_ov.cont_codrubro"] = array();
		}
		$lookupTableLinks[""]["contrato_ov.cont_codrubro"]["edit"] = array("table" => "contrato_ov", "field" => "cont_codrubro", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato_ov.cont_catalogo_presupuestal"] )) {
			$lookupTableLinks[""]["contrato_ov.cont_catalogo_presupuestal"] = array();
		}
		$lookupTableLinks[""]["contrato_ov.cont_catalogo_presupuestal"]["edit"] = array("table" => "contrato_ov", "field" => "cont_catalogo_presupuestal", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"] ) ) {
			$lookupTableLinks["contrato_tipo_unidad"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"]["contrato_ov.cont_tipopre"] )) {
			$lookupTableLinks["contrato_tipo_unidad"]["contrato_ov.cont_tipopre"] = array();
		}
		$lookupTableLinks["contrato_tipo_unidad"]["contrato_ov.cont_tipopre"]["edit"] = array("table" => "contrato_ov", "field" => "cont_tipopre", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["contrato_ov.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["contrato_ov.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["contrato_ov.cont_periodicidad"]["edit"] = array("table" => "contrato_ov", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["contrato_ov.cont_tipoc"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["contrato_ov.cont_tipoc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["contrato_ov.cont_tipoc"]["edit"] = array("table" => "contrato_ov", "field" => "cont_tipoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["contrato_ov.cont_modalidad"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["contrato_ov.cont_modalidad"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["contrato_ov.cont_modalidad"]["edit"] = array("table" => "contrato_ov", "field" => "cont_modalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato_ov.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato_ov.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato_ov.cont_causalc"]["edit"] = array("table" => "contrato_ov", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_contrato"] ) ) {
			$lookupTableLinks["tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_contrato"]["contrato_ov.cont_tipoproceso"] )) {
			$lookupTableLinks["tipo_contrato"]["contrato_ov.cont_tipoproceso"] = array();
		}
		$lookupTableLinks["tipo_contrato"]["contrato_ov.cont_tipoproceso"]["edit"] = array("table" => "contrato_ov", "field" => "cont_tipoproceso", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_forma_pago"] ) ) {
			$lookupTableLinks["contrato_forma_pago"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_forma_pago"]["contrato_ov.cont_formapago"] )) {
			$lookupTableLinks["contrato_forma_pago"]["contrato_ov.cont_formapago"] = array();
		}
		$lookupTableLinks["contrato_forma_pago"]["contrato_ov.cont_formapago"]["edit"] = array("table" => "contrato_ov", "field" => "cont_formapago", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_ov.cont_acta_liquidacion"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_ov.cont_acta_liquidacion"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_ov.cont_acta_liquidacion"]["edit"] = array("table" => "contrato_ov", "field" => "cont_acta_liquidacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_ov.cont_vigencias_futuras"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_ov.cont_vigencias_futuras"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_ov.cont_vigencias_futuras"]["edit"] = array("table" => "contrato_ov", "field" => "cont_vigencias_futuras", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_ov.cont_sigep"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_ov.cont_sigep"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_ov.cont_sigep"]["edit"] = array("table" => "contrato_ov", "field" => "cont_sigep", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_ov.cont_tipo_rubro"] )) {
			$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_ov.cont_tipo_rubro"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_ov.cont_tipo_rubro"]["edit"] = array("table" => "contrato_ov", "field" => "cont_tipo_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contrato_ov.cont_munejec"] )) {
			$lookupTableLinks["q_divipola"]["contrato_ov.cont_munejec"] = array();
		}
		$lookupTableLinks["q_divipola"]["contrato_ov.cont_munejec"]["edit"] = array("table" => "contrato_ov", "field" => "cont_munejec", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contrato_ov.cont_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["contrato_ov.cont_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contrato_ov.cont_depsup"]["edit"] = array("table" => "contrato_ov", "field" => "cont_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_ov.cont_dep"] )) {
			$lookupTableLinks["dependencia"]["contrato_ov.cont_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_ov.cont_dep"]["edit"] = array("table" => "contrato_ov", "field" => "cont_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_attached_ov.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_attached_ov.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_attached_ov.id_cont_fk"]["edit"] = array("table" => "contrato_attached_ov", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_attached_type"] ) ) {
			$lookupTableLinks["contrato_attached_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_attached_type"]["contrato_attached_ov.att_type"] )) {
			$lookupTableLinks["contrato_attached_type"]["contrato_attached_ov.att_type"] = array();
		}
		$lookupTableLinks["contrato_attached_type"]["contrato_attached_ov.att_type"]["edit"] = array("table" => "contrato_attached_ov", "field" => "att_type", "page" => "edit");
		if( !isset( $lookupTableLinks["vigencia"] ) ) {
			$lookupTableLinks["vigencia"] = array();
		}
		if( !isset( $lookupTableLinks["vigencia"]["contrato_audit.cont_ano"] )) {
			$lookupTableLinks["vigencia"]["contrato_audit.cont_ano"] = array();
		}
		$lookupTableLinks["vigencia"]["contrato_audit.cont_ano"]["edit"] = array("table" => "contrato_audit", "field" => "cont_ano", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato_audit.cont_paa_id"] )) {
			$lookupTableLinks[""]["contrato_audit.cont_paa_id"] = array();
		}
		$lookupTableLinks[""]["contrato_audit.cont_paa_id"]["edit"] = array("table" => "contrato_audit", "field" => "cont_paa_id", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato_audit.cont_nit_contra_ta"] )) {
			$lookupTableLinks["contractor_master"]["contrato_audit.cont_nit_contra_ta"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato_audit.cont_nit_contra_ta"]["edit"] = array("table" => "contrato_audit", "field" => "cont_nit_contra_ta", "page" => "edit");
		if( !isset( $lookupTableLinks["contractor_master"] ) ) {
			$lookupTableLinks["contractor_master"] = array();
		}
		if( !isset( $lookupTableLinks["contractor_master"]["contrato_audit.nombre_cont"] )) {
			$lookupTableLinks["contractor_master"]["contrato_audit.nombre_cont"] = array();
		}
		$lookupTableLinks["contractor_master"]["contrato_audit.nombre_cont"]["edit"] = array("table" => "contrato_audit", "field" => "nombre_cont", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_estados"] ) ) {
			$lookupTableLinks["contrato_estados"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_estados"]["contrato_audit.cont_estado"] )) {
			$lookupTableLinks["contrato_estados"]["contrato_audit.cont_estado"] = array();
		}
		$lookupTableLinks["contrato_estados"]["contrato_audit.cont_estado"]["edit"] = array("table" => "contrato_audit", "field" => "cont_estado", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_pre"] ) ) {
			$lookupTableLinks["contrato_pre"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_pre"]["contrato_audit.pre_contnumero"] )) {
			$lookupTableLinks["contrato_pre"]["contrato_audit.pre_contnumero"] = array();
		}
		$lookupTableLinks["contrato_pre"]["contrato_audit.pre_contnumero"]["edit"] = array("table" => "contrato_audit", "field" => "pre_contnumero", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo"] ) ) {
			$lookupTableLinks["contrato_tipo"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo"]["contrato_audit.cont_tipo"] )) {
			$lookupTableLinks["contrato_tipo"]["contrato_audit.cont_tipo"] = array();
		}
		$lookupTableLinks["contrato_tipo"]["contrato_audit.cont_tipo"]["edit"] = array("table" => "contrato_audit", "field" => "cont_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato_audit.cont_codrubro"] )) {
			$lookupTableLinks[""]["contrato_audit.cont_codrubro"] = array();
		}
		$lookupTableLinks[""]["contrato_audit.cont_codrubro"]["edit"] = array("table" => "contrato_audit", "field" => "cont_codrubro", "page" => "edit");
		if( !isset( $lookupTableLinks[""] ) ) {
			$lookupTableLinks[""] = array();
		}
		if( !isset( $lookupTableLinks[""]["contrato_audit.cont_catalogo_presupuestal"] )) {
			$lookupTableLinks[""]["contrato_audit.cont_catalogo_presupuestal"] = array();
		}
		$lookupTableLinks[""]["contrato_audit.cont_catalogo_presupuestal"]["edit"] = array("table" => "contrato_audit", "field" => "cont_catalogo_presupuestal", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"] ) ) {
			$lookupTableLinks["contrato_tipo_unidad"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_tipo_unidad"]["contrato_audit.cont_tipopre"] )) {
			$lookupTableLinks["contrato_tipo_unidad"]["contrato_audit.cont_tipopre"] = array();
		}
		$lookupTableLinks["contrato_tipo_unidad"]["contrato_audit.cont_tipopre"]["edit"] = array("table" => "contrato_audit", "field" => "cont_tipopre", "page" => "edit");
		if( !isset( $lookupTableLinks["interventor_periodos"] ) ) {
			$lookupTableLinks["interventor_periodos"] = array();
		}
		if( !isset( $lookupTableLinks["interventor_periodos"]["contrato_audit.cont_periodicidad"] )) {
			$lookupTableLinks["interventor_periodos"]["contrato_audit.cont_periodicidad"] = array();
		}
		$lookupTableLinks["interventor_periodos"]["contrato_audit.cont_periodicidad"]["edit"] = array("table" => "contrato_audit", "field" => "cont_periodicidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_000"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_000"]["contrato_audit.cont_tipoc"] )) {
			$lookupTableLinks["tparam_tipo_ct_000"]["contrato_audit.cont_tipoc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_000"]["contrato_audit.cont_tipoc"]["edit"] = array("table" => "contrato_audit", "field" => "cont_tipoc", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_001"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_001"]["contrato_audit.cont_modalidad"] )) {
			$lookupTableLinks["tparam_tipo_ct_001"]["contrato_audit.cont_modalidad"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_001"]["contrato_audit.cont_modalidad"]["edit"] = array("table" => "contrato_audit", "field" => "cont_modalidad", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_002"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_002"]["contrato_audit.cont_causalc"] )) {
			$lookupTableLinks["tparam_tipo_ct_002"]["contrato_audit.cont_causalc"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_002"]["contrato_audit.cont_causalc"]["edit"] = array("table" => "contrato_audit", "field" => "cont_causalc", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_contrato"] ) ) {
			$lookupTableLinks["tipo_contrato"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_contrato"]["contrato_audit.cont_tipoproceso"] )) {
			$lookupTableLinks["tipo_contrato"]["contrato_audit.cont_tipoproceso"] = array();
		}
		$lookupTableLinks["tipo_contrato"]["contrato_audit.cont_tipoproceso"]["edit"] = array("table" => "contrato_audit", "field" => "cont_tipoproceso", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_forma_pago"] ) ) {
			$lookupTableLinks["contrato_forma_pago"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_forma_pago"]["contrato_audit.cont_formapago"] )) {
			$lookupTableLinks["contrato_forma_pago"]["contrato_audit.cont_formapago"] = array();
		}
		$lookupTableLinks["contrato_forma_pago"]["contrato_audit.cont_formapago"]["edit"] = array("table" => "contrato_audit", "field" => "cont_formapago", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_audit.cont_acta_liquidacion"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_acta_liquidacion"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_acta_liquidacion"]["edit"] = array("table" => "contrato_audit", "field" => "cont_acta_liquidacion", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_audit.cont_vigencias_futuras"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_vigencias_futuras"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_vigencias_futuras"]["edit"] = array("table" => "contrato_audit", "field" => "cont_vigencias_futuras", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_audit.cont_sigep"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_sigep"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_sigep"]["edit"] = array("table" => "contrato_audit", "field" => "cont_sigep", "page" => "edit");
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"] ) ) {
			$lookupTableLinks["tparam_tipo_ct_rubro"] = array();
		}
		if( !isset( $lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_audit.cont_tipo_rubro"] )) {
			$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_audit.cont_tipo_rubro"] = array();
		}
		$lookupTableLinks["tparam_tipo_ct_rubro"]["contrato_audit.cont_tipo_rubro"]["edit"] = array("table" => "contrato_audit", "field" => "cont_tipo_rubro", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["contrato_audit.cont_munejec"] )) {
			$lookupTableLinks["q_divipola"]["contrato_audit.cont_munejec"] = array();
		}
		$lookupTableLinks["q_divipola"]["contrato_audit.cont_munejec"]["edit"] = array("table" => "contrato_audit", "field" => "cont_munejec", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencias_001"] ) ) {
			$lookupTableLinks["dependencias_001"] = array();
		}
		if( !isset( $lookupTableLinks["dependencias_001"]["contrato_audit.cont_depsup"] )) {
			$lookupTableLinks["dependencias_001"]["contrato_audit.cont_depsup"] = array();
		}
		$lookupTableLinks["dependencias_001"]["contrato_audit.cont_depsup"]["edit"] = array("table" => "contrato_audit", "field" => "cont_depsup", "page" => "edit");
		if( !isset( $lookupTableLinks["dependencia"] ) ) {
			$lookupTableLinks["dependencia"] = array();
		}
		if( !isset( $lookupTableLinks["dependencia"]["contrato_audit.cont_dep"] )) {
			$lookupTableLinks["dependencia"]["contrato_audit.cont_dep"] = array();
		}
		$lookupTableLinks["dependencia"]["contrato_audit.cont_dep"]["edit"] = array("table" => "contrato_audit", "field" => "cont_dep", "page" => "edit");
		if( !isset( $lookupTableLinks["tipo_si_no"] ) ) {
			$lookupTableLinks["tipo_si_no"] = array();
		}
		if( !isset( $lookupTableLinks["tipo_si_no"]["contrato_audit.cont_auditoria"] )) {
			$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_auditoria"] = array();
		}
		$lookupTableLinks["tipo_si_no"]["contrato_audit.cont_auditoria"]["edit"] = array("table" => "contrato_audit", "field" => "cont_auditoria", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_paa.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_paa.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_paa.id_cont_fk"]["edit"] = array("table" => "contrato_paa", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["q_informe_secop_publicados_dbgpaa"] ) ) {
			$lookupTableLinks["q_informe_secop_publicados_dbgpaa"] = array();
		}
		if( !isset( $lookupTableLinks["q_informe_secop_publicados_dbgpaa"]["contrato_paa.paa_id_fk"] )) {
			$lookupTableLinks["q_informe_secop_publicados_dbgpaa"]["contrato_paa.paa_id_fk"] = array();
		}
		$lookupTableLinks["q_informe_secop_publicados_dbgpaa"]["contrato_paa.paa_id_fk"]["edit"] = array("table" => "contrato_paa", "field" => "paa_id_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["global_duracion"] ) ) {
			$lookupTableLinks["global_duracion"] = array();
		}
		if( !isset( $lookupTableLinks["global_duracion"]["q_informe_secop_publicados_dbgpaa.DURACION_ESTIMADA_DMA"] )) {
			$lookupTableLinks["global_duracion"]["q_informe_secop_publicados_dbgpaa.DURACION_ESTIMADA_DMA"] = array();
		}
		$lookupTableLinks["global_duracion"]["q_informe_secop_publicados_dbgpaa.DURACION_ESTIMADA_DMA"]["edit"] = array("table" => "q_informe_secop_publicados_dbgpaa", "field" => "DURACION_ESTIMADA_DMA", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato"] ) ) {
			$lookupTableLinks["contrato"] = array();
		}
		if( !isset( $lookupTableLinks["contrato"]["contrato_modifica_suspension.id_cont_fk"] )) {
			$lookupTableLinks["contrato"]["contrato_modifica_suspension.id_cont_fk"] = array();
		}
		$lookupTableLinks["contrato"]["contrato_modifica_suspension.id_cont_fk"]["edit"] = array("table" => "contrato_modifica_suspension", "field" => "id_cont_fk", "page" => "edit");
		if( !isset( $lookupTableLinks["contrato_modifica_type"] ) ) {
			$lookupTableLinks["contrato_modifica_type"] = array();
		}
		if( !isset( $lookupTableLinks["contrato_modifica_type"]["contrato_modifica_suspension.mod_tipo"] )) {
			$lookupTableLinks["contrato_modifica_type"]["contrato_modifica_suspension.mod_tipo"] = array();
		}
		$lookupTableLinks["contrato_modifica_type"]["contrato_modifica_suspension.mod_tipo"]["edit"] = array("table" => "contrato_modifica_suspension", "field" => "mod_tipo", "page" => "edit");
		if( !isset( $lookupTableLinks["q_divipola"] ) ) {
			$lookupTableLinks["q_divipola"] = array();
		}
		if( !isset( $lookupTableLinks["q_divipola"]["q_001_dashboard_master.cont_munejec"] )) {
			$lookupTableLinks["q_divipola"]["q_001_dashboard_master.cont_munejec"] = array();
		}
		$lookupTableLinks["q_divipola"]["q_001_dashboard_master.cont_munejec"]["edit"] = array("table" => "q_001_dashboard_master", "field" => "cont_munejec", "page" => "edit");
}

?>