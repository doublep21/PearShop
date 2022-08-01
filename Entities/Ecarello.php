<?php
class Carello {
	private int $quantitaCarello;
	private Eprodotti $prodotti;
    
	public function __construct($quantitaCarelloC,$prodottiC){
		//parent::__construct($id_utenteC,$nomeC,$cognomeC); 
		$this->$quantitaCarello=$quantitaCarelloC;
		$this->$prodotti = $prodottiC;
	}
	
	//----------------GET----------------//
    public function get_quantitaCarello(){
		return $this->quantitaCarello;
	}
    
    //----------------SET----------------//
    public function set_quantitaCarello($quantitaCarelloC){
		$this->quantitaCarello=$quantitaCarelloC;
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