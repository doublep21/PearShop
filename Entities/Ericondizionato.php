<?php
class Ericondizionato extends Eprodotti {

    /** @var string|null data di inserimento all'interno dello shop */
	private $data_ricondizionamento;

    /** @var string condizioni generali del prodotto */
    private $condizioni_ri;

    
	public function __construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP,?string $data_ricondizionamentoR,string $condizioni_riR, Ecommenti $elenco_commentiP, Eimmagine $immagineI){
        parent::__construct( $id, $marcaP, $descrizioneP, $quantitàP, $prezzoP,$elenco_commentiP,$immagineI);
		$this->data_ricondizionamento=$data_ricondizionamentoR;	
        $this->condizioni_ri=$condizioni_riR;

	}

    /**
     * @return string|null
     */
    public function getDataRicondizionamento(): ?string
    {
        return $this->data_ricondizionamento;
    }

    /**
     * @param string|null $data_ricondizionamento
     */
    public function setDataRicondizionamento(?string $data_ricondizionamento): void
    {
        $this->data_ricondizionamento = $data_ricondizionamento;
    }

    /**
     * @return string
     */
    public function getCondizioniRi(): string
    {
        return $this->condizioni_ri;
    }

    /**
     * @param string $condizioni_ri
     */
    public function setCondizioniRi(string $condizioni_ri): void
    {
        $this->condizioni_ri = $condizioni_ri;
    }


}
?>