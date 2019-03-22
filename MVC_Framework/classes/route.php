<?php

class Route {
  public static $get=[];
  public static $post=[];

  public static function get($url, $routeParams) {
    $routeParamObject = new RouteParam($routeParams);
    self::$get[$url] = $routeParamObject;
    return $routeParamObject;
  }

  public static function post($url, $routeParams) {
    $routeParamObject = new RouteParam($routeParams);
    self::$post[$url] = $routeParamObject;
    return $routeParamObject;
  }
}




?>
