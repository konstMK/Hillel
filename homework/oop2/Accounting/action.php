<?php
require_once('TimeAccounting.php');

if($_POST['employee_name'] && $_POST['department'])
{
  $name = trim(stripslashes($_POST['employee_name']));
  $dep = trim(stripslashes($_POST['department']));
  $work = new TimeAccounting($name, $dep, 'test.log');
  $work->WorkBegins();
  sleep(1);
  $work->WorkEnds();
  $work->Worked();
  $work->WriteData();
}
