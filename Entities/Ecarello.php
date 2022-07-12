<?php
class Carello extends Eusers {
	private $quantitaCarello;
	private $merci = array();
    
	public function __construct($quantitaCarelloC,$id_utenteC,$nomeC,$cognomeC){
		parent::__construct($id_utenteC,$nomeC,$cognomeC); 
		$this->$quantitaCarello=$quantitaCarelloC;
		$this->$merci = array();
	}
	
    public function get_quantitaCarello(){
		return $this->$quantitaCarello;
	}
    
    //
    public function set_quantitaCarello($quantitaCarelloC){
		$this->$quantitaCarello=$quantitaCarelloC;
	}
	
	//----da verificare ----//
	public function addProdotto(Eprodotti $agg) {
		array_push($this->merci, $agg);
    }
	public function removeProdotto($pos) {
        unset($this->merci[$pos]);
        $this->merci=array_values($this->merci);
    }

}
?>