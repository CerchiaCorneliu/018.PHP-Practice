<?php

  class Url {
    public static function getUrl($withQueryString = true) {
      $uri=trim($_SERVER['REQUEST_URI'],'/');
      if($withQueryString == false){
        $questionMarkPos = strpos($uri, '?');
        if($questionMarkPos !== false) {
          $uri = trim(substr($uri,0,$questionMarkPos),'/');
        }
      }
      return $uri;
    }
  }




 ?>
