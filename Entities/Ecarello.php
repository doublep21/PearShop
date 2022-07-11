<?php
class Carello extends Eprodotti{
	private $quantitaCarello;
	private $_merci;
    
	public function __construct($quantitaCarelloC,$idP,$marcaP,$quantitaP,$prezzoP,$immaginiP,Eprodotti $p ){

		$this->$quantitaCarello=$quantitaCarelloC;
		parent::__construct($idP,$marcaP,$quantitaP,$prezzoP,$immaginiP);
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