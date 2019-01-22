<?php 
  /*require_once('TimeAccounting.php');
  $work = new TimeAccounting();*/
?>
<!DOCTYPE html>
<html>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Worktime Accounting</title>
    <link rel="stylesheet" href="bootstrap.css">
  </head>
  <body>
    <div class="container">
      <div class="alert alert-success" role="alert">
        <h1 class="text-center">Slaves must work</h1>
      </div>
      <div class="col-md-auto">
        <div class="row justify-content-md-center">
            <form action = "action.php" method="POST">
              <div class="form-group">
                <label for="employee_name">Username</label>
                <input type="text" name="employee_name" class="form-control" aria-describedby="UsernameHelp"
                       placeholder="Enter username">
                <small id="UsernameHelp" class="form-text text-muted">We'll never share your schedule.</small>
              </div>
              <div class="form-group">
                <label for="department">Department</label>
                <input type="text" name="department" class="form-control" aria-describedby="DepartmentHelp" 
                       placeholder="Enter your Dep">
                <small id="DepartmentHelp" class="form-text text-muted">We know everything about you :D</small>
              </div>
              <div class="form-group">
                <label for="department">Start working at:</label>
                <input type="text" name="work_start" class="form-control" aria-describedby="work_startHelp" 
                       placeholder="2019-01-21 08:00:00" value="2019-01-21 08:00:00">
                <small id="work_startHelp" class="form-text text-muted">We believe you!</small>
              </div>
              <div class="form-group">
                <label for="work_end">Stop working at:</label>
                <input type="text" name="work_end" class="form-control" aria-describedby="work_startHelp" 
                       placeholder="2019-01-21 08:00:00" value="2019-01-21 08:01:00">
                <small id="work_endtHelp" class="form-text text-muted">Be precise!</small>
              </div>
              <div class="row justify-content-md-center">
                <input class="btn btn-primary" type="submit" value="Submit">
              </div>
            </form> 
        </div>
      </div>
    </div>
  </body>
</html>