<?php

class PluginsController extends AppController {
    public function preAction() {
        parent::preAction();
  
        // Override default view directory
        $this->view->view = "default";
        $this->structure->view = "default";
    }
}
?>