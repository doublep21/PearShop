<?php
class Prodotti extends ECommenti implements JsonSerializable{
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

	private $elenco_commenti = array(
		"id" => "",
		"nome" => "",
		"cognome" => "",
		"descrizione" => ""
	);

	
	public function __construct($idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP,$immaginiP,$elenco_commentiP){
		parent::__construct($idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP,$immaginiP);
		$this->$elenco_commenti=$elenco_commentiP;
	}
	
    public function get_id(){
		return $this->$id;
	}
    public function get_marca(){
		return $this->$marca;
	}
    public function get_descrizione(){
		return $this->$descrizione;
	}
    public function get_quantita(){
		return $this->$quantita;
	}
    public function get_prezzo(){
		return $this->$prezzo;
	}
	public function get_immagini(){
		return $this->$immagini;
	}
	public function get_elenco_commenti(){
		return $this->$elenco_commenti;
	}
    //
    public function set_id_utente($idP){
		$this->$id=$idP;
	}
    public function set_marca($marcaP){
		$this->$marca=$marcaP;
	}
    public function set_descrizione($descrizioneP){
		$this->$descrizione=$descrizioneP;
	}
    public function set_quantita($quantitaP){
		$this->$quantita=$quantitaP;
	}
    public function set_prezzo($prezzoP){
		$this->$prezzo=$prezzoP;
	}
	public function set_immagini($immaginiP){
		$this->$immagini=$immaginiP;
	}
	public function set_elenco_commenti($elenco_commentiP){
		$this->$elenco_commenti=$elenco_commentiP;
	}
	
	//
	
	/*public function jsonSerialize() : array
    {
        $result = array(
            "id" => $this->id,
            "marca" => $this->marca,
            "descrizione" => $this->descrizione,
            "quantita" => $this->quantita,
            "prezzo" => $this->prezzo,
        );
        return $result;
    }*/
}
?>