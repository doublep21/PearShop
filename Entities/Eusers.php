<?php
class Utente {
	private $id_utente;
    private $nome;
    private $cognome;
    private $email;
    private $indirizzo;
    private $password;
	
	public function __construct($id_utenteC,$nomeC,$cognomeC,$emailC,$indirizzoC,$passwordC){
		$this->$id_utente=$id_utenteC;	
        $this->$nome=$nomeC;
        $this->$cognome=$cognomeC;
        $this->$email=$emailC;
        $this->$indirizzo=$indirizzoC;
        $this->$password=$passwordC;
	}
	
    public function get_id_utente(){
		return $this->$id_utente;
	}
    public function get_nome(){
		return $this->$nome;
	}
    public function get_cognome(){
		return $this->$cognome;
	}
    public function get_email(){
		return $this->$email;
	}
    public function get_indirizzo(){
		return $this->$indirizzo;
	}
    public function get_password(){
		return $this->$id_password;
	}
    //
    public function set_id_utente($id_utenteC){
		$this->$id_utente=$id_utenteC;
	}
    public function set_nome($nomeC){
		$this->$nome=$nomeC;
	}
    public function set_cognome($cognomeC){
		$this->$cognome=$cognomeC;
	}
    public function set_email($emailC){
		$this->$email=$emailC;
	}
    public function set_indirizzo($indirizzoC){
		$this->$indirizzo=$indirizzoC;
	}
    public function set_password($passwordC){
		$this->$password=hash('sha256', $passwordC);
	}

}