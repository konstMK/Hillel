<?php

abstract class CarAbstract 
{
public $color;
public $brand;
public $model;
public $body_type;
public $weigth;
public $length;
public $height;
public $speed;
public $fuel;
public $stearing_wheel_side;
public $engine;
public $hp_power;

abstract public function handBrake();
}