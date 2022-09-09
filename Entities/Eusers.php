<?php

class Eusers implements JsonSerializable{
	
	/** id utente*/
	private $id_utente;
	/** nome utente*/
    private $nome;
	/** cognome utente*/
    private $cognome;
	/**email utente*/
    private $email;
	/** password utente*/
    private $password;
	/**stato utente*/
	private $stato;
	/** commenti dell'utente utente*/
    private $commenti;
	/** prodotti selezionati dall'utente*/
    private $carrello;
	
	
	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $id_utenteC,string $nomeC,string $cognomeC,string $emailC,string $passwordC,string $statoC ,Ecarrello $carrello, Ecommenti $commenti){
		$this->id_utente=$id_utenteC;	
        $this->nome=$nomeC;
        $this->cognome=$cognomeC;
        $this->email=$emailC;
        $this->password=$passwordC;
		$this->stato=$statoC;
        $this->commenti=$commenti;
        $this->carrello=$carrello;	
	}


	//-------------------------------GET-------------------------------//
	/**
    * @return int
    */
    public function getIDutente():int{
		return $this->id_utente;
	}
	/**
    * @return string
    */
    public function getNome():string{
		return $this->nome;
	}
	/**
    * @return string
    */
    public function getCognome():string{
		return $this->cognome;
	}
	/**
    * @return string
    */
    public function getEmail():string{
		return $this->email;
	}
	/**
    * @return string
    */
    public function getPassword():string{
		return $this->password;
	}
	/**
    * @return int
    */
	public function getStato():int{
		return $this->stato;
	}
	/**
    * @return mixed
    */
	public function getCommenti():Ecommenti{
        return $this->commenti;
    }
	/**
    * @return mixed
    */
    public function getCarrello():Ecarrello{
        return $this->carrello;
    }
	
    //-------------------------------SET-------------------------------//
	/**
    * @param int $id_utente
    */
    public function setIDutente(int $id_utenteC):void{
		$this->id_utente=$id_utenteC;
	}
	/**
    * @param string $nome
    */
    public function setNome(string $nomeC):void{
		$this->nome=$nomeC;
	}
	/**
    * @param string $cognome
    */
    public function setCognome(string $cognomeC):void{
		$this->cognome=$cognomeC;
	}
	/**
    * @param string $email
    */
    public function setEmail(string $emailC):void{
		$this->email=$emailC;
	}
	/**
    * @param string $password
    */
    public function setPassword(string $passwordC):void{
		$this->password=hash('sha256', $passwordC);
	}
	/**
    * @param int $stato
    */
    public function setStato(int $stato): void{
        $this->stato = $stato;
    }
	/**
    * @param mixed $commenti
    */
    public function setCommenti(Ecommenti $commenti): void{
        $this->commenti = $commenti;
    }
	/**
    * @param mixed $carrello
    */
    public function setCarrello(Ecarrello $carrello): void{
        $this->carrello = $carrello;
    }
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id_utente' => $this->getIDutente(),
			'nome' => $this->getNome(),
			'cognome' => $this->getCognome(),
			'email' => $this->getEmail(),
			'password' => $this->getPassword(),
			'stato' => $this->getStato(),
			'commenti' => $this->getCommenti(),
			'carrello' => $this->getCarrello(),
		];
	}
}
?>