<?php
require "lib.php";

//1
$array = [1,2,3,4,5,6,',',',',10];
var_dump(FirstAndLast($array));

//2 
$array = [1,2,3,4,5,6,',',',',',',',',];
$items = implode(',', $array);
var_dump(DeleteLastInArray($array));
var_dump(DeleteLastInString($items));

//3
$array = [1,2,3,4,5,6,'',0,',',NULL,];
var_dump(DeleteInArray($array));

//4
DrawChess();

//5
$array = [1,7,2,5,3,10,9,4,8,6];
var_dump($array);
var_dump(BubbleSort($array));
