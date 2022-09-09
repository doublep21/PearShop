<?php

class FAccessori extends FDataBase {
    public function __construct(){
        parent::__construct();
        $this->_tabella = 'Prodotto';
        $this->_valore ='(:id_accessorio,:prodotto_abbinato)';
        $this->_classe = 'FAccessori';
    }

    /** Metodo che lega gli attributi del prodotto da inserire mediante il parametro INSERT
    * @param PDOStatement $pdostatement
    * @param Eaccessori $accessori
    * @return void
    */
    public static function bind(PDOStatement $pdostatement, Eaccessori $accessori){
        $pdostatement->bindValue(':id_accessorio',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':prodotto_abbinato',$accessori->get_prodotto_abbinato(), PDO::PARAM_STR);
    }

    /** Metodo che crea un oggetto di tipo Eaccessori
    * @param array $riga rappresenta la tupla
    * @return Eaccessori $accessori
    */
    public static function buildAccessorio(array $riga){
        $accessori = new Eaccessori($riga['prodotto_abbinatoA']);
        $accessori->setid($riga['id_accessorio']);
        $accessori->setimmagini($riga['immagini']);
        return $accessori;
    }

    /** Metodo che carica un accessorio nel database
    * @param $id int del accessorio
    * @return Eaccessori|string|null
    */
    public function loadById($id_accessorio){
        $riga = parent::loadById($id_accessorio);
        if(($riga!=null) && (count($riga)>0)){
            $listaprodotti = $riga[0];
            $prod = $this->buildAccessorio($listaprodotti);
            return $prod;
        }
        else return null;
    }

    /** Metodo che carica un gruppo di prodotti nel database data una lista di id
    * @param $multipleid
    * @return array|null
    */
    public function loadMultipleById($multipleid){
        $listaprodotti = parent::loadMultipleById($multipleid);
        if(($listaprodotti != null) && (count($listaprodotti)>0)){
            $arrayobj = array();
            foreach($listaprodotti as $prodotto){
                $prod=$this->buildAccessorio($prodotto);
                array_push($arrayobj, $prod);
            }
            return $arrayobj;
        }
        else return null;
    }

    /**
    * Metodo che permette di effettuare una ricerca di prodotti per marca
    * @param $nome array di id prodotti
    * @return array di EtelNuovo
    */
    public function ricercaPerMarca($nome){
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