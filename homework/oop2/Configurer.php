<?php
// 3 Написать класс для хранения данных (конфигурации) приложения используя магические методы. 

class Configurer
{
  private $config = [
    "ip" => 0.0.0.0,
    "port" => 8080,
    "DB" => "Configurer.db",
    "host" => 192.168.0.1,
    "server" => "apache",
    "language" => "php",
  ];
 
  
}