<?php

namespace Rodrigotutz\Controller;

use League\Plates\Engine;

abstract class Controller {
    
    protected $router;
    protected $view;

    public function __construct($router, $path) {
        $this->router = $router;
        $this->view = new Engine($path, "php");
        $this->view->addData([
            "router" => $router
        ]);
    }

}