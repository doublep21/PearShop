<?php
class Ecommenti implements JsonSerializable{
	
	/** id commento*/
    private $id;
	/** valutazione del prodotto*/
	private $rating;
	/** l'opinione dell'utente*/
	private $testo;
	/** immagine del prodotto acquistato*/
    private $img;


	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $idC,int $ratingC,string $testoC, Eimmagine $imgC){
        $this->id = $idC;
		$this->rating=$ratingC;	
		$this->testo=$testoC;	
		$this->img=$imgC;		
	}
	
	
	//-------------------------------GET-------------------------------//
	/**
    * @return int
    */
    public function getId():int{
        return $this->id;
    }
	/**
    * @return int
    */
    public function getRating():int{
		return $this->rating;
	}
	/**
    * @return string
    */
	public function getTesto():string{
		return $this->testo;
	}
    /**
    * @return mixed
    */
	public function getImmagini():Eimmagini{
		return $this->immagini;
	}


    //-------------------------------SET-------------------------------//
	/**
    * @param int $id
    */
    public function setId(int $id):void{
        $this->id = $id;
    }
	/**
    * @param int $rating
    */
    public function setRating(int $ratingC):void{
		$this->rating=$ratingC;
	}
    /**
    * @param string $testo
    */
    public function setTesto(string $testo):void{
        $this->testo = $testo;
    }
    /**
    * @param string $img
    */
    public function setImg(Eimmagini $img):void{
        $this->img = $img;
    }
    
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id' => $this->getId(),
			'rating' => $this->getRating(),
			'testo' => $this->getTesto(),
			'img' => $this->getImmagini(),
		];
	}	
}
?>