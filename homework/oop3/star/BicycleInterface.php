<?php
/*
* 6. Задание со звездочкой. Используя знания об абстрактных класса, интерфейсах, 
* полиморфизме, опишите на PHP  велосипед, танк, автомобиль. Только структура, 
* писать логику как это будет ездить и стрелять не надо
* * */

interface Bicycle
{
  public function accelerateBicycle();
  public function brakeFront();
  public function brakeRare();
  public function turnRight();
  public function turnLeft();
  public function gearUp();
  public function gearDown();
  public function adjustHandlebar();
  public function adjustSeat();
  public function serviceBicycle();
  
}

