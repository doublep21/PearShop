<?php
class Prodotti {
	private $id;
    private $marca;
    private $descrizione;
    private $quantita;
    private $prezzo;
    
	
	public function __construct($idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP){
		$this->$id=$idP;	
        $this->$marca=$marcaP;
        $this->$descrizione=$descrizioneP;
        $this->$quantita=$quantitaP;
        $this->$prezzo=$prezzoP;
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
}