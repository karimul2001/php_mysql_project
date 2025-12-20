<?php
include_once("includes/db_config.php");
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>User Entry</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
<link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
<link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

</head>

<body class="skin-blue sidebar-mini">
  <div class="wrapper boxed-wrapper">

    <?php include_once("includes/header.php"); ?>
    <?php include_once("includes/leftbar.php"); ?>

    <div class="content-wrapper">

      <div class="content-header sty-two">
        <h1 class="text-white text-center">User Entry</h1>
      </div>

      <div class="content">
        <div class="card">
          <div class="card-body">

            <?php
            if (isset($_POST['submit'])) {

              $employee_id = $_POST['employee_id'];
              $username    = $_POST['username'];
              $email       = $_POST['email'];
              $password    = md5($_POST['password']);
              $role        = $_POST['role'];
              $status      = $_POST['status'];

              /* ===== Image Upload ===== */
              $photo_name = $_FILES['photo']['name'];
              $tmp_name   = $_FILES['photo']['tmp_name'];

              $upload_dir = "uploads/users/";
              if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true);
              }

              $new_name = time() . "_" . $photo_name;
              $upload_path = $upload_dir . $new_name;

              if (move_uploaded_file($tmp_name, $upload_path)) {

                $sql = "INSERT INTO users 
            (employee_id, username, email, password, role, status, photos)
            VALUES
            ('$employee_id','$username','$email','$password','$role','$status','$new_name')";

                if ($conn->query($sql)) {
                  echo '<div class="alert alert-success">User Added Successfully</div>';
                }
              } else {
                echo '<div class="alert alert-danger">Photo Upload Failed</div>';
              }
            }
            ?>

            <h4 class="text-center text-success">User Entry Form</h4>

            <form action="" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label>Employee ID</label>
                <input type="text" name="employee_id" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" required>
              </div>

              <div class="form-group">
                <label>Role</label>
                <select name="role" class="form-control">
                  <option value="admin">Admin</option>
                  <option value="user">User</option>
                </select>
              </div>

              <div class="form-group">
                <label>Status</label>
                <select name="status" class="form-control">
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>
                </select>
              </div>

              <div class="form-group">
                <label>User Photo</label>
                <input type="file" name="photo" class="form-control" required>
              </div>

              <input type="submit" name="submit" value="Save User" class="btn btn-success">

            </form>

          </div>
        </div>
      </div>

    </div>

    <?php include_once("includes/footer.php"); ?>

  </div>

  <script src="dist/js/jquery.min.js"></script>
  <script src="dist/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>