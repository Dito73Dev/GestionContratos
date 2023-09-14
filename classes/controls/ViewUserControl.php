<?php
class ViewUserControl extends ViewControl
{
	/**
	 * Set to true, if it is custom user control
	 * @var boolean
	 */
	public $userControl;
	
	public function initUserControl()
	{		
	}
	

	public function addViewPluginJSControl($name)
	{
		if($this->viewFormat == $name)
		{
			$this->AddJSFile("include/runnerJS/controls/".$name.".js", 'include/runnerJS/viewControls/ViewControl.js');
			$this->getJSControl();
			foreach ($this->settings as $settingName => $settingValue)
				$this->addJSControlSetting($settingName, $settingValue);
		}
	}
	/**
	 * Control settings filling
	 */
	public function init()
	{
		$this->userControl = true;
		
		// We need to add this dependencies ViewControl.js - for debug.
		// For build we need to add RunnerAll.js
		//$this->AddJSFile("include/runnerJS/controls/".$this->viewFormat.".js", 'include/runnerJS/viewControls/ViewControl.js');
		
					if($this->container->tName=="contrato" && $this->field=="cont_secop_enlace")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="contrato_attached" && $this->field=="att_file")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup_oe" && $this->field=="evidencia_sup")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup3" && $this->field=="sign_verificacert")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup4" && $this->field=="sign_verificacert")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup4" && $this->field=="hashfirmado")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup_anexos_supervisor" && $this->field=="anexo_file_sup")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup_oe_supervisor" && $this->field=="evidencia_sup")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup_adm" && $this->field=="sign_verificacert")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup_adm" && $this->field=="hashfirmado")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="informe_intersup_anexos_adm" && $this->field=="anexo_file_sup")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="q_consulta_op" && $this->field=="op")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="contrato_ov" && $this->field=="cont_secop_enlace")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="contrato_attached_ov" && $this->field=="att_file")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
					if($this->container->tName=="contrato_audit" && $this->field=="cont_secop_enlace")
		{
			$this->settings["option1"] = "value";
$this->settings["option2"] = 0;;
		}	
		$this->addViewPluginJSControl("ViewQRCode");
	}

	/**
	 * Get the field's content that will be exported
	 * @prarm &Array data
	 * @prarm String keylink
	 * @return String
	 */
	public function getExportValue(&$data, $keylink = "", $html = false )
	{
		return $data[ $this->field ];
	}
	
	/**
	 * Check for need to load the javascript files.
	 * Javascript files for user controls are always loaded.
	 * @return boolean
	 */
	public function neededLoadJSFiles() 
	{
		return true;
	}
	public function getPdfValue(&$data, $keylink = "")
	{
		return "''";
	}

}
?>