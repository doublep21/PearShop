<?php

class FProdotto extends FDataBase{
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'Prodotto';
        $this->_valore ='(:id,:marca,:descrizione,:quantità,:prezzo,:immagini)';
        $this->_classe = 'FProdotto';
    }

    /** Metodo che lega gli attributi del prodotto da inserire mediante il parametro INSERT
     * @param PDOStatement $pdostatement
     * @param Eprodotti $prodotto
     * @return void
     */
    public static function bind(PDOStatement $pdostatement, Eprodotti $prodotto)
    {
        $pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':marca',$prodotto->get_marca(), PDO::PARAM_STR);
        $pdostatement->bindValue(':descrizione',$prodotto->get_descrizione(), PDO::PARAM_STR);
        $pdostatement->bindValue('quantità',$prodotto->get_quantità(), PDO::PARAM_INT);
        $pdostatement->bindValue(':prezzo',$prodotto->get_prezzo());
        $pdostatement->bindValue(':immagini',$prodotto->get_immagini(), PDO::PARAM_STR);

    }

    /** Metodo che crea un oggetto di tipo Eprodotti
     * @param array $riga rappresenta la tupla
     * @return Eprodotti $prodotto
     */
    public static function buildProdotto(array $riga)
    {
        $prodotto = new Eprodotti($riga['marcaP'], $riga['descrizioneP'],$riga['quantitàP'],$riga['prezzoP']);
        $prodotto->set_id($riga['id']);
        $prodotto->set_elenco_commenti($riga['elenco_commenti']);
        $prodotto->set_immagini($riga['immagini']);
        return $prodotto;
    }

    /*public static function build($riga)
    {
        
    }*/

    /** Metodo che carica un prodotto nel database
     * @param $id del prodotto
     * @return Eprodotto|string|null
     */
    public function loadById($id)
    {
        $riga = parent::loadById($id);
        if(($riga!=null) && (count($riga)>0)){
            $listaprodotti = $riga[0];
            $prod = $this->buildProdotto($listaprodotti);
            return $prod;
        }
        else return null;
    }

     /** Metodo che carica un gruppo di prodotti nel database data una lista di id
     * @param $multipleid
     * @return array|null
     */
    public function loadMultipleById($multipleid)
    {
        $listaprodotti = parent::loadMultipleById($multipleid);
        if(($listaprodotti != null) && (count($listaprodotti)>0)){
            $arrayobj = array();
            foreach($listaprodotti as $prodotto){
                $prod=$this->buildProdotto($prodotto);
                array_push($arrayobj, $prod);
            }
            return $arrayobj;
        }
        else return null;
    }

    /**
	* Metodo che permette di effettuare una ricerca di prodotti per marca
	* @param $nome array di id prodotti
	* @return array di Eprodotto 
	*/
	public function ricercaPerNome($nome){
	    if(count($nome)!=0){
            $query = "SELECT marca FROM prodotto WHERE marca=".$nome ;
            for ($i=1; $i<count($nome); $i++){
                $query = "SELECT id_prodotto FROM prodotto  WHERE marca=".$nome[$i];
            }
        }else{
            $query = "SELECT * FROM prodotto";
        }
		$query = $query.";";

		try {
			$this->_connessione->beginTransaction();
            $pdostmt = $this->_connessione->prepare($query);
            $pdostmt->execute();
			$risultato = $pdostmt->fetchAll(PDO::FETCH_ASSOC);
            $this->_connessione->commit();
		}
		catch (PDOException $e)
		{
			$this->_connessione->rollBack();
			echo "Attenzione, errore: " . $e->getMessage();
		}
		$arrynome = array();
		foreach ($rows as  $value) {
			array_push($arrynome, $value['id_prodotto']);
		}
		$arrryprod = $this->loadMultipleById($arrynome);
		return $arrryprod;
	}
}
?>