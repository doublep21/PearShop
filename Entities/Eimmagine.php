<?php

class Eimmagine {
    /**id dell'immagine*/
    private $id_img;

    /**dati immagine*/
    private $nome;

    /** mime type dell'immagine */
    private $type;

    /**id dell'oggetto al quale l'immagine si riferisce */
    private $size;

    /**costruttore*/
    public function __construct($id, $nome, $type, $size){
        $this->id_img = $id;
        $this->nome = $nome;
        $this->type = $type;
        $this->size = $size;
    }

    //----------------GET----------------//

    /**
    * @return int id dell'immagine
    */
    public function get_id_img(): int{
        return $this->id_img;
    }

    /**
    * @return string nome immagine
    */
    public function get_nome(){
        return $this->nome;
    }

    /**
    * @return string content type dell'immagine
    */
    public function get_type(){
        return $this->type;
    }

    /**
    * @return int size dell'immagine
    */
    public function get_size(){
        return $this->size;
    }

    //----------------SET----------------//

    /**
    * @param int $id_img dell'immagine
    */
    public function set_id_img($id_img){
        $this->id_img = $id_img;
    }

    /**
    * @param string $nome immagine
    */
    public function set_nome($nome){
        $this->nome = $nome;
    }

    /**
    * @param string $type dell'immagine
    */
    public function set_type($type){
        $this->type = $type;
    }

    /**
    * @param int $size dell'immagine
    */
    public function set_size($size){
        $this->size = $size;
    }
    
}
?>
