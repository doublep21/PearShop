<?php
class Ordine extends Ecarello{
	private $prezzo_tot;
    private $ind_spedizione;
    private $data_ora;
	private $codice_promozionale;

	public function __construct($prezzo_totO,$ind_spedizioneO,$data_oraO,$codice_promozionaleO,$quantitaCarelloC,$merciC){
		parent::__construct($quantitaCarelloC,$merci); 
		$this->$prezzo_tot=$prezzo_totO;	
        $this->$ind_spedizione=$ind_spedizioneO;	
        $this->$data_ora=$data_oraO;
		$this->$codice_promozionale=$codice_promozionaleO;		
	}
	
    public function get_prezzo_tot(){
		return $this->$prezzo_tot;
	}
    public function get_ind_spedizione(){
		return $this->$ind_spedizione;
	}
    public function get_data_ora(){
		return $this->$data_orat;
	}
	public function get_codice_promozionale(){
		return $this->$codice_promozionale;
	}
    //
    public function set_prezzo_tot($prezzo_totO){
		$this->$prezzo_tot=$prezzo_totO;
	}
    public function set_ind_spedizione($ind_spedizioneO){
		$this->$ind_spedizione=$ind_spedizioneO;
	}
    public function set_data_ora($data_oraO){
		$this->$data_ora=$data_oraO;
	}
	public function set_codice_promozionale($codice_promozionaleO){
		$this->$codice_promozionale=$codice_promozionaleO;
	}

}
?>