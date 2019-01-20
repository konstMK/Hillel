<?php
//1
define ("FAHRENHEIT", "1.8");

function convertor($var, $Cels = true)
{
  if($Cels == true) // better and right way if($Cels)
  {
    $var = ($var - 32) / FAHRENHEIT;
    return "Celsium: " . $var;
  }
  else
  {
    $var = ($var * FAHRENHEIT) + 32;
    return "Fahrenheit: " . $var;
  }
}

echo convertor(100 , 0) . "\n"; // Fahrenheit: 212 
echo convertor(212); // Celsium: 100 

//2
function calculator($operation, ...$num)
{
  switch($operation)
  {
    case "sum": 
      return $num[0] + $num[1] + $num[2];
      break;
    case "substract": 
      return $num[0] - $num[1];
      break;
    case "multiply": 
      return $num[0] * $num[1];
      break;
    case "divide": 
      if($num[1] != 0)
        return $num[0] / $num[1];
      else
        echo "Can't divide by zero";
      break;
    default: 
      echo "Usage: operator, number1, number2";
  }
}


echo calculator('sum', 2, 5) . "\n"; //должно быть 7

echo calculator('substract', 7, 2) . "\n"; // должно быть 5

echo calculator('multiply', 3, 2) . "\n"; //должно быть 6

echo calculator('divide', 5.5, 3.2) . "\n"; //должно быть 1.71875

echo calculator('divide', 4, 0) . "\n"; // вывод ошибки 'Деление на ноль'

//Вы можете использовать splat операторы, например
echo calculator('sum', 5,3,2) . "\n"; //должно быть 10 



//3.
//declare(strict)
function validate(int $int, $var, $operation)
{
  switch($operation)
  {
    case 'lessthan':
      if(gettype($var) == 'string')
        return ($int < strlen($var)) ? true : false;
      else
        return ($int < $var) ? true : false;
      break;
    case 'greaterthan':
      if(gettype($var) == 'string')
        return ($int > strlen($var)) ? true : false;
      else
        return ($int > $var) ? true : false;
      break;
    case 'equals':
      if(gettype($var) == 'string')
        return ($int == strlen($var)) ? true : false;
      else
        return ($int == $var) ? true : false;
      break;
    default:
      echo "Usage int, string/int, compare operator";
  }
}



var_dump(validate(1, 2, 'lessthan')); // должно быть true

var_dump(validate(1, 2, 'greaterthan')); // должно быть false

var_dump(validate(4, 'test', 'equals')); // должно быть true

var_dump(validate(5, 'test', 'lessthan')); //должно быть false