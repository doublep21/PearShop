<?php

class Fusers {
    /** classe foundation */
    private static $class="Fusers";
	/** tabella con la quale opera */          
    private static $table="users";
    /** valori della tabella */
    private static $values="(:id_utente,:nome,:cognome,:email,:password)";

    /** costruttore*/ 
    public function __construct(){}

    
    public static function bind($stmt, Eusers $utente){
        $stmt->bindValue(':id_utente',$utente->get_id_utente(), PDO::PARAM_STR);
        $stmt->bindValue(':nome', $utente->get_nome(), PDO::PARAM_STR); 
        $stmt->bindValue(':cognome', $utente->get_cognome(), PDO::PARAM_STR);
        $stmt->bindValue(':email', $utente->get_email(), PDO::PARAM_STR); 
        $stmt->bindValue(':password', $utente->get_password(), PDO::PARAM_BOOL);
        }

    /**
    * questo metodo restituisce il nome della classe per la costruzione delle Query
    * @return string $class nome della classe
    */
    public static function getClass(){
        return self::$class;
    }

    /**
    * questo metodo restituisce il nome della tabella per la costruzione delle Query
    * @return string $table nome della tabella
    */
    public static function getTable(){
        return self::$table;
    }

    /**
    * questo metodo restituisce l'insieme dei valori per la costruzione delle Query
    * @return string $values nomi delle colonne della tabella
    */
    public static function getValues(){
        return self::$values;
    }

    public static function loadByField($field, $id_utente){
        $utente = null;
        $db=dbf::getInstance(); // getInstance implementar nel dbms  <-- funzione richiamata,presente in FDatabase
        if(($result!=null) && ($rows_number == 1)) {
        $result=$db->loadDB(static::getClass(), $field, $id_utente);    // loadDB implementar nel dbms  <-- funzione richiamata,presente in FDatabase
        if(($result!=null) && ($rows_number == 1)) {
        $rows_number = $db->interestedRows(static::getClass(), $field, $id_utente);    // interestedRows implementar nel dbms  <-- funzione richiamata,presente in FDatabase
        if(($result!=null) && ($rows_number == 1)) {
            $utente=new Eusers($result['name'],$result['cogname'], $result['email'], $result['password']);
        }
        else {
            if(($result!=null) && ($rows_number > 1)){
                $utente = array();
        	    for($i=0; $i<count($result); $i++){
                    $utente[]=new Eusers($result[$i]['name'],$result[$i]['cognome'], $result[$i]['email'], $result[$i]['password']);
                }
            }
        }
        return $utente;
    }
    
}

?>