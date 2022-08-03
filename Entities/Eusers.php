<?php

class Eusers  {
	private $id_utente;
    private $nome;
    private $cognome;
    private $email;
    private $password;
	private $stato;
	
	public function __construct(int $id_utenteC,string $nomeC,string $cognomeC,string $emailC,string $passwordC,string $statoC){
		$this->id_utente=$id_utenteC;	
        $this->nome=$nomeC;
        $this->cognome=$cognomeC;
        $this->email=$emailC;
        $this->password=$passwordC;
		$this->stato=$statoC;
		
	}

	//----------------GET----------------//
    public function get_id_utente(){
		return $this->id_utente;
	}
    public function get_nome(){
		return $this->nome;
	}
    public function get_cognome(){
		return $this->cognome;
	}
    public function get_email(){
		return $this->email;
	}
    public function get_password(){
		return $this->password;
	}
	public function get_stato(){
		return $this->stato;
	}

	
    //----------------SET----------------//
    public function set_id_utente($id_utenteC){
		$this->id_utente=$id_utenteC;
	}
    public function set_nome($nomeC){
		$this->nome=$nomeC;
	}
    public function set_cognome($cognomeC){
		$this->cognome=$cognomeC;
	}
    public function set_email($emailC){
		$this->email=$emailC;
	}
    public function set_password($passwordC){
		$this->password=hash('sha256', $passwordC);
	}
	
}
?>