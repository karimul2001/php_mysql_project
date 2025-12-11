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
<title>Leave History</title>

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
<!-- Header -->
  <?php include_once("includes/header.php"); ?>

<!-- Left Bar -->
 
  <?php include_once("includes/leftbar.php"); ?>

  <div class="content-wrapper">

    <div class="content-header sty-one">
      <h1 class="text-center">Leave History</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Leave Management</li>
        <li><i class="fa fa-angle-right"></i> Leave History</li>
      </ol>
    </div>

    <div class="content">
      <div class="card">
        <div class="card-body">

          <h4 class="text-black text-dark">Employee Leave History</h4>
          <hr>

          <?php 
          // Fetch Leave History
          $result = $conn->query("SELECT * FROM leaves ORDER BY leave_id");
          ?>

          <table class="table table-bordered mt-3">
            <thead>
              <tr>
                <th>Leave ID</th>
                <th>Employee ID</th>
                <th>Leave Type</th>
                <th>Start Date</th>
                <th>End Date</th>
                <th>Reason</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?php echo $row['leave_id']; ?></td>
                <td><?php echo $row['employee_id']; ?></td>
                <td><?php echo $row['leave_type']; ?></td>
                <td><?php echo $row['start_date']; ?></td>
                <td><?php echo $row['end_date']; ?></td>
                <td><?php echo $row['reason']; ?></td>
                <td>
                  <?php 
                  if($row['status'] == "Pending"){
                      echo "<span class='badge badge-warning'>Pending</span>";
                  } elseif($row['status'] == "Approved"){
                      echo "<span class='badge badge-success'>Approved</span>";
                  } else {
                      echo "<span class='badge badge-danger'>Rejected</span>";
                  }
                  ?>
                </td>
              </tr>
            <?php endwhile; ?>
            </tbody>
          </table>
          <a href="leaves_apply.php"><input type="button" value="Apply" class="btn btn-outline-primary"></a>
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
