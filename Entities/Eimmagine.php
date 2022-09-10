<?php
class Eimmagine implements JsonSerializable{
	
    /** id dell'immagine*/
    private $id_img;
    /** dati immagine*/
    private $nome;
    /** mime type dell'immagine */
    private $type;
    /** id dell'oggetto al quale l'immagine si riferisce */
    private $size;
    /** contenuto immagine */
    private $img;


   //-------------------------------COSTRUTTORE-------------------------------//
    public function __construct(int $id,string $nome,string $type,int $size,longblob $img){
        $this->id_img = $id;
        $this->nome = $nome;
        $this->type = $type;
        $this->size = $size;
        $this->img= $img;
    }


    //-------------------------------GET-------------------------------//
    /**
    * @return int 
    */
    public function getIDimg(): int{
        return $this->id_img;
    }
    /**
    * @return string 
    */
    public function getNomeIm():string{
        return $this->nome;
    }
    /**
    * @return string 
    */
    public function getTyp():string{
        return $this->type;
    }
    /**
    * @return int 
    */
    public function getSize():int{
        return $this->size;
    }
    /**
    * @return longblob 
    */
    public function getImg():longblob{
        return $this->img;
    }


    //-------------------------------SET-------------------------------//
    /**
    * @param int $id_img 
    */
    public function setIDimg(int $id_img):void{
        $this->id_img = $id_img;
    }
    /**
    * @param string $nome 
    */
    public function setNomeIm(string $nome):void{
        $this->nome = $nome;
    }
    /**
    * @param string $type 
    */
    public function setTyp(string $type):void{
        $this->type = $type;
    }
    /**
    * @param int $size 
    */
    public function setSize(int $size):void{
        $this->size = $size;
    }
    /**
    * @param longblob $img 
    */
    public function set_img(longblob $img):void{
        $this->img = $img;
    }
    
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id_img' => $this->getIDimg(),
			'nome' => $this->getNomeIm(),
			'type' => $this->getTyp(),
			'size' => $this->getSize(),
			'img' => $this->getImg(),
		];
	}	
}
?>