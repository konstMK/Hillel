<?php

interface TankMoveInterface
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

interface TankServiceInterface
{
  public function paintTank();
  public function washTank();
  public function fuelTank();
  public function serviceTank();
  public function serviceTracks();
  public function throwCamoNet();
  public function digAround();
  
}

interface TankShootInterface
{
  public function shootMainGun();
  public function shootSecondGun();
  public function reloadMainGun();
  public function reloadSecondGun();
  public function aimMainGunUp();
  public function aimMainGunDown();
  public function aimSecondGunUp();
  public function aimSecondGunDown();
  public function turnTurretRight();
  public function turnTurretLeft(); 
}