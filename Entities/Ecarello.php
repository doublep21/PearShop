<?php
class Carello extends Eusers {
	private $quantitaCarello;
	private $_merci;
    
	public function __construct($quantitaCarelloC,$idP){

		$this->$quantitaCarello=$quantitaCarelloC;
		
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