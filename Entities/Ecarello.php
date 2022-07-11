<?php
class Carello {
	private $quantitaCarello;
	private $_merci;
    
	public function __construct($quantitaCarelloC,$idP,Eprodotti $p ){

		$this->$quantitaCarello=$quantitaCarelloC;
		$this->_merci = new Eprodotti ($p->get_id(), $p->get_marca(), $p->get_quantita(), $p->get_prezzo());

	}
	
    public function get_quantitaCarello(){
		return $this->$quantitaCarello;
	}
    
    //
    public function set_quantitaCarello($quantitaCarelloC){
		$this->$quantitaCarello=$quantitaCarelloC;
	}

}
?>