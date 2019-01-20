<?php

//1
function FirstAndLast($array)
{
  $num_of_elements = count($array);
  
  return "First: " . $array[0] . "\nLast: " . $array[$num_of_elements - 1];
  
  
  //return "First: " . $array[0] . "\nLast: " . end($array);  
}



//2 сделал так, потом понял, что нужно работать с $items, а я работал с $array
function DeleteLastInArray($array)
{
  $num_of_elements = count($array);

  $i = 0;
  foreach($array as $values)
  {
    if($values == ",")
      unset($array[$i]);
    $i++;
  }
   return $array;
}

function DeleteLastInString($str)
{
  $str = rtrim($str, ',');
  return $str;
}


//3
function DeleteInArray($array)
{
  $i = 0;
  foreach($array as $values)
  {
    if($values == "0" || $values == "" || $values == NULL || $values == ",")
      unset($array[$i]);
    $i++;
  }
  return $array;
}


//4
function DrawChess($columns = 7, $rows = 5)
{
  echo "RKnBKQBKnR\n";
  echo " PPPPPPPP\n";
  for($i = 0; $i <= $rows; $i++)
  {
    echo " ";
    for($j = 0; $j <= $columns; $j++)
    {
      echo "-";
    }
    echo "\n";
  }
 
  echo " PPPPPPPP\n";
  echo "RKnBKQBKnR\n";
}


//5 
function BubbleSort($array)
{
  $arr_size = count($array);
  $swap_count = 0;
  $i = 0;
  
  if($arr_size == 0) return 0;
    
  while($i != $arr_size)
  {
    
    if(($i + 1) != $arr_size && $array[$i] > $array[$i + 1])
    {
      $temp = $array[$i];
      $array[$i] = $array[$i + 1];
      $array[$i + 1] = $temp;
      $swap_count = 1;
    }
   
    $i++;
  
    // если дошли до конца массива и сделали одну перестановку, сбрасываем счетчик $i
    if ($i == $arr_size && $swap_count == 1)
    {
      $swap_count = 0;
      $i = 0;
    }
  }
  
  return $array;
}



