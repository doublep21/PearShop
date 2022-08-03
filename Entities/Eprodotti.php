<?php
class Eprodotti {
	private $id;
    private $marca;
    private $descrizione;
    private $quantita;
    private $prezzo;
	private $immagini = array(
		"id" => "",
		"nome" => "",
		"dimensione" => "",
		"tipo" => ""
	);
	private $elenco_commenti;

	
	public function __construct(int $idP,string $marcaP,string $descrizioneP,int $quantitaP,float $prezzoP,string $immaginiP,Ecommenti $elenco_commentiP){
		//parent::__construct($ratingC,$commentoC,$imgC);
		$this->id=$idP;
		$this->marca=$marcaP;
		$this->descrizione=$descrizioneP;
		$this->quantita=$quantitaP;
		$this->prezzo=$prezzoP;
		$this->immagini=$immaginiP;
		$this->elenco_commenti=$elenco_commentiP;
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
    public function get_quantita(){
		return $this->quantita;
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
    public function set_id_utente($idP){
		$this->id=$idP;
	}
    public function set_marca($marcaP){
		$this->marca=$marcaP;
	}
    public function set_descrizione($descrizioneP){
		$this->descrizione=$descrizioneP;
	}
    public function set_quantita($quantitaP){
		$this->quantita=$quantitaP;
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