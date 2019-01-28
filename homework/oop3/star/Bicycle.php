<?php
require_once ('BicycleInterface.php');

class Bicycle implements BicycleInterface
{
  public $speed;
  public $gear;
  public $color;
  public $weigth;
  public $length;
  public $height;
  public $num_of_gears;
  public $num_of_gears;
  
  public function accelerateBicycle(){};
  public function brakeFront(){};
  public function brakeRare(){};
  public function turnRight(){};
  public function turnLeft(){};
  public function gearUp(){};
  public function gearDown(){};
  public function adjustHandlebar(){};
  public function adjustSeat(){};
  public function serviceBicycle(){};
}