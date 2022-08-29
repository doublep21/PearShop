<?php
class Eprodotti {
	private $id;
    private $marca;
    private $descrizione;
    private $quantità;
    private $prezzo;
	private $immagine =array();
    private $elenco_commenti = array() ;

	
	public function __construct(int $id,string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP, Ecommenti $elenco_commentiP, Eimmagine $immagineI){
		$this->marca=$marcaP;
		$this->descrizione=$descrizioneP;
		$this->quantità=$quantitàP;
		$this->prezzo=$prezzoP;
		$this->elenco_commenti = $elenco_commentiP ;
	}

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId(int $id): void{
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getMarca(): string{
        return $this->marca;
    }

    /**
     * @param string $marca
     */
    public function setMarca(string $marca): void{
        $this->marca = $marca;
    }

    /**
     * @return string
     */
    public function getDescrizione(): string{
        return $this->descrizione;
    }

    /**
     * @param string $descrizione
     */
    public function setDescrizione(string $descrizione): void{
        $this->descrizione = $descrizione;
    }

    /**
     * @return int
     */
    public function getQuantità(): int{
        return $this->quantità;
    }

    /**
     * @param int $quantità
     */
    public function setQuantità(int $quantità): void{
        $this->quantità = $quantità;
    }

    /**
     * @return float
     */
    public function getPrezzo(): float{
        return $this->prezzo;
    }

    /**
     * @param float $prezzo
     */
    public function setPrezzo(float $prezzo): void{
        $this->prezzo = $prezzo;
    }

    /**
     * @return mixed
     */
    public function getImmagini(){
        return $this->immagini;
    }

    /**
     * @param mixed $immagini
     */
    public function setImmagini(string $immagini): void{
        $this->immagini = $immagini;
    }

    /**
     * @return Ecommenti
     */
    public function getElencoCommenti(): Ecommenti{
        return $this->elenco_commenti;
    }

    /**
     * @param Ecommenti $elenco_commenti
     */
    public function setElencoCommenti(Ecommenti $elenco_commenti): void{
        $this->elenco_commenti = $elenco_commenti;
    }



}
?>