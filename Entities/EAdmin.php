<?php
require __DIR__ . '/Eusers.php';
class EAdmin extends Eusers implements JsonSerializable{
	
    /** privilegi di amministratore */
    private $privilegi;


    //-------------------------------COSTRUTTORE-------------------------------//
    public function __construct(int $id_utenteC,string $nomeC,string $cognomeC,string $emailC,string $passwordC,Ecarrello $carrello, Ecommenti $commenti,int $privilegi){
        parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC,$carrello,$commenti);
        $this->privilegi = $privilegi;
    }
	
	//-------------------------------GET-------------------------------//
    /**
    * @return mixed
    */
    public function getPrivilegi():int{
        return $this->privilegi;
    }
	
	
	//-------------------------------SET-------------------------------//
    /**
    * @param mixed $privilegi
    */
    public function setPrivilegi(int $privilegi): void{
        $this->privilegi = $privilegi;
    }
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id_utente' => $this->getIDutente(),
			'nome' => $this->getNome(),
			'cognome' => $this->getCognome(),
			'email' => $this->getEmail(),
			'password' => $this->getPassword(),
			'privilegi' => $this->getPrivilegi(),
		];
	}
}