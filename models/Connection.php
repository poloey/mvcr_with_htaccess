<?php

class Connection {
  protected static $con;
  public function __construct()
  {
    static::$con = new PDO('mysql:host=localhost;dbname=college', 'root', '');
  }
}

new Connection;