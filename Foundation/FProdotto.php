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

    public static function build($riga)
    {
        
    }
}
?>