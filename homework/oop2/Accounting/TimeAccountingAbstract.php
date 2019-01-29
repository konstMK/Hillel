<?php 
/*
* 4 Написать класс или несколько классов для приложения учета рабочего времени сотрудников, данные должны хранить следующие параметры: 
* время начала работы, 
* время конца работы, 
* имя сотрудника и отдел. 
* Данные нужно хранить в файл, для обработки ошибок используйте исключения
* */
abstract class TimeAccountingAbstract
{
  public $employee_name;
  public $employee_department;
  public $work_start;
  public $work_end;
    
  //log time when work ended
  public abstract function workBegins(string $date);
  
  //log time when work ended
  public abstract function workEnds(string $date);
  
  //how many time employee worked
  public abstract function worked();
  
  //write all the data down to file
  protected abstract function logDataIntoFile(array $log_info);
}
