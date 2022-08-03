<?php
class Ecommenti {
	private $rating;
	private $testo;
    private $img = array(
		"id" => "",
		"nome" => "",
		"dimensione" => "",
		"tipo" => ""
	);

	public function __construct(int $ratingC,string $testoC,string $imgC){
		//parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC); 
		$this->rating=$ratingC;	
		$this->testo=$testoC;	
		$this->img=$imgC;	
		
	}
	
	//----------------GET----------------//
    public function get_rating(){
		return $this->rating;
	}
	public function get_testo(){
		return $this->testo;
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