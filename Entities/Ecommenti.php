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
	public function __construct(int $idC,int $ratingC,string $testoC){
        $this->id = $idC;
		$this->rating=$ratingC;	
		$this->testo=$testoC;	
		$this->img=array();
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
	public function getImmagini():array{
		return $this->img;
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
    public function setImg(array $img):void{
        $this->img = $img;
    }


    //-------------------------------Metodi------------------------------------------//

    /** Metodo per aggiungere una immagine all'interno della lista delle immagini
     * @param Eimmagine $i immagine da aggiungere
     * @return void
     */
    public function aggiungiImmagineCommento(Eimmagine $i)
    {
        array_push($this->img,$i);
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