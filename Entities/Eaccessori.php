<?php
require __DIR__ . '/Eprodotti.php';
class Eaccessori extends Eprodotti implements JsonSerializable{
	
	/** id accessorio*/
	private $id_accessorio;
	/** marca dell'accessorio*/
    private $prodotto_abbinato;

	
	//-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $idP,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP, Eimmagine $immagineI,string $prodotto_abbinatoA){
		parent::__construct($idP,$marcaP,$descrizioneP,$quantitàP,$prezzoP,$immagineI);
		$this->id_accessorio=$idP;
        $this->prodotto_abbinato=$prodotto_abbinatoA;
		$this->immagini=$immagineI;
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