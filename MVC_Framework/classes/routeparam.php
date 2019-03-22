<?php

class RouteParam {
  public $name = null;
  public $ca = null;
  public $params = null;

  public function __construct($routeParams){
    $keys = ['name','ca','params'];
    foreach ($keys as $key) {
      if(isset($routeParams[$key])){
        $this->$key = $routeParams[$key];
      }
    }
  }
}










?>
