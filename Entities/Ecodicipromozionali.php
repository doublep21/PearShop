<?php
class Ecodicipromozionali implements JsonSerializable{
	
	/** id codice promozionale*/
	private $idcod;
	/** codice*/
    private $codice;
	/** data scadenza codice*/
	private $data_scadenza;
	/** toggle*/
	private $toggle;
	/** numero di volte che il codice viene utilizzato*/
	private $utilizzi;
	
	
	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $idcodC,string $codiceC,?string $data_scadenzaC,bool $toggleC,int $utilizziC){
		$this->idcod=$idcodC;	
        $this->codice=$codiceC;
		$this->data_scadenza=$data_scadenzaC;
		$this->toggle=$toggleC;
		$this->utilizzi=$utilizziC;   
	}


	//-------------------------------GET-------------------------------//
    /**
    * @return int
    */
    public function getIdcod():int{
        return $this->idcod;
    }
	/**
    * @return string
    */
    public function getCodice():string{
        return $this->codice;
    }
	/**
    * @return string|null
    */
    public function getDataScadenza():?string{
        return $this->data_scadenza;
    }
	/**
    * @return bool
    */
    public function getToggle():bool{
        return $this->toggle;
    }
	/**
    * @return bool
    */
    public function getUtilizzi():int{
        return $this->utilizzi;
    }
	
	
	//-------------------------------SET-------------------------------//
    /**
    * @param int $idcod
    */
    public function setIdcod(int $idcod): void{
        $this->idcod = $idcod;
    }
    /**
    * @param string $codice
    */
    public function setCodice(string $codice): void{
        $this->codice = $codice;
    }
    /**
    * @param string|null $data_scadenza
    */
    public function setDataScadenza(?string $data_scadenza): void{
        $this->data_scadenza = $data_scadenza;
    }
    /**
    * @param bool $toggle
    */
    public function setToggle(bool $toggle): void{
        $this->toggle = $toggle;
    }
    /**
    * @param bool $utilizzi
    */
    public function setUtilizzi(int $utilizzi): void{
        $this->utilizzi = $utilizzi;
    }
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'idcod' => $this->getIdcod(),
			'codice' => $this->getCodice(),
			'data_scadenza' => $this->getDataScadenza(),
			'toggle' => $this->getToggle(),
			'utilizzi' => $this->getUtilizzi(),
		];
	}	
}
?>