 <?php
 //1. 
 $name = 'Alexander';
 echo $name;
 
 //2. 
 $concat = 'concatenated';
echo 'This is a ' . $concat . ' string' . "\r\n";
 
 //3
 $string = 'string';
 $int =  5; 
 $bool = true;
 $dub = 1.8 ;
 var_dump($string, $int, $bool, $dub);
 

 //5.1 str_replace
 
  $phrase  = "My favorite month is Feb, but i love Jun too\r\n";
  $months_short = 
 [
	'Jan',
	'Feb',
	'Mar',
	'Apr',
	'Jun',
	'Jul',
	'Aug',
	'Sep',
	'Oct',
	'Nov',
	'Dec',
];
  $months_long = 
 [
	'January',
	'February',
	'March',
	'April',
  'June',
	'July',
	'August',
	'September',
	'October',
	'November',
	'December',
 ];
    echo str_replace($months_short, $months_long, $phrase );
	
//5.2	смотрел описание str_replace на php.net, попалась strtr. Что-то с str_replace не получается так с ассоциативным массивом, наверное 2 ночи не подходящее время :)
	
$phrase  = "My favorite month is Dec, but i love Sep too\r\n";
 $months_translations = 
 [
	'Jan' => 'January',
	'Feb' => 'February',
	'Mar' => 'March',
	'Apr' => 'April',
	'Jun' => 'June',
	'Jul' => 'July',
	'Aug' => 'August',
	'Sep' => 'September',
	'Oct' => 'October',
	'Nov' => 'November',
	'Dec' => 'December',
 ];
echo strtr($phrase, $months_translations);
?>