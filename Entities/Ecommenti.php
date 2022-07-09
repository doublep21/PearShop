<?php
class Commenti{
	private $rating;
    
	public function __construct($ratingC,){
		$this->$rating=$ratingC;	
	}
	
    public function get_rating(){
		return $this->$rating;
	}
    
    //
    public function set_rating($ratingC){
		$this->$rating=$ratingC;
	}

}
?>