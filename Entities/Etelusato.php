<?php
class Etelusato extends Eprodotti {
	private $condizioni;
    private $data_aquisto;
    private $prezzo_us;
    private $imei;
    private $cond_schermo;
    private $cond_batteria;
    private $cond_usura;
    private $prezzo_aq;

	public function __construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP,Ecommenti $elenco_commentiP,Eimmagine $immagineI,string $condizioniT,?string $data_aquistoT,float $prezzo_usT,int $imeiT,string $cond_schermoT,string $cond_batteriaT, string $cond_usuraT,float $prezzo_aqT,){
		parent::__construct($id, $marcaP, $descrizioneP, $quantitàP, $prezzoP,  $elenco_commentiP,  $immagineI);
		$this->condizioni=$condizioniT;	
        $this->data_aquisto=$data_aquistoT;	
        $this->prezzo_us=$prezzo_usT;
        $this->imei=$imeiT;
        $this->cond_schermo=$cond_schermoT;
        $this->cond_batteria=$cond_batteriaT;	
        $this->cond_usura=$cond_usuraT;
        $this->prezzo_aq=$prezzo_aqT;
        
	}

    /**
     * @return string
     */
    public function getCondizioni(): string
    {
        return $this->condizioni;
    }

    /**
     * @param string $condizioni
     */
    public function setCondizioni(string $condizioni): void
    {
        $this->condizioni = $condizioni;
    }

    /**
     * @return string|null
     */
    public function getDataAquisto(): ?string
    {
        return $this->data_aquisto;
    }

    /**
     * @param string|null $data_aquisto
     */
    public function setDataAquisto(?string $data_aquisto): void
    {
        $this->data_aquisto = $data_aquisto;
    }

    /**
     * @return float
     */
    public function getPrezzoUs(): float
    {
        return $this->prezzo_us;
    }

    /**
     * @param float $prezzo_us
     */
    public function setPrezzoUs(float $prezzo_us): void
    {
        $this->prezzo_us = $prezzo_us;
    }

    /**
     * @return int
     */
    public function getImei(): int
    {
        return $this->imei;
    }

    /**
     * @param int $imei
     */
    public function setImei(int $imei): void
    {
        $this->imei = $imei;
    }

    /**
     * @return string
     */
    public function getCondSchermo(): string
    {
        return $this->cond_schermo;
    }

    /**
     * @param string $cond_schermo
     */
    public function setCondSchermo(string $cond_schermo): void
    {
        $this->cond_schermo = $cond_schermo;
    }

    /**
     * @return string
     */
    public function getCondBatteria(): string
    {
        return $this->cond_batteria;
    }

    /**
     * @param string $cond_batteria
     */
    public function setCondBatteria(string $cond_batteria): void
    {
        $this->cond_batteria = $cond_batteria;
    }

    /**
     * @return string
     */
    public function getCondUsura(): string
    {
        return $this->cond_usura;
    }

    /**
     * @param string $cond_usura
     */
    public function setCondUsura(string $cond_usura): void
    {
        $this->cond_usura = $cond_usura;
    }

    /**
     * @return float
     */
    public function getPrezzoAq(): float
    {
        return $this->prezzo_aq;
    }

    /**
     * @param float $prezzo_aq
     */
    public function setPrezzoAq(float $prezzo_aq): void
    {
        $this->prezzo_aq = $prezzo_aq;
    }
	


}
?>