<?php

interface CarMoveInterface
{
  public function accelerationPedal();
  public function brakePedal();
  public function clutchPedal();
  public function turnRight();
  public function turnLeft();
  public function gearUp();
  public function gearDown();
  public function gearRear();
}

interface CarServiceInterface
{
  public function adjustStearingWheel();
  public function adjustSeat();
  public function paintCar();
  public function washCar();
  public function polishCar();
  public function serviceCar();
}