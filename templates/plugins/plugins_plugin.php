<?php

class PluginsPlugin extends Plugin {

     public function __construct() {
        $this->loadConfig(dirname(__FILE__) . DS . "config.json");
    }

    public function install($plugin_id) {
        #
        # TODO: Place installation logic here
        #
    }
}
?>