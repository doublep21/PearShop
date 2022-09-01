<?php
class Ecodicipromozionali {
	private $idcod;
    private $codice;
	private $data_scadenza;
	private $toggle;
	private $utilizzi;
	
	public function __construct(int $idcodC,string $codiceC,?string $data_scadenzaC,bool $toggleC,bool $utilizziC){
		$this->idcod=$idcodC;	
        $this->codice=$codiceC;
		$this->data_scadenza=$data_scadenzaC;
		$this->toggle=$toggleC;
		$this->utilizzi=$utilizziC;
        
	}

    /**
     * @return int
     */
    public function getIdcod(): int
    {
        return $this->idcod;
    }

    /**
     * @param int $idcod
     */
    public function setIdcod(int $idcod): void
    {
        $this->idcod = $idcod;
    }

    /**
     * @return string
     */
    public function getCodice(): string
    {
        return $this->codice;
    }

    /**
     * @param string $codice
     */
    public function setCodice(string $codice): void
    {
        $this->codice = $codice;
    }

    /**
     * @return string|null
     */
    public function getDataScadenza(): ?string
    {
        return $this->data_scadenza;
    }

    /**
     * @param string|null $data_scadenza
     */
    public function setDataScadenza(?string $data_scadenza): void
    {
        $this->data_scadenza = $data_scadenza;
    }

    /**
     * @return bool
     */
    public function isToggle(): bool
    {
        return $this->toggle;
    }

    /**
     * @param bool $toggle
     */
    public function setToggle(bool $toggle): void
    {
        $this->toggle = $toggle;
    }

    /**
     * @return bool
     */
    public function isUtilizzi(): bool
    {
        return $this->utilizzi;
    }

    /**
     * @param bool $utilizzi
     */
    public function setUtilizzi(bool $utilizzi): void
    {
        $this->utilizzi = $utilizzi;
    }
	

}
?>