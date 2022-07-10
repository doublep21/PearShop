<?php
class Amministratore extends Eusers {
	private $admin;
    
	public function __construct($adminA,$id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC){

		$this->$admin=$adminA;	
    parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC);
    
	}

    public function get_admin(){
		return $this->$admin;
	}
    
    //
    public function set_admin($adminA){
		$this->$admin=$adminA;
	}

}
?>