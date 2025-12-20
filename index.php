<?php

$conn = new mysqli("localhost", "root", "", "hr_management");

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>admin templates</title>
    <!-- Tell the browser to be responsive to screen width -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Biz Admin is a Multipurpose bootstrap 4 Based Dashboard & Admin Site Responsive Template by uxliner." />
    <meta name="keywords"
        content="admin, admin dashboard, admin template, cms, crm, Biz Admin, Biz Adminadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
    <meta name="author" content="uxliner" />
    <!-- v4.1.3 -->
    <link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700" rel="stylesheet">

    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/style.css">
    <link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/et-line-font/et-line-font.css">
    <link rel="stylesheet" href="dist/css/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="dist/css/simple-lineicon/simple-line-icons.css">
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

    <!-- Chartist CSS -->
    <link rel="stylesheet" href="dist/plugins/chartist-js/chartist.min.css">
    <link rel="stylesheet" href="dist/plugins/chartist-js/chartist-plugin-tooltip.css">



</head>

<body class="skin-blue sidebar-mini">
    <div class="wrapper boxed-wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="index.html" class="logo blue-bg">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><img src="dist/img/logo-small.png" alt=""></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><img src="dist/img/logo.png" alt=""></span> </a>
            <!-- Header Navbar -->
            <nav class="navbar blue-bg navbar-static-top">
                <!-- Sidebar toggle button-->
                <ul class="nav navbar-nav pull-left">
                    <li><a class="sidebar-toggle" data-toggle="push-menu" href=""></a> </li>
                </ul>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel -->


                <!-- sidebar menu -->
                <ul class="sidebar-menu" data-widget="tree">

                    <li><a href="admin/"><i class="fa fa-angle-right"></i>Admin Login</a></li>
                    <li><a href="employees/"><i class="fa fa-angle-right"></i>Employee Login</a></li>


                </ul>
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            


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

    <!-- Jquery Sparklines -->
    <script src="dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script>
    <script src="dist/plugins/jquery-sparklines/sparkline-int.js"></script>

    <!-- Chartjs JavaScript -->
    <script src="dist/plugins/chartjs/chart.min.js"></script>
    <script src="dist/plugins/chartjs/chartist-init-index-classic.js"></script>

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