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
  <meta name="author" content="uxliner" />
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
      

      <!-- Main content -->
      <div class="content">
        <div class="card">
          <div class="card-body">
            <?php
            if (isset($_POST['submit'])) {
              include_once("includes/db_config.php");

              // Get form input safely
              $department = trim($_POST['department']);

              if (!empty($department)) {

                // Prepared statement to prevent SQL injection
                $sql = "INSERT INTO departments (department_name) VALUES (?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("s", $department);

                if ($stmt->execute()) {
                  echo "<p style='color: green;'>Department added successfully!</p>";
                } else {
                  echo "<p style='color: red;'>Error: " . $stmt->error . "</p>";
                }

                $stmt->close();
              } else {
                echo "<p style='color: red;'>Please enter a department name.</p>";
              }
            }
            ?>

            <h4>Department Entry Here</h4>

            <form action="" method="post">
              <label for="">Department Name:</label><br>
              <input type="text" name="department" placeholder="Enter department name"><br><br>
              <input type="submit" name="submit" value="Submit" class="btn btn-success">
              <a href="department_list.php"><input type="button" value="Show Department List" class="btn btn-info"></a>
              
            </form>
          </div>
        </div>


        <!-- Main row -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">Version 1.0</div>
      Copyright © 2018 Yourdomian. All rights reserved.
    </footer>

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
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/5b7257d2afc2c34e96e78bfc/default';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
</body>

</html>