<?php
class Commenti {
	private int $rating;
	private String $commento
    private String $img = array(
		"id" => "",
		"nome" => "",
		"dimensione" => "",
		"tipo" => ""
	);

	public function __construct($ratingC,$commentoC,$imgC){
		//parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC); 
		$this->$rating=$ratingC;	
		$this->$commento=$commentoC;	
		$this->$img=$imgC;	
		
	}
	
	//----------------GET----------------//
    public function get_rating(){
		return $this->rating;
	}
	public function get_commento(){
		return $this->commento;
	}
	public function get_immagini(){
		return $this->immagini;
	}
    
    //----------------SET----------------//
    public function set_rating($ratingC){
		$this->rating=$ratingC;
	}
}
?>