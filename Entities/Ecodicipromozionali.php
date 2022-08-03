<?php
class Ecodicipromozionali {
	private String $idcod;
    private String $codice;
	private date $data_scadenza;
	private boolean $toggle;
	private boolean $utilizzi;
	
	public function __construct($idcodC,$codiceC,$data_scadenzaC,$toggleC,$utilizziC){
		$this->$idcod=$idcodC;	
        $this->$codice=$codiceC;
		$this->$data_scadenza=$data_scadenzaC;
		$this->$toggle=$toggleC;
		$this->$utilizzi=$utilizziC;
        
	}
	
	//----------------GET----------------//
    public function get_idcod(){
		return $this->idcod;
	}
    public function get_codice(){
		return $this->codice;
	}
	public function get_data_scadenza(){
		return $this->data_scadenza;
	}
	public function get_toggle(){
		return $this->toggle;
	}
	public function get_utilizzi(){
		return $this->utilizzi;
	}
    
    //----------------SET----------------//
    public function set_idcod($idcodC){
		$this->idcod=$idcodC;
	}
    public function set_codice($codiceC){
		$this->codice=$codiceC;
	}
	public function set_data_scadenza($data_scadenzaC){
		$this->data_scadenza=$data_scadenzaC;
	}
	public function set_toggle($toggleC){
		$this->toggle=$toggleC;
	}
	public function set_utilizzi($utilizziC){
		$this->utilizzi=$utilizziC;
	}
}
?>