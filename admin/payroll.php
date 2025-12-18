<?php
include_once("includes/db_config.php");
session_start();

if(!isset($_SESSION['email'])){
  header("Location: index.php");
}

// INSERT PAYROLL
if(isset($_POST['submit'])){
  $employee_id   = $_POST['employee_id'];
  $month         = $_POST['month'];
  $year          = $_POST['year'];
  $basic_salary  = $_POST['basic_salary'];
  $deducation    = $_POST['deducation'];

  $net_salary = $basic_salary - $deducation;

  $sql = "INSERT INTO payroll
  (employee_id, month, year, basic_salary, deducation, net_salary)
  VALUES
  ('$employee_id','$month','$year','$basic_salary','$deducation','$net_salary')";

  $conn->query($sql);

  if($conn->affected_rows){
    echo "<div class='alert alert-success text-center'>Payroll Generated Successfully</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Payroll Entry</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/leftbar.php"); ?>

<div class="content-wrapper">

  <div class="content-header sty-two">
    <h1 class="text-white text-center">Payroll Entry</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Payroll</li>
      <li><i class="fa fa-angle-right"></i> Generate</li>
    </ol>
  </div>

  <div class="content">
    <div class="card">
      <div class="card-body">

        <h4 class="text-green text-center">Generate Employee Payroll</h4>

        <form method="post">

          <div class="form-group has-black">
            <label>Employee ID</label>
            <input type="number" name="employee_id" class="form-control" required>
          </div>

          <div class="form-group has-black">
            <label>Month</label>
            <select name="month" class="form-control" required>
              <option value="">Select Month</option>
              <option>January</option>
              <option>February</option>
              <option>March</option>
              <option>April</option>
              <option>May</option>
              <option>June</option>
              <option>July</option>
              <option>August</option>
              <option>September</option>
              <option>October</option>
              <option>November</option>
              <option>December</option>
            </select>
          </div>

          <div class="form-group has-black">
            <label>Year</label>
            <input type="number" name="year" value="<?= date('Y'); ?>" class="form-control">
          </div>

          <div class="form-group has-black">
            <label>Basic Salary</label>
            <input type="number" name="basic_salary" class="form-control" required>
          </div>

          <div class="form-group has-black">
            <label>Deduction</label>
            <input type="number" name="deducation" value="0" class="form-control">
          </div>

          <div class="form-group has-black">
            <label>Net Salary</label>
            <input type="text" class="form-control" placeholder="Auto Calculated" disabled>
          </div>

          <input type="submit" name="submit" value="Generate Payroll" class="btn btn-outline-success">
          <a href="payroll_list.php" class="btn btn-outline-info">Payroll List</a>

        </form>

      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>

</div>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/bizadmin.js"></script>
</body>
</html>
