<?php

  //3.1

$array = [4,4,65,7,345,7,2,34,56,1];

function minMax($array)
{
  rsort($array); 
  $elements = count($array); 
  $min = $array[$elements - 1]; // last element in array - 1, because of \0
  $max = $array[0];
  echo "Min = " . $min . "\n" . "Max = " . $max . "\n";
}

minMax($array);


  //3.2
  /*
   * Получается, не хочет сравнивать кириллицу между собой и переменная pali не увеличивается, 
   * в итоге длинна слова деленная на 2, больше чем количество совпадений(pali)
   * в варианте "аргентина манит негра" находит только 3 совпадения, вместо 9, почему?
   * сравнивал if($string[$i] == $string[$k]), потом if($string[$i] === $string[$k]), потом
   * через strcmp (так как при равенстве возвращает 0) сделал от обратного, работает так же, как и до этого варианта.
   * собственно в этом и вопрос ) загуглив, не хочется увидить другие решения и потом свое изменять. 
   */

  function palindrome($string)
{
  $string = str_replace(' ', '', $string);
  $length = mb_strlen($string, 'UTF-8');
  $k = $length - 1; 
  $pali = 0;

  if(($length % 2) == 0)
  {
    for($i = 0; $i < ($length / 2); $i++)
    {
      $string[$k];
      if(!strcmp($string[$i], $string[$k])) // было if($string[$i] == $string[$k])
      {
        $pali++;
        $k--;
      }

    }
    // echo "pali:".$pali;
    return ($pali == ($length / 2)) ? true : false;
  }

  if(($length % 2) != 0)
  {

    for($i = 0; $i < (($length - 1) / 2); $i++)
    {
      $string[$k];
      if(!strcmp($string[$i], $string[$k]))
      {
        $pali++;
        $k--;
      }
    }
    //echo "pali:".$pali . "\n";
    //echo (($length - 1) / 2);
    return ($pali == (($length - 1) / 2)) ? true : false;
  }

}

var_dump(palindrome('madddam'));//true
var_dump(palindrome('madd'));//false
var_dump(palindrome('shalahs'));//true
var_dump(palindrome('argentina manit negra'));//true
var_dump(palindrome('аргентина манит негра'));//true??
var_dump(palindrome('шалаш'));//true??
var_dump(palindrome('madam'));//true

//3.3
 /* 
  * пока не передал номер карты, как строку, долго сидел и перебирал, методом научного тыка.
  * как можно перебирать номер карты, в массиве, по символу, если его передать как есть, числом?
  */

$arr = [
  [
    '5168 7555 2145 2413'
  ],
  [
    '1168034831037551'
  ],
  [
    '1168034831036456'
  ],
];


function luhnAlgorithm($numbers) {
  
  foreach($numbers as $item)
  {
    // обнуляем контрольную сумму после проверки каждой карты
    $sum = 0; 
    
    foreach($item as $num)
    {
      // убираем пробелы, если они есть
      $num = str_replace(' ', '', $num); 
      $num_length = strlen($num); 
      
      //перебираем номер карты посимвольно 
      for ($i = 0; $i < $num_length; $i++) 
      {
        $card_number = $num[$i];
        
        //четные числа в номере, умножаем на 2
        if (($num_length - $i) % 2 === 0) 
        {
          $card_number = $card_number * 2;
          
          // если номер после удвоение больше 9, вычитаем 9
          if ($card_number > 9) 
          {
            $card_number -= 9;
          }
        }
        
        //плюсуем в контрольную сумму каждое число
        $sum += $card_number;
      }
      var_dump($sum);
    }
    
    //возвращаем массив с проверкой номеров карт, находящихся в входном массиве, а как лучше?
    $result [] = ($sum % 10 === 0) ? true : false; 
  }
  return $result;
}

var_dump(luhnAlgorithm($arr)); // true, false, false



//3.4 точно не самый элегантный способ :)

function romanNumber($int)
{
  while($int >= 1000)
  {
    $int -= 1000;
    $res .= 'M';
  }
  while($int >= 900)
  {
    $int -= 900;
    $res .= 'CM';
  }
  while($int >= 600)
  {
    $int -= 600;
    $res .= 'DC';
  }
  while($int >= 500)
  {
    $int -= 500;
    $res .= 'D';
  }
  while($int >= 400)
  {
    $int -= 400;
    $res .= 'CD';
  }
  while($int >= 100)
  {
    $int -= 100;
    $res .= 'C';
  }
  while($int >= 90)
  {
    $int -= 90;
    $res .= 'XC';
  }
  while($int >= 60)
  {
    $int -= 60;
    $res .= 'LX';
  }
  while($int >= 50)
  {
    $int -= 50;
    $res .= 'L';
  }
  while($int >= 40)
  {
    $int -= 40;
    $res .= 'XL';
  }
  while($int >= 10)
  {
    $int -= 10;
    $res .= 'X';
  }
  while($int >= 9)
  {
    $int -= 9;
    $res .= 'IX';
  }
  while($int >= 6)
  {
    $int -= 6;
    $res .= 'VI';
  }
  while($int >= 5)
  {
    $int -= 5;
    $res .= 'V';
  }
  while($int >= 4)
  {
    $int -= 4;
    $res .= 'IV';
  }
  while($int >= 1)
  {
    $int -= 1;
    $res .= 'I';
  }
  echo $res . "\n";
}

romanNumber(2001) ; // MMI
romanNumber(1699); // MDCXCIX
romanNumber(543); // DXLIII
romanNumber(164); // CLXIV