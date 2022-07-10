<?php
class Carello extends Eprodotti{
	private $quantita;
	private $merci = array(
		"id" => "",
		"marca" => "",
		"quantita" => "",
		"prezzo" => "",
	);
    
	public function __construct($quantitaC,$idP,$marcaP,$quantitaP,$prezzoP,$immaginiP){

		$this->$quantita=$quantitaC;
		parent::--__construct($idP,$marcaP,$quantitaP,$prezzoP,$immaginiP);

	}
	
    public function get_quantita(){
		return $this->$quantita;
	}
    
    //
    public function set_quantita($quantitaC){
		$this->$quantita=$quantitaC;
	}

}
?>