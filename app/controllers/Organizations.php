<?php
namespace controllers;
 /**
 * Controller Organizations
 **/
class Organizations extends ControllerBase{

	public function index(){
		$organizations=DAO::getAll("models\\Organization");
		$this->loadView("Organizations/index.html",["orgas"=>$organisations]);
	}

	public function display($idOrga){
		$orga=DOA::getOne("models\\Organization",$idOrga,true,true);
		$this->loadView('Organizations/display.html',["idorgas"=>$idOrga,"user"=>$truc]);

	}


	protected function user($truc){
		$title="Tous les users";
		$this->loadView('Organizations/user.html');

	}

}
