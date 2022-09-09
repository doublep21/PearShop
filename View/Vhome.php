<?php
class Vhome extends View {
    private $_main_content;
    private $_bar_button;
    private $_layout='default';
  
    public function mostraPagina() {
        $this->assign('_bar_button',$this->_bar_button);
        $this->display('home_'.$this->_layout.'.tpl');
    }
 
    public function impostaContenuto($contenuto) {
        $this->_main_content=$contenuto;
    }
    
    public function getController() {
        if (isset($_REQUEST['controller']))
            return $_REQUEST['controller'];
        else
            return false;
    }
    
    public function impostaPaginaGuest() {
        $this->assign('title','Pearshop');
        $this->addregisterbutton();
        $this->assign('main_content',$this->_main_content);
    }
   
    public function addlogoutbutton() {
        $this->_bar_button= array('testo' => 'Logout', 'link' => '?controller=register&task=exit');
    }
    
    public function addregisterbutton() {
        $this->_bar_button= array('testo' => 'Register', 'link' => '?controller=register&task=register');
    }
    
}

?>