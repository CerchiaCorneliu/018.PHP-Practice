<?php

  class Application {
    public $router;

    public function __construct(){
      $this->router = new Router();
    }

    public function start(){
      $this->router->route();
    }
  }



?>
