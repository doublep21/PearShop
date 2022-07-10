<?php
class Gsessione {
    public function __construct() {
        session_start();
    }
    
    public function impSessione($c,$v){
        $_SESSION[$c]=$v;
        //return $_SESSION[$c];
    }
    public function UnsetSessione($c){
        unset($_SESSION[$c]);
    }
    public function VSessione($c){
        if(isset($_SESSION[$c])){
            return $_SESSION[$c];
        }
        else{
            return false;
        }
    }
}
?>