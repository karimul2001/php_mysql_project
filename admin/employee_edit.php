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
      <h1 class="text-white text-center">Employee Edit</h1>
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
include_once("includes/db_config.php"); 
//session_start();

if(!isset($_SESSION['email'])){
  header("Location: index.php");
  exit();
}

// Check if ID is provided
if(!isset($_GET['id'])){
    die("Employee ID is required.");
}

$id = intval($_GET['id']);

// Fetch employee data
$sql = "SELECT * FROM employees WHERE employee_id = $id";
$result = $conn->query($sql);
if($result->num_rows == 0){
    die("Employee not found.");
}
$raw = $result->fetch_assoc();

// Update employee data
if(isset($_POST['submit'])){
    extract($_POST);

    $sql_update = "UPDATE employees SET
        first_name='$first_name',
        last_name='$last_name',
        email='$email',
        phone='$phone',
        gender='$gender',
        dob='$dob',
        department_id='$department',
        position='$position',
        join_date='$join_date',
        salary='$salary',
        address='$address'
        WHERE employee_id = $id";

    if($conn->query($sql_update)){
        echo '<div class="alert alert-success">Employee updated successfully.</div>';
        // Refresh data after update
        $result = $conn->query("SELECT * FROM employees WHERE employee_id = $id");
        $raw = $result->fetch_assoc();
    } else {
        echo '<div class="alert alert-danger">Update failed: '.$conn->error.'</div>';
    }
}
?>
          <h4 class="text-green text-center">Employee Edit Form</h4>
         <form action="" method="post">
    <div class="form-group">
        <label>First Name</label>
        <input class="form-control" type="text" name="first_name" value="<?php echo $raw['first_name']; ?>">
    </div>
    <div class="form-group">
        <label>Last Name</label>
        <input class="form-control" type="text" name="last_name" value="<?php echo $raw['last_name']; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input class="form-control" type="email" name="email" value="<?php echo $raw['email']; ?>">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input class="form-control" type="text" name="phone" value="<?php echo $raw['phone']; ?>">
    </div>
    <div class="form-group">
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="male" <?php if($raw['gender']=='male') echo 'checked'; ?>> Male
        <input type="radio" name="gender" value="female" <?php if($raw['gender']=='female') echo 'checked'; ?>> Female
    </div>
    <div class="form-group">
        <label>Date of Birth</label>
        <input class="form-control" type="date" name="dob" value="<?php echo $raw['dob']; ?>">
    </div>
    <div class="form-group">
        <label>Department ID</label>
        <input class="form-control" type="text" name="department" value="<?php echo $raw['department_id']; ?>">
    </div>
    <div class="form-group">
        <label>Position</label>
        <input class="form-control" type="text" name="position" value="<?php echo $raw['position']; ?>">
    </div>
    <div class="form-group">
        <label>Join Date</label>
        <input class="form-control" type="date" name="join_date" value="<?php echo $raw['join_date']; ?>">
    </div>
    <div class="form-group">
        <label>Salary</label>
        <input class="form-control" type="text" name="salary" value="<?php echo $raw['salary']; ?>">
    </div>
    <div class="form-group">
        <label>Address</label>
        <textarea class="form-control" name="address"><?php echo $raw['address']; ?></textarea>
    </div>
    <input type="submit" name="submit" value="Update" class="btn btn-success">
    <a href="employee_list.php" class="btn btn-info">Back to List</a>
</form>

          
          
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
