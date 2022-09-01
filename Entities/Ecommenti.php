<?php
class Ecommenti {
    private $id;
	private $rating;
	private $testo;
    private $img = array();

<<<<<<< HEAD
	public function __construct(int $idC,int $ratingC,string $testoC, Eimmagini $imgC){
=======
	public function __construct(int $idC,int $ratingC,string $testoC,string Eimmagini $imgC)
    {
>>>>>>> b7a6a1c997d3e2747105e76c67b731716ee3be46
        $this->id = $idC;
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

    /**
     * @return int
     */
    public function getId(): int{
        return $this->id;
    }

    
    //----------------SET----------------//
    public function set_rating($ratingC){
		$this->rating=$ratingC;
	}

    /**
     * @param int $id
     * @return Ecommenti
     */
    public function setId(int $id): Ecommenti{
        $this->id = $id;
        return $this;
    }

    /**
     * @param string $testo
     * @return Ecommenti
     */
    public function setTesto(string $testo): Ecommenti{
        $this->testo = $testo;
        return $this;
    }
    

}
?>