<?php
class Ericondizionato extends Eprodotti implements JsonSerializable{

    /** data di inserimento all'interno dello shop*/
	private $data_ricondizionamento;
    /** condizioni generali del prodotto*/
    private $condizioni_ri;


    //-------------------------------COSTRUTTORE-------------------------------//
	public function __construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP,?string $data_ricondizionamentoR,string $condizioni_riR, Ecommenti $elenco_commentiP, Eimmagine $immagineI){
        parent::__construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP,Ecommenti $elenco_commentiP,Eimmagine $immagineI);
		$this->data_ricondizionamento=$data_ricondizionamentoR;	
        $this->condizioni_ri=$condizioni_riR;
	}
	
	
	//-------------------------------GET-------------------------------//
    /**
    * @return string
    */
    public function getDataRicondizionamento():?string{
        return $this->data_ricondizionamento;
    }
	/**
    * @return string
    */
    public function getCondizioniRi():string{
        return $this->condizioni_ri;
    }


	//-------------------------------SET-------------------------------//
    /**
    * @param string $data_ricondizionamento
    */
    public function setDataRicondizionamento(?string $data_ricondizionamento):void{
        $this->data_ricondizionamento = $data_ricondizionamento;
    }
    /**
    * @param string $condizioni_ri
    */
    public function setCondizioniRi(string $condizioni_ri):void{
        $this->condizioni_ri = $condizioni_ri;
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
			'data_ricondizionamento' => $this->getDataRicondizionamento(),
			'condizioni_ri' => $this->getCondizioniRi(),
		];
	}	

}
?>