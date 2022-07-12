<?php
class Commenti extends Eusers {
	private $rating;
	private $commento
    private $img = array(
		"id" => "",
		"nome" => "",
		"dimensione" => "",
		"tipo" => ""
	);

	public function __construct($ratingC,$commentoC,$imgC,$id_utenteC,$nomeC,$cognomeC,$emailC){
		parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC); 
		$this->$rating=$ratingC;	
		$this->$commento=$commentoC;	
		$this->$img=$imgC;	
		
	}
	
    public function get_rating(){
		return $this->$rating;
	}
	public function get_commento(){
		return $this->$commento;
	}
	public function get_immagini(){
		return $this->$immagini;
	}
    
    //
    public function set_rating($ratingC){
		$this->$rating=$ratingC;
	}
	
}
?>