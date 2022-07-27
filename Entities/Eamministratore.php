<?php

class Amministratore extends Eusers{
	private $admin;
    
	public function __construct($adminA,$id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC){	
    	parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC);
    	$this->admin=$adminA;
	}

	//----------------GET----------------//
    public function get_admin(){
		return $this->admin;
	}
    
    //----------------SET----------------//
    public function set_admin($adminA){
		$this->admin=$adminA;
	}
}

?>