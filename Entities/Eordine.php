<?php
class Ordine {
	private float $prezzo_tot;
    private String $ind_spedizione;
    private data $data_ora;
	private String $codice_promozionale;
	private Ecarello $carello;

	public function __construct($prezzo_totO,$ind_spedizioneO,$data_oraO,$codice_promozionaleO,$carelloO){
		//parent::__construct($quantitaCarelloC,$merci); 
		$this->$prezzo_tot=$prezzo_totO;	
        $this->$ind_spedizione=$ind_spedizioneO;	
        $this->$data_ora=$data_oraO;
		$this->$codice_promozionale=$codice_promozionaleO;	
		$this->$carello=$carelloO;		
	}
	
	//----------------GET----------------//
    public function get_prezzo_tot(){
		return $this->prezzo_tot;
	}
    public function get_ind_spedizione(){
		return $this->ind_spedizione;
	}
    public function get_data_ora(){
		return $this->data_orat;
	}
	public function get_codice_promozionale(){
		return $this->codice_promozionale;
	}
    
	//----------------SET----------------//
    public function set_prezzo_tot($prezzo_totO){
		$this->prezzo_tot=$prezzo_totO;
	}
    public function set_ind_spedizione($ind_spedizioneO){
		$this->ind_spedizione=$ind_spedizioneO;
	}
    public function set_data_ora($data_oraO){
		$this->data_ora=$data_oraO;
	}
	public function set_codice_promozionale($codice_promozionaleO){
		$this->codice_promozionale=$codice_promozionaleO;
	}

}
?>