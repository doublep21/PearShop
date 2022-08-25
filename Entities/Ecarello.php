<?php
class Ecarello {
	private $quantitaCarello;
	private $prodotti = array();

	public function __construct(int $quantitaCarelloC,Eprodotti $prodottiC){
		//parent::__construct($id_utenteC,$nomeC,$cognomeC); 
		$this->quantitaCarello=$quantitaCarelloC;
		$this->prodotti = $prodottiC;
	}
	
	//----------------GET----------------//
    public function get_quantitaCarello(){
		return $this->quantitaCarello;
	}
	public function get_prodotti(){
		return $this->prodotti;
	}
	
    
    //----------------SET----------------//
    public function set_quantitaCarello($quantitaCarelloC){
		$this->quantitaCarello=$quantitaCarelloC;
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