<?php
class Ecarrello {
	private $quantitaCarrello;
	private $prodotti;

	public function __construct(int $quantitaCarrelloC,Eprodotti $prodottiC){
		//parent::__construct($id_utenteC,$nomeC,$cognomeC); 
		$this->quantitaCarrello=$quantitaCarrelloC;
		$this->prodotti = $prodottiC;
	}
	
	//----------------GET----------------//
    public function get_quantitaCarrello(){
		return $this->quantitaCarello;
	}
	public function get_prodotti(){
		return $this->prodotti;
	}
	
    
    //----------------SET----------------//
    public function set_quantitaCarello($quantitaCarrelloC){
		$this->quantitaCarrello=$quantitaCarrelloC;
	}
	public function set_prodotti($prodottiC){
		$this->prodotti=$prodottiC;
	}
	
	//----------------ADD-REMOVE----------------//
	/*
	public function addProdotto(Eprodotti $agg) {
		array_push($this->merci, $agg);
    }
	public function removeProdotto($pos) {
        unset($this->merci[$pos]);
        $this->merci=array_values($this->merci);
    }
	*/
}
?>