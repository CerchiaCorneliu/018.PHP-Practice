<?php
  class Router {
    public $controller;
    public $action;
    public $params;
    public $targetUrl = 0;

    public function __construct() {
      $this->controller = CONTROLLER;
      $this->action = ACTION;
      $this->params = [];
      $this->findUrl();
      if($this->targetUrl === 0){
        require_once '404.php';
        exit;
      }
      $this->setRouteParams();
      // $this->setControllerAndAction();
    }

    public function findUrl(){
      $method = Request::method();
      $routes = null;
      if($method == 'post') {
        $routes = Route::$post;
      } else {
        $routes = Route::$get;
      }
      $uri = Url::getUrl(false);
      foreach($routes as $url => $routeParamObject){
        if($uri == $url && strpos($url,'{') === false) {
          $this->targetUrl = $url;
          break;
        }
        if(strpos($url,'{') === false) {
          continue;
        }
        $uriSections = explode('/',$uri);
        $urlSections = explode('/',$url);
        if(count($uriSections)>count($uriSections)){
          continue;
        }
        $unmatched = 0;
        for($i = 0; $i < count($urlSections); $i++){
          if(strpos($urlSections[$i], '{') === false){
            if(!isset($uriSections[$i]) || $urlSections[$i] != $uriSections[$i] ){
              $unmatched++;
            }
          }
          if($unmatched == 0) {
            $this->targetUrl = $url;
            break;
          }
        }
      }
    }


    public function route() {
      // echo $this->targetUrl;
      // echo 'yeah';
    }

    public function setParams() {
      $method = Request::method();
      if($method == 'post') {
        return;
      }
      $url = $this->targetUrl;
      $firstBracketPos = strpos($url,'{');
      if($firstBracketPos === false){
        return;
      }
      $routeParamObject = Route::$get[$url];
      $this->parms = $routeParamObject->params;
      $url = Url::getUrl(false);
      $uriParamsString = trim(substr($uri, $firstBracketPos),'/');
      if(empty($uriParamsString)){
        return;
      }
      $uriParamsArray = explode('/', $uriParamsString);
      $i = -1;
      foreach ($this->params as $key => $value) {
        $i++;
        if(isset($uriParamsArray[$i])) {
          $this->params[$i] = $uriParamsArray[$i];
        }
      }
    }
  }



?>
