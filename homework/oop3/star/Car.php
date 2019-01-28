<?php
require_once ('CarInterface.php');
require_once ('CarAbstract.php');

class Ford extends CarAbstract implements CarMoveInterface, CarServiceInterface
{
  public $color = 'white';
  public $brand = 'ford';
  public $model = 'scorpio_2000';
  public $year = 1996;
  public $body_type = 'universal';
  public $weigth = '2t';
  public $length;
  public $height;
  public $speed;
  public $fuel;
  public $stearing_wheel_side = 'left';
  public $engine = 'gas';
  public $hp_power = 115;
  
  public function handBrake(){}
  public function adjustStearingWheel(){}
  public function adjustSeat(){}
  public function paintCar(){}
  public function washCar(){}
  public function polishCar(){}
  public function serviceCar(){}
  public function accelerationPedal(){}
  public function brakePedal(){}
  public function clutchPedal(){}
  public function turnRight(){}
  public function turnLeft(){}
  public function gearUp(){}
  public function gearDown(){}
  public function gearRear(){}

}

$ford = new Ford();
$ford->accelerationPedal()->turnLeft()->handBrake();