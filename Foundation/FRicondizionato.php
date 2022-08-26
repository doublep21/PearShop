<?php

class FRicondizionato extends FTelUsato{
    public function __construct()
    {
        parent::__construct();
        $this->_tabella = 'TelefonoUsato';
        $this->_valore ='(:data_ricondizionato,:condizioni,:prezzo)';
        $this->_classe = 'FRicondizionato';
    }

    /** Metodo che lega gli attributi del telefono ricondizionato da inserire mediante il parametro INSERT
     * @param PDOStatement $pdostatement
     * @param Ericondizionato $prodotto
     * @return void
     */
    public static function bind(PDOStatement $pdostatement, Ericondizionato $prodotto)
    {
        //$pdostatement->bindValue(':id',NULL, PDO::PARAM_INT);
        $pdostatement->bindValue(':data_ricondizionato',$prodotto-> get_data_ricondizionamento(), PDO::PARAM_STR);
        $pdostatement->bindValue(':condizioni',$prodotto->get_condizioni_ri(), PDO::PARAM_STR);
        $pdostatement->bindValue(':prezzo',$prodotto->get_prezzo_ri(), PDO::PARAM_INT);

    }

    /** Metodo che crea un oggetto di tipo Ericondizionato
     * @param array $riga rappresenta la tupla
     * @return Ericondizionato $prodotto
     */
    public static function buildRicondizionato(array $riga)
    {
        $prodotto = new Ericondizionato($riga['data_ricondizionatoR'], $riga['condizioniR'],$riga['prezzoR']);
        //$prodotto->set_id($riga['id']);
        return $prodotto;
    }
}
?>

?>