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

	public function addMerci(Eprodotti $agg) {
		array_push($this->merci, $agg);
    }

}
?>