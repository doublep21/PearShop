<?php
class Ricondizionato {
	private $data_ricondizionamento;
    private $condizioni_ri;
	private $prezzo_ri;
   
    
	public function __construct($data_ricondizionamentoR,$condizioni_riR,$prezzo_riR){
		$this->$data_ricondizionamento=$data_ricondizionamentoR;	
        $this->$condizioni_ri=$condizioni_riR;
		$this->$prezzo_ri=$prezzo_riR;
        
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