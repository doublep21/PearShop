<?php
class Eaccessori extends Eprodotti{
	private String $id_accessorio;
    private String $prodotto_abbinato;
   
    
	public function __construct($id_accessorioA,$prodotto_abbinatoA){
		//parent::__construct($idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP,$immaginiP);
		$this->$id_accessorio=$id_accessorioA;	
        $this->$prodotto_abbinato=$prodotto_abbinatoA;  
	}
	
	//----------------GET----------------//
    public function get_id_accessorio(){
		return $this->id_accessorio;
	}
    public function get_prodotto_abbinato(){
		return $this->prodotto_abbinato;
	}
    
    //----------------SET----------------//
    public function set_id_accessorio($id_accessorioA){
		$this->id_accessorio=$id_accessorioA;
	}
    public function set_prodotto_abbinato($prodotto_abbinatoA){
		$this->prodotto_abbinato=$prodotto_abbinatoA;
	}
}
?>