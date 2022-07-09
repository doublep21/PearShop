<?php
class Amministratore extends Eusers {
	private $admin;
    
	public function __construct($adminA,$id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC){

		$this->$admin=$adminA;	

    parent::set_id_utente($id_utenteC);
    parent::set_nome($nomeC);
    parent::set_cognome($cognomeC);
    parent::set_email($emailC);
    parent::set_password($passwordC);
    
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