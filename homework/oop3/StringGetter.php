<?php
/*
* 1. Необходимо создать класс который будет уметь хранить и получать строку которую введет пользователь.
* Для реализации этого задание не забудьте создать пару методов один из которых буде записывать данные 
* в свойство класса, второй получать его.
* Варианты для развития:
* а) реализуйте функционал который будет записывать данные в свойство класса используя констурктор
* б) перепишите методы класса как статические
* */

class StringStatic
{
  public static $user_input;
    
  public static function setString($input)
  {
    self::$user_input = $input;
  }
  
  public static function getString()
  {
    return self::$user_input;
  }
  
}

class StringDynamic 
{
  public $user_input;
  
  public function __construct(string $input)
  {
    $this->user_input = $input;
  }
  
  public function getString()
  {
    return $this->user_input;
  }
}

StringStatic::setString('be or not to be');
echo StringStatic::getString() . "\n";

$dynamic  = new StringDynamic('Dynamic power');
echo $dynamic->getString();
