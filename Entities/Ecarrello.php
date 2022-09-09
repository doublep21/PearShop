<?php
class Ecarrello implements JsonSerializable{
	
	/** id carrello*/
	private $id_carrello;
	/** quantità prodotti*/
	private $quantitaCarrello;
	/** irodotti nel carello*/
	private $prodotti;


	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $id_carrelloC,int $quantitaCarrelloC,Eprodotti $prodottiC){
		$this->id_carrello=$id_carrelloC;
		$this->quantitaCarrello=$quantitaCarrelloC;
		$this->prodotti=$prodottiC;
	}
	
	
	//-------------------------------GET-------------------------------//
	/**
    * @return int
    */
    public function getIDcarrello():int{
		return $this->id_carrello;
	}
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
     * @param int $quantitaCarrello
     */
    public function setQuantitaCarrello(int $quantitaCarrello): void
    {
        $this->quantitaCarrello = $quantitaCarrello;
    }
    /**
     * @param int $id_carrello
     */
    public function setIdCarrello(int $id_carrello): void
    {
        $this->id_carrello = $id_carrello;
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
			'id_carrello' => $this->getIDcarrello(),
			'quantitaCarrello' => $this->getQuantita(),
			'prodotti' => $this->getProdotti(),
		];
	}	
}
?>