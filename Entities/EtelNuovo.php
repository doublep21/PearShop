<?php
require __DIR__ . '/Eprodotti.php';
class EtelNuovo extends Eprodotti implements JsonSerializable{
	
    /** Costruttore della classe Telefono Nuovo
    * @param int $id del prodotto
    * @param string $marcaP associata al prodotto nuovo
    * @param string $descrizioneP del prodotto
    * @param int $quantitàP del prodotto in possesso del venditore
    * @param float $prezzoP del prodotto
    * @param Ecommenti $elenco_commentiP
    * @param Eimmagine $immagineI galleria di immagini del prodotto
    */
	
	
	//-------------------------------COSTRUTTORE-------------------------------//
    public function __construct(int $id, string $marcaP, string $descrizioneP, int $quantitàP, float $prezzoP, Ecommenti $elenco_commentiP, Eimmagine $immagineI){
        parent::__construct($idP,$marcaP,$descrizioneP,$quantitàP,$prezzoP,$elenco_commentiP,$immagineI);
    }

	
	//-------------------------------GET-------------------------------//
    /**
    * @return mixed
    */
    public function getId():int{
        return parent::getId();
    }
	/**
     * @return string
     */
    public function getMarca():string{
        return parent::getMarca();
    }
	/**
    * @return string
    */
    public function getDescrizione():string{
        return parent::getDescrizione();
    }
	/**
    * @return int
    */
    public function getQuantità():int{
        return parent::getQuantità();
    }
	/**
    * @return float
    */
    public function getPrezzo():float{
        return parent::getPrezzo();
    }
	/**
    * @return mixed
    */
    public function getImmagini():Eimmagine{
        return parent::getImmagini();
    }
	/**
    * @return mixed
    */
    public function getElencoCommenti(): Ecommenti{
        return parent::getElencoCommenti();
    }
	

	//-------------------------------SET-------------------------------//
    /**
    * @param int $id
    */
    public function setId(int $id):void{
        parent::setId($id);
    }
    /**
    * @param string $marca
    */
    public function setMarca(string $marca):void{
        parent::setMarca($marca);
    }
    /**
    * @param string $descrizione
    */
    public function setDescrizione(string $descrizione):void{
        parent::setDescrizione($descrizione);
    }
    /**
    * @param int $quantità
    */
    public function setQuantità(int $quantità):void{
        parent::setQuantità($quantità);
    }
    /**
    * @param float $prezzo
    */
    public function setPrezzo(float $prezzo):void{
        parent::setPrezzo($prezzo);
    }
    /**
    * @param string $immagini
    */
    public function setImmagini(Eimmagine $immagini):void{
        parent::setImmagini($immagini);
    }
    /**
    * @param Ecommenti $elenco_commenti
    */
    public function setElencoCommenti(Ecommenti $elenco_commenti):void{
        parent::setElencoCommenti($elenco_commenti);
    }
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id' => $this->getId(),
			'marca' => $this->getMarca(),
			'descrizione' => $this->getDescrizione(),
			'quantità' => $this->getQuantità(),
			'prezzo' => $this->getPrezzo(),
			'immagine' => $this->getElencoImg(),
		];
	}	
}