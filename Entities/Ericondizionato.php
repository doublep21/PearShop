<?php
class Ericondizionato extends Eprodotti {

	private $data_ricondizionamento;

    /** @var string condizioni generali del prodotto */
    private $condizioni_ri;

    /** @var float prezzo del prodotto */
	private $prezzo_ri;
   
    
	public function __construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP,?string $data_ricondizionamentoR,string $condizioni_riR,float $prezzo_riR){
        parent::__construct( $id, $marcaP, $descrizioneP, $quantitàP, $prezzoP);
		$this->data_ricondizionamento=$data_ricondizionamentoR;	
        $this->condizioni_ri=$condizioni_riR;
		$this->prezzo_ri=$prezzo_riR;
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

    /**
     * @return float
     */
    public function getPrezzoRi(): float
    {
        return $this->prezzo_ri;
    }

    /**
     * @param float $prezzo_ri
     */
    public function setPrezzoRi(float $prezzo_ri): void
    {
        $this->prezzo_ri = $prezzo_ri;
    }

}
?>