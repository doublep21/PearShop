<?php
class Commenti extends Eusers implements JsonSerializable{
	private $rating;
	private $commento
    private $img = array(
		"id" => "",
		"nome" => "",
		"dimensione" => "",
		"tipo" => ""
	);
	private $user = array(
		"id" => "",
		"nome" => "",
		"cognome" => "",
	);


	public function __construct($ratingC,$commentoC,$imgC,$userC,$id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC,$ordiniC,$carelloC){
		parent::__construct($id_utenteC,$nomeC,$cognomeC,$emailC,$passwordC,$ordiniC,$carelloC); 
		$this->$rating=$ratingC;	
		$this->$$commento=$$commentoC;	
		$this->$$img=$$imgC;	
		$this->$$user=$$userC;
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
	
	/*public function jsonSerialize() : array
    {
        $result = array(
            "rating" => $this->rating,
            "commento" => $this->commento,
			"img" => $this->img,
			"user" => $this->user,			
        );
        return $result;
    }*/
}
?>