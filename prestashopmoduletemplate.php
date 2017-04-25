<?php
if (!defined('_PS_VERSION_'))
	exit;

class pstemplate extends Module
{
	public function __construct()
	{
		$this->name = 'prestashopmoduletemplate';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->auther = 'Lee Burridge';
		$this->need_instance = 0;
		$this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
		$this->bootstrap = true;
		
		parent::__construct();
		
		$this->displayName = $this->l('My Module');
		$this->description = $this->l('Descriptopm of module.');
		
		$this->confirmUninstall = $this->l('Are you sure you want to uninstall?');
		
		if (!Configuration::get('MYMODULE_NAME'))
			$this->warning = $this->l('No name provided');
	}
}
