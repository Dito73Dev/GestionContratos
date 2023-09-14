<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "dbct_at_localhost";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		$db = &Security::dbProvider();		
		if( $db ) {
			return $db["table"]["connId"];
		}
		return "";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->byId( "dbct_at_localhost" );
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "dbusers_at_localhost";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "dbct_at_localhost";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "dbct_at_localhost";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["global_users"] = "dbusers_at_localhost";
		$connectionsIds["contrato"] = "dbct_at_localhost";
		$connectionsIds["admin_rights"] = "dbusers_at_localhost";
		$connectionsIds["admin_members"] = "dbusers_at_localhost";
		$connectionsIds["admin_users"] = "dbusers_at_localhost";
		$connectionsIds["contractor_master"] = "dbct_at_localhost";
		$connectionsIds["tipo_docidentidad"] = "dbct_at_localhost";
		$connectionsIds["tipo_banco"] = "dbct_at_localhost";
		$connectionsIds["tipo_cta_banco"] = "dbct_at_localhost";
		$connectionsIds["global_status"] = "dbusers_at_localhost";
		$connectionsIds["divipola"] = "dbusers_at_localhost";
		$connectionsIds["contractor_master_vinc"] = "dbct_at_localhost";
		$connectionsIds["vigencia"] = "dbct_at_localhost";
		$connectionsIds["contrato_tipo"] = "dbct_at_localhost";
		$connectionsIds["contrato_tipo_unidad"] = "dbct_at_localhost";
		$connectionsIds["interventor_periodos"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_000"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_001"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_002"] = "dbct_at_localhost";
		$connectionsIds["tipo_contrato"] = "dbct_at_localhost";
		$connectionsIds["contrato_forma_pago"] = "dbct_at_localhost";
		$connectionsIds["tipo_si_no"] = "dbct_at_localhost";
		$connectionsIds["contrato_estados"] = "dbct_at_localhost";
		$connectionsIds["contrato_pre"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached_type"] = "dbct_at_localhost";
		$connectionsIds["polizas_master"] = "dbct_at_localhost";
		$connectionsIds["polizas_tipo"] = "dbct_at_localhost";
		$connectionsIds["polizas_aseguradoras"] = "dbct_at_localhost";
		$connectionsIds["info_secop"] = "dbct_at_localhost";
		$connectionsIds["interventor_interno"] = "dbct_at_localhost";
		$connectionsIds["tparam_habilita"] = "dbct_at_localhost";
		$connectionsIds["contrato_cdp"] = "dbct_at_localhost";
		$connectionsIds["dependencia"] = "edl_at_localhost";
		$connectionsIds["contrato_rp"] = "dbct_at_localhost";
		$connectionsIds["dependencias_001"] = "edl_at_localhost";
		$connectionsIds["tparam_tipo_ct_regimen_tribut"] = "dbct_at_localhost";
		$connectionsIds["cargo"] = "edl_at_localhost";
		$connectionsIds["tparam_sn"] = "edl_at_localhost";
		$connectionsIds["informe_intersup_plan_pagos"] = "dbct_at_localhost";
		$connectionsIds["q_001_dashboard"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_estado"] = "dbct_at_localhost";
		$connectionsIds["informe_tipo"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_tiporubro"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_estado"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_tipocont"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_dependencia"] = "dbct_at_localhost";
		$connectionsIds["contrato_chart_supjer"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipo_ct_rubro"] = "dbct_at_localhost";
		$connectionsIds["q_001_dashboard_info"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores"] = "dbct_at_localhost";
		$connectionsIds["q_000_control_informes"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_plan_pagos_st"] = "dbct_at_localhost";
		$connectionsIds["contrato_oe"] = "dbct_at_localhost";
		$connectionsIds["q_oe_ordinal"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores1"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores2"] = "dbct_at_localhost";
		$connectionsIds["q_divipola"] = "dbusers_at_localhost";
		$connectionsIds["informe_intersup_oe"] = "dbct_at_localhost";
		$connectionsIds["tparam_sn_oe"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_type"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_prorroga"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_cesion"] = "dbct_at_localhost";
		$connectionsIds["contrato_modifica_track"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores3"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup3"] = "dbct_at_localhost";
		$connectionsIds["contrato_dependencia"] = "dbct_at_localhost";
		$connectionsIds["global_users_sup"] = "dbusers_at_localhost";
		$connectionsIds["informe_intersup4"] = "dbct_at_localhost";
		$connectionsIds["nomina_cont_meses"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_anexos_supervisor"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_oe_borrar"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_oe_supervisor"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup2"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup2r"] = "dbct_at_localhost";
		$connectionsIds["q_gestion_infosup_pagos"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_adm"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_cxc_adm"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_oe_adm"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_anexos_adm"] = "dbct_at_localhost";
		$connectionsIds["informe_intersup_plan_pagos_adm"] = "dbct_at_localhost";
		$connectionsIds["q_consulta_op"] = "dbct_at_localhost";
		$connectionsIds["q_global_supervisores_activos_group"] = "dbct_at_localhost";
		$connectionsIds["q_bandejaentrada_supervisores_consulta"] = "dbct_at_localhost";
		$connectionsIds["contrato_ov"] = "dbct_at_localhost";
		$connectionsIds["contrato_attached_ov"] = "dbct_at_localhost";
		$connectionsIds["q_s_ctrl_pagado_001"] = "dbct_at_localhost";
		$connectionsIds["q_s_ctrl_pagado_001 Report"] = "dbct_at_localhost";
		$connectionsIds["contrato_audit"] = "dbct_at_localhost";
		$connectionsIds["contrato_paa"] = "dbct_at_localhost";
		$connectionsIds["q_informe_secop_publicados_dbgpaa"] = "dbgpaa_at_172_18_0_249";
		$connectionsIds["global_duracion"] = "dbgpaa_at_172_18_0_249";
		$connectionsIds["contrato_modifica_suspension"] = "dbct_at_localhost";
		$connectionsIds["tparam_tipopago"] = "dbct_at_localhost";
		$connectionsIds["q_001_dashboard_master"] = "dbct_at_localhost";
		$connectionsIds["consulta_producto"] = "dbsep_at_127_0_0_1";
		$connectionsIds["consulta_catalogo"] = "dbsep_at_127_0_0_1";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>