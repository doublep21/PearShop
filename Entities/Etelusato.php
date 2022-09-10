<?php
class Etelusato extends Eprodotti implements JsonSerializable{
	
	/** condizioni specificate dall'utente*/
	private $condizioni;
	/** data acquisto telefono*/
    private $data_aquisto;
	/** prezzo telefono usato*/
    private $prezzo_us;
	/** imei del telefono*/
    private $imei;
	/** condizoni schermo*/
    private $cond_schermo;
	/** condizioni batteria*/
    private $cond_batteria;
	/** condizioni usura*/
    private $cond_usura;
	/** prezzo a cui e stato acquistato il prodotto*/
    private $prezzo_aq;
	/** immagini telefono usato*/
	private $immagine;


	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP,Eimmagine $immagineI,string $condizioniT,?string $data_aquistoT,float $prezzo_usT,int $imeiT,int $cond_schermoT,int $cond_batteriaT, int $cond_usuraT,float $prezzo_aqT,){
		parent::__construct($idP,$marcaP,$descrizioneP,$quantitàP,$prezzoP,$elenco_commentiP,$immagineI);
		$this->condizioni=$condizioniT;	
        $this->data_aquisto=$data_aquistoT;	
        $this->prezzo_us=$prezzo_usT;
        $this->imei=$imeiT;
        $this->cond_schermo=$cond_schermoT;
        $this->cond_batteria=$cond_batteriaT;	
        $this->cond_usura=$cond_usuraT;
        $this->prezzo_aq=$prezzo_aqT;  
	}


	//-------------------------------GET-------------------------------//
    /**
    * @return string
    */
    public function getCondizioni():string{
        return $this->condizioni;
    }
	/**
    * @return string|null
    */
    public function getDataAquisto():?string{
        return $this->data_aquisto;
    }
	/**
    * @return float
    */
    public function getPrezzoUs():float{
        return $this->prezzo_us;
    }
	/**
    * @return int
    */
    public function getImei():int{
        return $this->imei;
    }
	/**
    * @return int
    */
    public function getCondSchermo():int{
        return $this->cond_schermo;
    }
	/**
    * @return int
    */
    public function getCondBatteria():int{
        return $this->cond_batteria;
    }
	/**
    * @return int
    */
    public function getCondUsura():int{
        return $this->cond_usura;
    }
	/**
    * @return float
    */
    public function getPrezzoAq():float{
        return $this->prezzo_aq;
    }
	/**
     * @return mixed
     */
    public function getElencoImg():Eimagine{
        return $this->elenco_commenti;
    }
	
	
	//-------------------------------SET-------------------------------//
    /**
    * @param string $condizioni
    */
    public function setCondizioni(string $condizioni):void{
        $this->condizioni = $condizioni;
    }
    /**
    * @param string|null $data_aquisto
    */
    public function setDataAquisto(?string $data_aquisto):void{
        $this->data_aquisto = $data_aquisto;
    }
    /**
    * @param float $prezzo_us
    */
    public function setPrezzoUs(float $prezzo_us):void{
        $this->prezzo_us = $prezzo_us;
    }
    /**
    * @param int $imei
    */
    public function setImei(int $imei):void{
        $this->imei = $imei;
    }
    /**
    * @param int $cond_schermo
    */
    public function setCondSchermo(int $cond_schermo): void{
        $this->cond_schermo = $cond_schermo;
    }
    /**
     * @param int $cond_batteria
     */
    public function setCondBatteria(int $cond_batteria): void{
        $this->cond_batteria = $cond_batteria;
    }
    /**
    * @param int $cond_usura
    */
    public function setCondUsura(int $cond_usura): void{
        $this->cond_usura = $cond_usura;
    }
    /**
    * @param float $prezzo_aq
    */
    public function setPrezzoAq(float $prezzo_aq): void{
        $this->prezzo_aq = $prezzo_aq;
    }
	/**
     * @param mixed $immagini
     */
    public function setElencoImg(Eimagine $immagini):void{
        $this->immagini = $immagini;
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
			'condizioni' => $this->getCondizioni(),
			'data_aquisto' => $this->getDataAquisto(),
			'prezzo_us' => $this->getPrezzoUs(),
			'imei' => $this->getImei(),
			'cond_schermo' => $this->getCondSchermo(),
			'cond_batteria' => $this->getCondBatteria(),
			'cond_usura' => $this->getCondUsura(),
			'prezzo_aq' => $this->getPrezzoAq(),
		];
	}	


}
?>