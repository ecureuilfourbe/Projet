<?php
namespace controllers;
use Ubiquity\controllers\admin\UbiquityMyAdminBaseController;

class Admin extends UbiquityMyAdminBaseController{


	public function display($idOrga){
		
		$this->loadView('Admin/display.html');

	}

}
