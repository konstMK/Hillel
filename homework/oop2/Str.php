<?php
/*
* 1 Написать класс в котором будут методы для преобразования строки в верхний и нижний регистр, замена одного слова другим, 
* хеширование строки с помощью md5. Методы должны быть статическими
* */
class Str
{
  public static $string;
  public static $word_replaser;
  
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
  
  public static function ReplaceStr($string, $word_replaser)
  {
    self::$string = $string;    
    self::$word_replaser = $word_replaser;    
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
var_dump($string = Str::ReplaceStr("Unreplaced", "Replaced"));
var_dump($string = Str::StrToMd5("Unreplaced Word"));


