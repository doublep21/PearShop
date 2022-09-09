<?php

class Chome {
    public function impostaPagina () {
        $VHome= USingleton::getInstance('VHome');
        $contenuto=$this->smista();
        $VHome->impostaPaginaGuest();
        $VHome->mostraPagina();
    }
    public function smista() {
        $view=USingleton::getInstance('VHome');
        switch ($view->getController()) {
            case 'register':
                $CRegistrazione=USingleton::getInstance('CRegister');
                return $Cregister->smista();
            // case 'ricerca':
            //     $CRicerca=USingleton::getInstance('CRicerca');
            //     return $CRicerca->smista();
            // case 'ordine':
            //     $COrdine=USingleton::getInstance('COrdine');
            //     return $COrdine->smista();
            // default:
            //     $CRicerca=USingleton::getInstance('CRicerca');
            //     return $CRicerca->ultimiArrivi();
        }
    }
}

?>