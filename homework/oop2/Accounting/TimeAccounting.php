<?php 
require_once('TimeAccountingAbstract.php');
require_once('UsernameNotSetException.php');

class TimeAccounting extends TimeAccountingAbstract
{
  public $work_start;
  public $work_end;
  public $work_interval;
  private $log_info = [];
  private $storage_file;
  
  public function __construct(string $name, string $department, $filename)
  {
    $this->log_info['employee_name'] = $name;
    
    //if name is empty
    if(!$this->log_info['employee_name'])
    {
      throw new UsernameNotSetException('Username is not set', 777);
    }
    $this->log_info['department'] = $department;
    
    //if department isn't set
    if(!$this->log_info['department'])
    {
      throw new UsernameNotSetException('Department is not set', 775);
    }
    $this->storage_file = fopen($filename, "a+");
  }

  public function WorkBegins($date)
  {
    $this->work_start = date($date);
    $this->log_info['work_start'] = $this->work_start;
  }
  
  public function WorkEnds($date)
  {
    $this->work_end = date($date);
    $this->log_info['work_end'] = $this->work_end;
  }

  //how many time employee worked
  public function Worked()
  {
    $dt_start = new DateTime($this->work_start);
    $dt_end = new DateTime($this->work_end);
    $interval = $dt_start->diff($dt_end);
    $this->log_info['work_interval'] = $this->work_interval = $interval->format('%H:%i:%s');
  }

  //prepare all the data to write down into file
  protected function LogDataIntoFile(array $log_info)
  {
    //[employee_department] $employee_name start: $work_start || end: $work_end || worked: $work_interval
    $log_string = sprintf("[%s] %s start: %s || end: %s || worked: %s \r\n", $log_info['department'], 
                                                                             $log_info['employee_name'],
                                                                             $log_info['work_start'],
                                                                             $log_info['work_end'],
                                                                             $log_info['work_interval']);
    
    fwrite($this->storage_file, $log_string);
  }
  
  //write all data into storage_file
  public function WriteData()
  {
    $this->LogDataIntoFile($this->log_info);
  }
}
