<?php

require_once('TankAbstract.php');
require_once('TankInterface.php');

class Tank extends TankAbstract implements TankMovementInterface, 
                                           TankServiceInterface, 
                                           TankShootInterface
{
  public $color = 'forest';
  public $brand = 'object';
  public $model = 140;
  public $body_type = 'main battle tank';
  public $weight;
  public $length;
  public $height;
  public $speed = 55;
  public $fuel;
  public $engine = 'diesel';
  public $hp_power;
  public $target = 'putin';
                           
  public function startEngine(){}                                           
  public function accelerationPedal()
  {
      // TODO: Implement accelerationPedal() method.
  }

  public function brakePedal()
  {
      // TODO: Implement brakePedal() method.
  }

  public function clutchPedal()
  {
      // TODO: Implement clutchPedal() method.
  }

  public function turnRight()
  {
      // TODO: Implement turnRight() method.
  }

  public function turnLeft()
  {
      // TODO: Implement turnLeft() method.
  }

  public function gearUp()
  {
      // TODO: Implement gearUp() method.
  }

  public function gearDown()
  {
      // TODO: Implement gearDown() method.
  }

  public function gearRear()
  {
      // TODO: Implement gearRear() method.
  }

  public function paintTank()
  {
      // TODO: Implement paintTank() method.
  }

  public function washTank()
  {
      // TODO: Implement washTank() method.
  }

  public function fuelTank()
  {
      // TODO: Implement fuelTank() method.
  }

  public function serviceTank()
  {
      // TODO: Implement serviceTank() method.
  }

  public function serviceTracks()
  {
      // TODO: Implement serviceTracks() method.
  }

  public function throwCamoNet()
  {
      // TODO: Implement throwCamoNet() method.
  }

  public function digAround()
  {
      // TODO: Implement digAround() method.
  }

  public function shootMainGun()
  {
      // TODO: Implement shootMainGun() method.
  }

  public function shootSecondGun()
  {
      // TODO: Implement shootSecondGun() method.
  }

  public function loadMainGun(){}
                                             
  public function reloadMainGun()
  {
      // TODO: Implement reloadMainGun() method.
  }

  public function reloadSecondGun()
  {
      // TODO: Implement reloadSecondGun() method.
  }

  public function aimMainGunUp($target)
  {
      // TODO: Implement aimMainGunUp() method.
    return $one_shoot_macro = $this->aimMainGunUp($target);
  }

  public function aimMainGunDown()
  {
      // TODO: Implement aimMainGunDown() method.
  }

  public function aimSecondGunUp()
  {
      // TODO: Implement aimSecondGunUp() method.
  }

  public function aimSecondGunDown()
  {
      // TODO: Implement aimSecondGunDown() method.
  }

  public function turnTurretRight()
  {
      // TODO: Implement turnTurretRight() method.
  }

  public function turnTurretLeft()
  {
      // TODO: Implement turnTurretLeft() method.
  }

  public function handBrake(){}
  public function startSmokeScreen(){}
  public function startMissileDefence(){}
  public function destroypUtin(){}
  

}

$object_140 = new Tank();
$object_140->startEngine()->loadMainGun()->aimMainGunUp()->destroypUtin();