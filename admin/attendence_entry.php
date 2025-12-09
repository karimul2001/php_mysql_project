<?php include_once("includes/db_config.php"); 
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
<title>Biz Admin - Multipurpose bootstrap 4 admin templates</title>
<!-- Tell the browser to be responsive to screen width -->

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
<meta name="author" content="uxliner"/>
<!-- v4.1.3 -->
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

<!-- Favicon -->
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

<!-- Theme style -->
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
  <?php include_once("includes/header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once("includes/leftbar.php"); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-two">
      <h1 class="text-white text-center">Employee Entry</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> <a href="#">Form</a></li>
        <li><i class="fa fa-angle-right"></i> Employee Entry</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="card">
        <div class="card-body">
          <?php
            // Insert Attendance
            if(isset($_POST['submit'])){
            $employee_id = $_POST['employee_id'];
            $date = $_POST['date'];
            $check_in = $_POST['check_in'];
            $check_out = $_POST['check_out'];

            // Calculate working hours
            $start = strtotime($check_in);
            $end = strtotime($check_out);
            $diff = $end - $start;

            $working_hours = gmdate("H:i", $diff);

            $sql = "INSERT INTO attendance (employee_id, date, check_in, check_out, working_hours)
            VALUES ('$employee_id', '$date', '$check_in', '$check_out', '$working_hours')";

            if($conn->query($sql)){
            $msg = "<div class='alert alert-success'>Attendance successfully added</div>";
            } else {
            $msg = "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
            }
            }
         ?>
          <div class="container mt-4">
    <h2 class="text-center">Attendance Entry</h2>

    <?php if(!empty($msg)) echo $msg; ?>

    <form method="post">

        <div class="form-group">
            <label>Employee</label>
            <select name="employee_id" class="form-control" required>
                <option value="">Select Employee</option>
                <?php
                $employees = $conn->query("SELECT employee_id, first_name, last_name FROM employees");
                while($e = $employees->fetch_assoc()){
                ?>
                    <option value="<?php echo $e['employee_id']; ?>">
                        <?php echo $e['first_name'] . " " . $e['last_name']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <div class="form-group">
            <label>Date</label>
            <input type="date" name="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Check In</label>
            <input type="time" name="check_in" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Check Out</label>
            <input type="time" name="check_out" class="form-control" required>
        </div>

        <input type="submit" name="submit" class="btn btn-success" value="Save Attendance">
        <a href="attendence_show.php" class="btn btn-info">Show Attendance List</a>

    </form>
</div>

          
          
        </div>
      </div>
      
      
      <!-- Main row --> 
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
   <!-- Footer -->
  <?php include_once("includes/footer.php"); ?>
  
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- Tab panes -->
    <div class="tab-content"> 
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab"></div>
      <!-- /.tab-pane --> 
    </div>
  </aside>
  <!-- /.control-sidebar --> 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper --> 

<!-- jQuery 3 --> 
<script src="dist/js/jquery.min.js"></script>  
<script src="dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="dist/js/bizadmin.js"></script> 

<!-- for demo purposes --> 
<script src="dist/js/demo.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>
