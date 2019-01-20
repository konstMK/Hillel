<?php
//1 

function factorial($n)
{
  if($n >= 0)
  {
    $k = 1;
    for($i = 1; $i <= $n; $i++)
    {
      $k = $k * $i;
    }
  }
  else
  {
    echo "Enter valid number > 0 ";
  }
  return $k;
}

echo factorial(6) . "\n"; // 720
echo factorial(3) . "\n"; // 6
echo factorial(0) . "\n"; //wikipedia, !0 = 1

//2 
$string = 'dratuti';

$length = mb_strlen($string);
$temp;
$k = $length;
for ($i = 0; $i < $length; $i++)
{
  $temp[$i] = $string[$k - 1];// k - 1, because strlen of dratuti = 7, but in array first element at 0 index
  $k--;
}

print_r($temp);

//3
$array = [
  1 => 'a',
  2 => 'b',
  3 => 'c',
  4 => 'cat',
  5 => 9998,
];

function searchInArray($array, $element)
{
  $founded = false;
  foreach($array as $key => $value)
  {
      if($value == $element)
      {
        $founded = true;
        return $key;
      }
  }
  if(!$founded)
    return "Element not found";
}

var_dump(searchInArray($array, '7')); // "Element not found"
var_dump(searchInArray($array, 'cat')); // 4













