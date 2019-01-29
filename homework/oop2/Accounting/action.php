<?php
require_once('TimeAccounting.php');
require_once('UsernameNotSetException.php');

try
  {
    
    $name = trim(stripslashes($_POST['employee_name']));
    $dep = trim(stripslashes($_POST['department']));
  
    $work = new TimeAccounting($name, $dep, 'test.log');
    if($_POST['work_start'])
    {
      $dt = $_POST['work_start'];
      $work->workBegins($dt);
    }
   
    if($_POST['work_end'])
    {
      $dt = $_POST['work_end'];
      $work->workEnds($dt);
    } 
    
    echo $work->worked();
    $work->writeData();
  } catch (UsernameNotSetException $e) { 
      echo $e->getMessage() . "<br>";
      echo $e->getCode();
  }
