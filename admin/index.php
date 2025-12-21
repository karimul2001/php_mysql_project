
<style>
  body {
    background-image: url('dist/img/admin.jpeg') !important;
  }
</style>

<?php include_once("includes/db_config.php");
session_start();
if (isset($_SESSION['email'])) {
  header("Location: dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>hr_management System</title>
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


</head>

<body class="login-page">

  <div class="login-box">
    <?php
    if (isset($_POST['login'])) {
      extract($_POST);
      $password = md5($password);
      $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
      $rawData = $conn->query($sql);
      $row = $rawData->fetch_object();
      if ($rawData->num_rows) {
        $_SESSION['name'] = $row->fname . " " . $row->lname;
        $_SESSION['email'] = $email;
        $_SESSION['image'] = $row->image;

        header("Location: dashboard.php");
      } else {
        echo '<div class="alert alert-danger">Incorrect email or password</div>';
      }
    }

    ?>
    <div class="login-box-body">

      <h3 class="login-box-msg">Sign In</h3>
      <form action="" method="post">
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control sty1" placeholder="Email">
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control sty1" placeholder="Password">
        </div>
        <div>
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox">
                Remember Me </label>
              <a href="pages-recover-password.html" class="pull-right"><i class="fa fa-lock"></i> Forgot pwd?</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4 m-t-1">
            <button type="submit" name="login" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
          Facebook</a> 
      </div>
      <!-- /.social-auth-links -->

      <div class="m-t-2">Don't have an account? <a href="pages-register.html" class="text-center">Sign Up</a></div>
    </div>
    <!-- /.login-box-body -->
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