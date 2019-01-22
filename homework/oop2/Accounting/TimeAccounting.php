<?php 
require_once('TimeAccountingAbstract.php');

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
    $this->log_info['department'] = $department;
    $this->storage_file = fopen($filename, "a+");
  }

  public function WorkBegins()
  {
    //$this->work_start = $work_start;
    $this->work_start = date("Y m D H:i:s");
    $this->log_info['work_start'] = $this->work_start;
  }
  
  public function WorkEnds()
  {
    //$this->work_end = $work_end;
    $this->work_end = date("Y m D H:i:s");
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

  //write all the data into file
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
  
  public function WriteData()
  {
    $this->LogDataIntoFile($this->log_info);
  }

}
