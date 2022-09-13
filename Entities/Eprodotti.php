<?php
class Eprodotti implements JsonSerializable{
	
	/** id del prodotto*/
	private $id;
	/** marca prodotto*/
    private $marca;
	/** descrizione prodotto*/
    private $descrizione;
	/** quantita prodotto*/
    private $quantità;
	/** prezzo prodotto*/
    private $prezzo;
	/** immagini prodotto*/
	private $immagine;
	/** commenti prodotto*/
    private $elenco_commenti;


	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $idP,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP){
        $this->id=$idP;
		$this->marca=$marcaP;
		$this->descrizione=$descrizioneP;
		$this->quantità=$quantitàP;
		$this->prezzo=$prezzoP;
        $this->immagine=array();
		$this->elenco_commenti=array() ;
	}


	//-------------------------------GET-------------------------------//
    /**
    * @return int
    */
    public function getId():int{
        return $this->id;
    }
	/**
    * @return string
    */
    public function getMarca():string{
        return $this->marca;
    }
	/**
     * @return string
     */
    public function getDescrizione():string{
        return $this->descrizione;
    }
	/**
     * @return int
     */
    public function getQuantità():int{
        return $this->quantità;
    }
	/**
     * @return float
     */
    public function getPrezzo():float{
        return $this->prezzo;
    }
	/**
     * @return mixed
     */
    public function getElencoCommenti():array{
        return $this->elenco_commenti;
    }
	/**
     * @return mixed
     */
    public function getElencoImg():array{
        return $this->elenco_commenti;
    }
	

	//-------------------------------SET-------------------------------//
    /**
     * @param mixed $id
     */
    public function setId(int $id):void{
        $this->id = $id;
    }
    /**
     * @param string $marca
     */
    public function setMarca(string $marca):void{
        $this->marca = $marca;
    }
    /**
     * @param string $descrizione
     */
    public function setDescrizione(string $descrizione):void{
        $this->descrizione = $descrizione;
    }
    /**
     * @param int $quantità
     */
    public function setQuantità(int $quantità):void{
        $this->quantità = $quantità;
    }
    /**
     * @param float $prezzo
     */
    public function setPrezzo(float $prezzo):void{
        $this->prezzo = $prezzo;
    }
    /**
     * @param mixed $immagini
     */
    public function setElencoImg(array $immagini):void{
        $this->immagini = $immagini;
    }
    /**
     * @param Ecommenti $elenco_commenti
     */
    public function setElencoCommenti(array $elenco_commenti):void{
        $this->elenco_commenti = $elenco_commenti;
    }


    //-----------------------------------Metodi--------------------------------------//

    /** Metodo che aggiunge un commento all'interno dell'elenco dei commenti relativo al prodotto
     * @param Ecommenti $comm commento da aggiungere
     * @return void
     */
    public function aggiungiCommentoProdotto(Ecommenti $comm)
    {
        array_push($this->elenco_commenti,$comm);
    }

    /** Metodo che aggiunge una immagine all'interno della lista delle immagini relative al prodotto
     * @param Eimmagine $i immagine da inserire
     * @return void
     */
    public function aggiungiImmagineProdotto(Eimmagine $i)
    {
        array_push($this->immagine,$i);
    }

    /** Metodo che tiene conto del numero di commenti presenti per il prodotto
     * @return int $i numero commenti
     */
    public function numeroCommenti() :int
    {
       $i=0;
       foreach ($this->elenco_commenti as $commento)
       {
           $i++;
       }
       return $i;
    }
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id' => $this->getId(),
			'marca' => $this->getMarca(),
			'descrizione' => $this->getDescrizione(),
			'quantità' => $this->getQuantità(),
			'prezzo' => $this->getPrezzo(),
			'immagine' => $this->getElencoImg(),
			'elenco_commenti' => $this->getElencoCommenti(),
			
		];
	}	

}
?>