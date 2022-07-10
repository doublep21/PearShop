<?php
class Accessori extends Eprodotti{
	private $id_accessorio;
    private $prodotto_abbinato;
   
    
	public function __construct($id_accessorioA,$prodotto_abbinatoA,$idP,$marcaP,$descrizioneP,$quantitaP,$prezzoP,$immaginiP){

		$this->$id_accessorio=$id_accessorioA;	
        $this->$prodotto_abbinato=$prodotto_abbinatoA;

		parent::set_id($idP);
		parent::set_marca($marcaP);
		parent::set_descrizione($descrizioneP);
		parent::set_quantita($quantitaP);
        parent::set_prezzo($prezzoP);
        parent::set_immagini($immaginiP);
        
	}
	
    public function get_id_accessorio(){
		return $this->$id_accessorio;
	}
    public function get_prodotto_abbinato(){
		return $this->$prodotto_abbinato;
	}
    
    //
    public function set_id_accessorio($id_accessorioA){
		$this->$id_accessorio=$id_accessorioA;
	}
    public function set_prodotto_abbinato($prodotto_abbinatoA){
		$this->$prodotto_abbinato=$prodotto_abbinatoA;
	}
}