<?php
class Etelusato {
	private String $condizioni;
    private data $data_aquisto;
    private float $prezzo_us;
    private int $imei;
    private String $cond_schermo;
    private String $cond_batteria;
    private String $cond_usura;
    private float $prezzo_aq;

	public function __construct($condizioniT,$data_aquistoT,$prezzo_usT,$imeiT,$cond_schermoT,$cond_batteriaT,$cond_usuraT,$prezzo_aqT,){
		//parent::__construct($idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP);
		$this->$condizioni=$condizioniT;	
        $this->$data_aquisto=$data_aquistoT;	
        $this->$prezzo_us=$prezzo_usT;
        $this->$imei=$imeiT;
        $this->$cond_schermo=$cond_schermoT;
        $this->$cond_batteria=$cond_batteriaT;	
        $this->$cond_usura=$cond_usuraT;
        $this->$prezzo_aq=$prezzo_aqT;
        
	}
	
	//----------------GET----------------//
    public function get_condizioni(){
		return $this->condizioni;
	}
    public function get_data_aquisto(){
		return $this->data_aquisto;
	}
    public function get_prezzo_us(){
		return $this->prezzo_us;
	}
    public function get_imei(){
		return $this->imei;
	}
    public function get_cond_schermo(){
		return $this->cond_schermo;
	}
    public function get_cond_batteria(){
		return $this->cond_batteria;
	}
    public function get_cond_usura(){
		return $this->cond_usura;
	}
    public function get_prezzo_aq(){
		return $this->prezzo_aq;
	}

    //----------------SET----------------//
    public function set_condizioni($condizioniT){
		$this->condizioni=$condizioniT;
	}
    public function set_data_aquisto($data_aquistoT){
		$this->ind_spedizione=$ind_spedizioneO;
	}
    public function set_prezzo_us($prezzo_usT){
		$this->prezzo_us=$prezzo_usT;
	}
    public function set_imei($imeiT){
		$this->imei=$imeiT;
	}
    public function set_cond_schermo($cond_schermoT){
		$this->cond_schermo=$cond_schermoT;
	}
    public function set_cond_batteria($cond_batteriaT){
		$this->cond_batteria=$cond_batteriaT;
	}
    public function set_cond_usura($cond_usuraT){
		$this->cond_batteria=$cond_batteriaT;
	}
    public function set_prezzo_aq($prezzo_aqT){
		$this->prezzo_aq=$prezzo_aqT;
	}

}
?>