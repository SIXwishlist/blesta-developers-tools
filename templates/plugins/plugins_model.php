<?php

class PluginsModel extends AppModel
{
    public function __construct()
    {
        // Load required components/helpers
        Loader::loadComponents($this, ['Record']);
    }
}
