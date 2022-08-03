<?php
class Etelusato {
	private $condizioni;
    private $data_aquisto;
    private $prezzo_us;
    private $imei;
    private $cond_schermo;
    private $cond_batteria;
    private $cond_usura;
    private $prezzo_aq;

	public function __construct(string $condizioniT,?string $data_aquistoT,float $prezzo_usT,int $imeiT,string $cond_schermoT,string $cond_batteriaT, string $cond_usuraT,float $prezzo_aqT,){
		//parent::__construct($idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP);
		$this->condizioni=$condizioniT;	
        $this->data_aquisto=$data_aquistoT;	
        $this->prezzo_us=$prezzo_usT;
        $this->imei=$imeiT;
        $this->cond_schermo=$cond_schermoT;
        $this->cond_batteria=$cond_batteriaT;	
        $this->cond_usura=$cond_usuraT;
        $this->prezzo_aq=$prezzo_aqT;
        
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
		$this->data_aquisto=$data_aquistoT;
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
		$this->cond_usura=$cond_usuraT;
	}
    public function set_prezzo_aq($prezzo_aqT){
		$this->prezzo_aq=$prezzo_aqT;
	}

}
?>