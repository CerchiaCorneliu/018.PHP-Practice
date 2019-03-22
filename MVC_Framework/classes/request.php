<?php

  class Request {
    public static function method(){
      $method = strtolower($_SERVER['REQUEST_METHOD']);
      return $method;
    }
  }



?>
