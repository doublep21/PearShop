<?php
class Eprodotti {
	private $id;
    private $marca;
    private $descrizione;
    private $quantità;
    private $prezzo;
	private string $immagini;
    /**
        array(
		"id" => "",
		"nome" => "",
		"dimensione" => "",
		"tipo" => ""
     */

	private Ecommenti $elenco_commenti;

	
	public function __construct(string $marcaP,string $descrizioneP,int $quantitàP,float $prezzoP){
		//parent::__construct($ratingC,$commentoC,$imgC);
		$this->marca=$marcaP;
		$this->descrizione=$descrizioneP;
		$this->quantità=$quantitàP;
		$this->prezzo=$prezzoP;
		$this->elenco_commenti;
	}
	
	//----------------GET----------------//
    public function get_id(){
		return $this->id;
	}
    public function get_marca(){
		return $this->marca;
	}
    public function get_descrizione(){
		return $this->descrizione;
	}
    public function get_quantità(){
		return $this->quantità;
	}
    public function get_prezzo(){
		return $this->prezzo;
	}
	public function get_immagini(){
		return $this->immagini;
	}
	public function get_elenco_commenti(){
		return $this->elenco_commenti;
	}

    //----------------SET----------------//
    public function set_id($idP){
		$this->id=$idP;
	}
    public function set_marca($marcaP){
		$this->marca=$marcaP;
	}
    public function set_descrizione($descrizioneP){
		$this->descrizione=$descrizioneP;
	}
    public function set_quantita($quantitàP){
		$this->quantità=$quantitàP;
	}
    public function set_prezzo($prezzoP){
		$this->prezzo=$prezzoP;
	}
	public function set_immagini($immaginiP){
		$this->immagini=$immaginiP;
	}
	public function set_elenco_commenti($elenco_commentiP){
		$this->elenco_commenti=$elenco_commentiP;
	}
}
?>