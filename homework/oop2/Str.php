<?php
/* 2 Написать класс для работы с временем, необходимо получать текущее время и выводить его в нескольких форматах. Форматы необходимо оформить как строковые константы.
 3 Написать класс для хранения данных (конфигурации) приложения используя магические методы. 
 4 Написать класс или несколько классов для приложения учета рабочего времени сотрудников, данные должны хранить следующие параметры: время начала работы, время конца работы, имя сотрудника и отдел. Данные нужно хранить в файл, для обработки ошибок используйте исключения*/

/*1 Написать класс в котором будут методы для преобразования строки в верхний и нижний регистр, замена одного слова другим, хеширование строки с помощью md5. Методы должны быть статическими*/
class Str
{
  public static $string;
  public static $word_replaser = "Replaced";
  
  public static function toUpper($string)
  {
    self::$string = $string;    
    return strtoupper(self::$string);
  }
  
  public static function toLower($string)
  {
    self::$string = $string;    
    return strtolower(self::$string);

  }
  
  public static function ReplaceStr($string)
  {
    self::$string = $string;    
    return str_replace(self::$string, self::$word_replaser, self::$string);
  }
  
  public static function StrToMd5($string)
  {
    self::$string = $string;    
    return md5(self::$string);
  }
}

var_dump($string = Str::toUpper("aaaaa"));
var_dump($string = Str::toLower("VVVVV"));
var_dump($string = Str::ReplaceStr("Unreplaced"));
var_dump($string = Str::StrToMd5("Unreplaced"));


