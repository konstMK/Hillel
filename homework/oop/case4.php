<?php
//1 Создайте класс Into и реализуйте метод getClassName() который должен вывести имя класса в котором вызывается метода,
// используйте магическую константу для получения имени класса
class Into
{
  
  public function getClassName()
  {
    echo __CLASS__;
  }
}

$into = new Into();
$into->getClassName(); // Into

//2 Создайте класс Math и реализйте методо calcFactorial($number) который будет расчитывать факториал целых чисел
class Math
{
  public $number;
  
  public function calcFactorial($number)
  {
    $this->number = $number;
    if($number >= 0)
    {
      $k = 1;
      for($i = 1; $i <= $number; $i++)
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
}

$math = new Math();
var_dump($math->calcFactorial(0));// !0 = 1
var_dump($math->calcFactorial(3));// 6

//3 Дополните класс Math из предыдущего задание и реализуйте метод для простого калькулятора
class Math
{
  public $number;
  public $operation;
  public $num;

  public function calcFactorial($number)
  {
    $this->number = $number;
    if($number >= 0)
    {
      $k = 1;
      for($i = 1; $i <= $number; $i++)
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
  
  public function calc($operation, ...$num)
  {
    $this->operation = $operation;
    $this->num = $num;
    switch($operation)
    {
      case "+": 
        return $num[0] + $num[1] + $num[2];
      case "-": 
        return $num[0] - $num[1];
      case "*": 
        return $num[0] * $num[1];
      case "/": 
        if($num[1] != 0)
          return $num[0] / $num[1];
        else
          echo "Can't divide by zero";
        break;
      default: 
        echo "Usage: operator(+, -, *, /), number1, number2";
    }
  }
}
$math = new Math();
var_dump($math->calc('+', 1,2,3));// 6
var_dump($math->calc('/', 1,2));// 0.5

/* 4
* Создайте класс который будет принимать массив целых чисел при создании объекта класса и сортировать их 
*(можно использовать PHPешный sort()), также создайте свойсвтво где этот массив будет хранится и метод для \
* получения этого свойства.
**/
class Sorter
{
  public $numbers;
  public $sorted_nums;
  
  public function __construct(array $numbers)
  {
    $this->numbers = $numbers;
    $this->sorted_nums = $sorted_nums;
    // сортируем и присваиваем значение отсортированного массива $numbers в переменную $sorted_nums
    sort($numbers);
    $this->sorted_nums = $numbers;
  }
  
  public function getSortRes()
  {
    return $this->sorted_nums;
  }
}

$array = [1,7,2,5,3,10,9,4,8,6];
$sorter = new Sorter($array);
var_dump($sorter->getSortRes());

/*5 Создайте класс Accounting (например часть бухгальерской программы) и реализуйте следующий функционал: 
  * метод для получения данных о пользователе, например ФИО, номер счета, сколько начисленно, сколько вычтенно налогов и тд на ваше усмотрение, данные должны быть представленны в массиве. 
  * метод для добавление новых записей в массив с данными о пользователе
  * метод для удаление записи о пользователе
  * метод для редактирования записи о пользователе
  * метод который считает количество налогов которые будут вычтенны из ЗП
  **/
class Accounting
{
  public $name;
  public $email;
  public $acc_number;
  public $salary;
  public $taxes;
  public $arr;
  
  public function __construct(array $arr)
  {
    $this->arr = $arr;
    $this->name = $arr['name'];
    $this->email = $arr['email'];
    $this->acc_number = $arr['acc_number'];
    $this->salary = $arr['salary'];
    $this->taxes = $arr['taxes'];
  }

  public function getInfo($data)
  {
    return $this->arr[$data];
  }
  public function addInfo($key, $value)
  {
    if(empty($this->arr[$key]))
      $this->arr[$key] = $value;
    else
      echo "Can't overwrite $key";
  }
  public function delInfo($data)
  {
    if(!empty($this->arr[$data]))
      unset($this->arr[$data]);
    else
      echo "$data not in array";
    
  }
  public function changeInfo($key, $value)
  {
    if($this->arr[$key] != $value)
      $this->arr[$key] = $value;
  }
  public function taxCount()
  {
    if($this->taxes != 0)
      return ($this->getUser('salary') / 100) * $this->getUser('taxes');
  }
}

$info = [
    'name' => 'Alexander Pylypenko',
    'email' => 'Alex@gmail.com',
    'acc_number' => 222,
    'salary' => 3200,
    'taxes' => 33,
];

$class = new Accounting($info);


$class->addInfo("phone", 7777777);
$class->changeInfo("phone", 555555);
$class->delInfo("email");
var_dump($class->getInfo("acc_number")); // 222
var_dump($class->taxCount()); // ((3200/100) * 33) = 1056
