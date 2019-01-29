<?php

abstract class TankAbstract
{
  public $color;
  public $brand;
  public $model;
  public $body_type;
  public $weight;
  public $length;
  public $height;
  public $speed;
  public $fuel;
  public $engine;
  public $hp_power;

  abstract public function handBrake();
  abstract public function startSmokeScreen();
  abstract public function startMissileDefence();
}