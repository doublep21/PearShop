<?php
class Utente {
	private $id_utente;
    private $nome;
    private $cognome;
    private $email;
    private $password;
	private $ordini = array(
		"id" => "",
		"data" => ""
	);
	private $carello = array(
		"id" => "",
		"data" => ""
	);
	
	public function __construct($id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC,$ordiniC,$carelloC){
		$this->$id_utente=$id_utenteC;	
        $this->$nome=$nomeC;
        $this->$cognome=$cognomeC;
        $this->$email=$emailC;
        $this->$password=$passwordC;
		$this->$ordini=$ordiniC;
		$this->$carello=$carello;
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
    public function get_password(){
		return $this->$id_password;
	}
	public function get_ordini(){
		return $this->$ordini;
	}
	public function get_carello(){
		return $this->$carello;
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
    public function set_password($passwordC){
		$this->$password=hash('sha256', $passwordC);
	}
	public function set_ordini($ordiniC){
		$this->$ordini=$ordiniC;
	}
	public function set_carello($carelloC){
		$this->$carello=$carelloC;
	}
}
?>