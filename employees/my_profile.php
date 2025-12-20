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

<footer class="main-footer text-center">
  © 2025 Your Company
</footer>

</div>

<script src="../dist/js/jquery.min.js"></script>
<script src="../dist/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
