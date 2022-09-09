<?php
class Eaccessori extends Eprodotti implements JsonSerializable{
	
	/** id accessorio*/
	private String $id_accessorio;
	/** marca dell'accessorio*/
    private String $prodotto_abbinato;
	/** immagine accessorio*/
	private string $immagini;
    
	
	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $id_accessorioA,string $prodotto_abbinatoA,Eimmagini $immaginiA){
		parent::__construct(int $idP,string $marcaP,string $descrizioneP,int $quantitaP,float$prezzoP,Eimmagine $immaginiP);
		$this->id_accessorio=$id_accessorioA;	
        $this->prodotto_abbinato=$prodotto_abbinatoA;  
		$this->immagini=$immaginiP;
	}
	
	
	//-------------------------------GET-------------------------------//
	/**
    * @return mixed
    */
    public function getIDacc():int{
		return $this->id_accessorio;
	}
	/**
    * @return string
    */
    public function getProdabinato():string{
		return $this->prodotto_abbinato;
	}
    /**
    * @return mixed
    */
    public function getImmagini():Eimmagini{
		return $this->prodotto_abbinato;
	}
	
	
    //-------------------------------SET-------------------------------//
	/**
    * @param mixed $id
    */
    public function setIDacc(int $id_accessorioA):void{
		$this->id_accessorio=$id_accessorioA;
	}
	/**
	* @param string $prodotto_abbinato
	*/
    public function setProdabinato(string $prodotto_abbinatoA):void{
		$this->prodotto_abbinato=$prodotto_abbinatoA;
	}
    /**
    * @param mixed $immagini
    */
	public function setImmagini(Eimmagini $immaginiA):void{
		$this->immagini=$immaginiA;
	}
	
	
	//-------------------------------JsonSerializable-------------------------------//
	public function jsonSerialize(){
		return[
			'id_accessorio' => $this->getIDacc(),
			'prodotto_abbinato' => $this->getProdabinato(),
			'immagini' => $this->getImmagini(),
			'marca' => $this->getMarca(),
			'descrizione' => $this->getDescrizione(),
			'quantità' => $this->getQuantità(),
			'prezzo' => $this->getPrezzo(),
		];
	}
}
?>