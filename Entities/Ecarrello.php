<?php
class Ecarrello implements JsonSerializable{
	
	/** quantità prodotti*/
	private $quantitaCarrello;
	/** irodotti nel carello*/
	private $prodotti;


	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $quantitaCarrelloC,Eprodotti $prodottiC){
		$this->quantitaCarrello=$quantitaCarrelloC;
		$this->prodotti = $prodottiC;
	}
	
	
	//-------------------------------GET-------------------------------//
	/**
    * @return int
    */
    public function getQuantita():int{
		return $this->quantitaCarello;
	}
	/**
    * @return string
    */
	public function getProdotti():Eprodotti{
		return $this->prodotti;
	}
	
    
   //-------------------------------SET-------------------------------//
	/**
    * @param mixed $quantitaCarrello
    */
    public function setQuantita(int $quantitaCarrelloC):void{
		$this->quantitaCarrello=$quantitaCarrelloC;
	}
	/**
    * @param mixed $prodotti
    */
	public function setProdotti(Eprodotti $prodottiC):void{
		$this->prodotti=$prodottiC;
	}
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'quantitaCarrello' => $this->getQuantita(),
			'prodotti' => $this->getProdotti(),
		];
	}	
}
?>