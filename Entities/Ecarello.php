<?php
class Carello extends Eprodotti{
	private $quantita;
	private $_merci = array();

	public function addMerci($idP,$marcaP,$quantitaP,$prezzoP,$immaginiP) {
        array_push(
			parent::set_id_utente($idP);
			parent::set_marca($marcaP);
			parent::set_quantita($quantitaP);
			parent::set_prezzo($prezzoP);
			parent::set_immagini($immaginiP);
		);
    }
    
	/*public function __construct($quantitaC,$idP,$marcaP,$quantitaP,$prezzoP,$immaginiP){

		$this->$quantita=$quantitaC;

		parent::set_id_utente($idP);
		parent::set_marca($marcaP);
		parent::set_quantita($quantitaP);
        parent::set_prezzo($prezzoP);
        parent::set_immagini($immaginiP);
		
	}*/
	
    public function get_quantita(){
		return $this->$quantita;
	}
    
    //
    public function set_quantita($quantitaC){
		$this->$quantita=$quantitaC;
	}

}