<?php
/*
* 5. Напишите класс который должен уметь писать и читать данные из файла.
* Варианты для усложнения жизни:
*  а) Создайте класс Logger который будет писать какие то события в файл (вспоминайте лекцию)
*  б) Создайте класс Messages который будет читать файлы с сообщениями (сообщения создайте в любом текстовом редакторе, или реализуйте запись их в классе Messages)
*  в) Перепишите все с наследованием класса который отвечает за работу с файлами если вы этого еще не сделали
* * */

class Logger 
{
  protected $info = [];
  protected $infile;
  
  public function __set($key, $value)
  {
    $this->info[$key] = $value;
  }
  
  public function __construct($filename)
  {
   $this->infile = fopen($filename, "a+");
  }
  protected function LogDataIntoFile()
  {
    //[name] - message
    $log_string = sprintf("[%s] - %s \r\n", $this->info['name'], $this->info['message']);
    fwrite($this->infile, $log_string);
  }
  
  public function WriteData()
  {
    $this->LogDataIntoFile();
  }
}

class Messages extends Logger
{
  public $contents = [];
  
  public function __set($key, $value)
  {
    parent::__set();
  }
  public function __construct($filename)
  {
    parent::__construct($filename);
    $contents = fread($this->infile, filesize($filename));
    $this->contents = $contents;
  }
  public function getData()
  {
    return $this->contents;
  }
}

$log = new Logger('log.log');
$log->__set('name', 'Petya');
$log->__set('message', 'In the deep shivering winter, I can feel the joy of a dancing summer in my heart. @ Debasish Mridha ');
$log->WriteData();
$log->__set('name', 'Ivan');
$log->__set('message', 'Winter is much like unrequited love: cold and merciless. @ Kellie Elmore');
$log->WriteData();

$msg = new Messages('log.log');
echo $msg->getData();