<?php
class Eordine implements JsonSerializable{
	
	/** prezzo prodotti*/
	private $prezzo_tot;
	/** dati spedizione*/
    private $ind_spedizione;
	/** data e l'ora dell'ordine*/
    private $data_ora;
	/** codice promozionale per lo sconto*/
	private $codice_promozionale;
	/** elenco prodotti*/
	private $carrello;
	
	
	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(float $prezzo_totO,string $ind_spedizioneO,?string $data_oraO, Ecodicipromozionali $codice_promozionaleO,Ecarrello $carrelloO){
		$this->prezzo_tot=$prezzo_totO;	
        $this->ind_spedizione=$ind_spedizioneO;	
        $this->data_ora=$data_oraO;
		$this->codice_promozionale=$codice_promozionaleO;	
		$this->carrello=$carrelloO;		
	}
	
	
	//-------------------------------GET-------------------------------//
	/**
    * @return float 
    */
    public function getPrezzoT():float{
		return $this->prezzo_tot;
	}
	/**
    * @return string 
    */
    public function getIndS():string{
		return $this->ind_spedizione;
	}
	/**
    * @return string 
    */
    public function getDataOra():?string{
		return $this->data_orat;
	}
	/**
    * @return mixed 
    */
	public function getCodiceprom():Ecodicipromozionali{
		return $this->codice_promozionale;
	}
	/**
    * @return mixed 
    */
    public function getCarrello():Ecarrello{
		return $this->carrello;
	}
	
	
	//-------------------------------SET-------------------------------//
	/**
    * @param int $prezzo_tot 
    */
    public function setPrezzoT(float $prezzo_totO):void{
		$this->prezzo_tot=$prezzo_totO;
	}
	/**
    * @param int $ind_spedizione 
    */
    public function setIndS(string $ind_spedizioneO):void{
		$this->ind_spedizione=$ind_spedizioneO;
	}
	/**
    * @param int $data_ora 
    */
    public function setDataOra(?string $data_oraO):void{
		$this->data_ora=$data_oraO;
	}
	/**
    * @param int $codice_promozionale 
    */
	public function setCodiceprom(Ecodicipromozionali $codice_promozionaleO):void{
		$this->codice_promozionale=$codice_promozionaleO;
	}
	/**
    * @param int $carrello 
    */
	public function setCarrello(Ecarrello $carrelloO):void{
		$this->carrello=$carrelloO;
	}
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'prezzo_tot' => $this->getPrezzoT(),
			'ind_spedizione' => $this->getIndS(),
			'data_ora' => $this->getDataOra(),
			'codice_promozionale' => $this->getCodiceprom(),
			'carrello' => $this->getCarrello(),
		];
	}	
}
?>