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
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Employee & Payroll Information</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<style>
table, th, td{
  border: 2px solid black;
  border-collapse: collapse;
  height: 50px;
  width: 2000px;
}
th, td{
  text-align: center;
}
</style>
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/leftbar.php"); ?>

<div class="content-wrapper">

  <div class="content-header sty-one">
    <h1 class="text-center">Employee & Payroll Information</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Tables</li>
      <li><i class="fa fa-angle-right"></i> Employee Payroll</li>
    </ol>
  </div>

  <div class="content">
    <div class="card">
      <div class="card-body">
        <!-- ================= PAYROLL TABLE ================= -->
        <h4 class="text-dark">Payroll Data Record</h4>

        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>Payroll ID</th>
                <th>Employee ID</th>
                <th>Month</th>
                <th>Year</th>
                <th>Basic Salary</th>
                <th>Tax</th>
                <th>Allowance</th>
                <th>Deduction</th>
                <th>Net Salary</th>
                <th>Generated At</th>
              </tr>
            </thead>

            <?php
            $rawData1 = $conn->query("SELECT * FROM deduction WHERE deduction.employee_id = '$employee_id'");
            // $row1 = $rawData1->fetch_object();
            //   $sql_payroll = "SELECT * FROM payroll ORDER BY payroll_id";
            //   $payrollData = $conn->query($sql_payroll);

              // $sql_deduction = "INSERT ";
              // $payrollData = $conn->query($sql_payroll)
            ?>

            <tbody>
              <?php if($payrollData->num_rows > 0){ ?>
                <?php while($row = $payrollData->fetch_assoc()){ ?>
                <tr>
                  <td><?= $row['payroll_id']; ?></td>
                  <td><?= $row['employee_id']; ?></td>
                  <td><?= $row['month']; ?></td>
                  <td><?= $row['year']; ?></td>
                  <td><?= $row['basic_salary']; ?></td>
                  <td><?= $tax = $row['basic_salary']*(5/100) ?></td>
                  <td><?= $row['deducation']; ?></td>
                  <td><?= $row['allowance']; ?></td>
                  <td><strong><?= $row['net_salary']; ?></strong></td>
                  <td><?= date('d M Y', strtotime($row['generated_at'])); ?></td>
                </tr>
                <?php } ?>
              <?php } else { ?>
                <tr>
                  <td colspan="8" class="text-center">No Payroll Found</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <hr>
        <a href="payroll.php" class="btn btn-outline-success">Generate Payroll</a>

      </div>
    </div>
  </div>
</div>

<footer class="main-footer">
  <div class="pull-right hidden-xs">Version 1.0</div>
  Copyright © 2018 Yourdomain.
</footer>

</div>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/bizadmin.js"></script>
<script src="dist/js/demo.js"></script>

</body>
</html>
