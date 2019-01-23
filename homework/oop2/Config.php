<?php
// 3 Написать класс для хранения данных (конфигурации) приложения используя магические методы. 

class Config
{
  private $config = [];
  
  public function __set($key, $value)
  {
    $this->config[$key] = $value;
  }
  
  public function __get($key)
  {
    return $this->config[$key];
  }
  
  public function __unset($key)
  {
    unset($this->config[$key]);
  }
  
}

$set = new Config();

$set->login = "Sugar";
$set->host = '127.0.0.1';
$set->port = 8080;

var_dump($set->port); //8080
var_dump($set); 