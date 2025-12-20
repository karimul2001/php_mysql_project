<?php
include_once("includes/db_config.php");
session_start();

if(!isset($_SESSION['email'])){
  header("Location: index.php");
  exit;
}

$loginEmail = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Employee Profile</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../dist/css/style.css">
<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="../dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="../dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

<style>
table, th, td{
  border: 2px solid black;
  border-collapse: collapse;
}
th, td{
  padding: 10px;
  text-align: center;
}
</style>
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/leftbar.php"); ?>

<div class="content-wrapper">
  <div class="content">
    <div class="card">
      <div class="card-body">

        <h4 class="text-dark mb-3">My Profile Details</h4>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Employee ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Department</th>
                <th>Position</th>
                <th>Join Date</th>
                
              </tr>
            </thead>
            <tbody>
            <?php
              $sql = "SELECT * FROM employee_depts_view WHERE email = ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("s", $loginEmail);
              $stmt->execute();
              $result = $stmt->get_result();

              if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
            ?>
              <tr>
                <td><?= $row['employee_id']; ?></td>
                <td><?= $row['first_name']; ?></td>
                <td><?= $row['last_name']; ?></td>
                <td><?= $row['email']; ?></td>
                <td><?= $row['phone']; ?></td>
                <td><?= $row['gender']; ?></td>
                <td><?= $row['dob']; ?></td>
                <td><?= $row['department_name']; ?></td>
                <td><?= $row['position']; ?></td>
                <td><?= $row['join_date']; ?></td>

                
              </tr>
            <?php
                }
              } else {
                echo "<tr><td colspan='12'>No data found</td></tr>";
              }
            ?>
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>



<script src="../dist/js/jquery.min.js"></script>  
<script src="../dist/bootstrap/js/bootstrap.min.js"></script> 

<!-- template --> 
<script src="../dist/js/bizadmin.js"></script> 

<!-- Jquery Sparklines --> 
<script src="../dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script> 
<script src="../dist/plugins/jquery-sparklines/sparkline-int.js"></script> 

<!-- Morris JavaScript --> 
<script src="../dist/plugins/raphael/raphael-min.js"></script> 
<script src="../dist/plugins/morris/morris.js"></script> 
<script src="../dist/plugins/functions/dashboard1.js"></script> 

<!-- for demo purposes --> 
<script src="../dist/js/demo.js"></script>
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
</body>
</html>
