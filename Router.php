<?php

class Router {
  public $routes = [];
  public function add($uri, $controller) {
    $this->routes[$uri] = $controller;
  }
  public function call ($uri) {
    if (array_key_exists($uri, $this->routes)) {
      require $this->routes[$uri];
    }else {
      require $this->routes['notfound'];
    }
  }
}