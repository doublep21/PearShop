<?php
require('smarty-4.1.0/libs/Smarty.class.php');
class View extends Smarty {
    public function __construct() {
        // $this->Smarty();
        parent::__construct();
        global $config;
        $this->template_dir = $config['smarty']['template_dir'];
        $this->compile_dir = $config['smarty']['compile_dir'];
        $this->config_dir = $config['smarty']['config_dir'];
        $this->cache_dir = $config['smarty']['cache_dir'];
        $this->caching = false;
    }
}
?>