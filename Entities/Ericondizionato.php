<?php
class Ricondizionato extends Etelusato{
	private $data_ricondizionamento;
    private $condizioni_ri;
	private $prezzo_ri;
   
    
	public function __construct($data_ricondizionamentoR,$condizioni_riR,$prezzo_riR,$condizioniT,$data_aquistoT,$prezzo_usT,$imeiT,$cond_schermoT,$cond_batteriaT,$cond_usuraT,$prezzo_aqT){
		$this->$data_ricondizionamento=$data_ricondizionamentoR;	
        $this->$condizioni_ri=$condizioni_riR;
		$this->$prezzo_ri=$prezzo_riR;

		parent::set_condizioni($condizioniT);
		parent::set_data_aquisto($data_aquistoT);	
        parent::set_prezzo_us($prezzo_usT);	
        parent::set_imei($imeiT);	
        parent::set_cond_schermo($cond_schermoT);
		parent::set_cond_batteria($cond_batteriaT);
        parent::set_cond_usura($cond_usuraT);
		parent::set_prezzo_aq($prezzo_aqT);
        
	}
	
    public function get_data_ricondizionamento(){
		return $this->$data_ricondizionamento;
	}
    public function get_condizioni_ri(){
		return $this->$condizioni_ri;
	}
	public function get_prezzo_ri(){
		return $this->$prezzo_ri;
	}
    
    //
    public function set_data_ricondizionamento($data_ricondizionamentoR){
		$this->$data_ricondizionamento=$data_ricondizionamentoR;
	}
    public function set_condizioni_ri($condizioni_riR){
		$this->$condizioni_ri=$condizioni_riR;
	}
	public function set_prezzo_ri($prezzo_riR){
		$this->$prezzo_ri=$prezzo_riR;
	}
}