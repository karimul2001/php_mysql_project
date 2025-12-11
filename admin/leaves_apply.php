<?php 
include_once("includes/db_config.php"); 
session_start();

if(!isset($_SESSION['email'])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Apply for Leave</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<style>
  label { font-weight: bold; }
</style>

</head>
<body class="skin-blue sidebar-mini">

<div class="wrapper boxed-wrapper">

  <?php include_once("includes/header.php"); ?>
  <?php include_once("includes/leftbar.php"); ?>

  <div class="content-wrapper">

    <div class="content-header sty-one">
      <h1 class="text-center">Apply for Leave</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Leave Management</li>
        <li><i class="fa fa-angle-right"></i> Apply Leave</li>
      </ol>
    </div>

    <div class="content">
      <div class="card">
        <div class="card-body">

          <h4 class="text-black text-dark">Leave Application Form</h4>
          <hr>

          <!-- Show Message -->
          <?php 
          if(isset($_SESSION['msg'])){
              echo "<div class='alert alert-success'>".$_SESSION['msg']."</div>";
              unset($_SESSION['msg']);
          }
          ?>

          <!-- Leave Apply Form -->
          <form action="" method="POST">

            <div class="form-group">
              <label>Employee ID</label>
              <input type="number" name="employee_id" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Leave Type</label>
              <select name="leave_type" class="form-control" required>
                <option value="">Select Leave Type</option>
                <option value="Casual Leave">Casual Leave</option>
                <option value="Sick Leave">Sick Leave</option>
                <option value="Annual Leave">Annual Leave</option>
                <option value="Maternity Leave">Maternity Leave</option>
                <option value="Half Day Leave">Half Day Leave</option>
              </select>
            </div>

            <div class="form-group">
              <label>Start Date</label>
              <input type="date" name="start_date" class="form-control" required>
            </div>

            <div class="form-group">
              <label>End Date</label>
              <input type="date" name="end_date" class="form-control" required>
            </div>

            <div class="form-group">
              <label>Reason</label>
              <textarea name="reason" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" name="apply_leave" class="btn btn-primary">Submit Application</button>
            <a href="leaves_history.php"><input type="button" value="Show Leaves History" class="btn btn-secondary"></a>
          </form>

          <?php 
          // Insert Leave Application
          if(isset($_POST['apply_leave'])){
              
              $employee_id = $_POST['employee_id'];
              $leave_type = $_POST['leave_type'];
              $start_date = $_POST['start_date'];
              $end_date = $_POST['end_date'];
              $reason = $_POST['reason'];
              
              $status = "Pending";

              $sql = $conn->prepare("INSERT INTO leaves (employee_id, leave_type, start_date, end_date, reason, status) VALUES (?, ?, ?, ?, ?, ?)");
              $sql->bind_param("isssss", $employee_id, $leave_type, $start_date, $end_date, $reason, $status);

              if($sql->execute()){
                  $_SESSION['msg'] = "Leave Application Submitted Successfully!";
                  echo "Leave Application Submitted Successfully!";
              } else {
                  echo "<div class='alert alert-danger'>Error applying leave!</div>";
              }
          }
          ?>

        </div>
      </div>
    </div>

  </div>

  <footer class="main-footer">
    <div class="pull-right hidden-xs">Version 1.0</div>
    Copyright © 2018 Yourdomain.
  </footer>

  <div class="control-sidebar-bg"></div>

</div>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/bizadmin.js"></script>

</body>
</html>
