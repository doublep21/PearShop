<?php
class Gpreleva {
   private static $istanza=array();
    
   private function __construct(){}    
    
   public static function getIstanza($i){
        if( ! isset( self::$istanza[$i] ) ){
            self::$istanza[$i] = new $i;
        }
        return self::$istanza[$i];
   }
}
?>