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
  <!-- Header -->
 <?php include_once("includes/header.php"); ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include_once("includes/leftbar.php"); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Dashboard</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Dashboard</li>
      </ol>
    </div>
    
    <!-- Main content -->
    <div class="content">
      <div class="row">
        <div class="col-lg-4 col-md-6 m-b-3">
          <div class="widget-info bg-primary">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 text-white">
                  <p>Total Balance</p>
                  <h2 class="font-weight-bold">$15,859</h2>
                  <a href="#">View Statement</a> </div>
                <div class="col-md-6 m-t-2 text-right"> <span id="spa-bar"></span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 m-b-3">
          <div class="widget-info bg-aqua">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 text-white">
                  <p>Online Revenue</p>
                  <h2 class="font-weight-bold">$8,859</h2>
                  <a href="#">View Statement</a> </div>
                <div class="col-md-6 m-t-2 text-right"> <span id="spa-line"></span> </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 m-b-3">
          <div class="widget-info bg-danger">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 text-white">
                  <p>Total Profit</p>
                  <h2 class="font-weight-bold">$85,085</h2>
                  <a href="#">View Statement</a> </div>
                <div class="col-md-6 m-t-2 text-right"> <span id="spa-pie"></span> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-lg-8">
          <div class="info-box">
            <div class="col-12">
              <h5>Revenue Statistics</h5>
              <div class="row m-t-2 m-b-2">
                <div class="col-md-6">
                  <h1 class="font-weight-500">$23,743</h1>
                  <p>Total Revenue</p>
                </div>
                <div class="col-md-3">
                  <h6 class="text-blue font-weight-bold">Organic Traffic</h6>
                  <p class="f-13">+ 40% this month</p>
                </div>
                <div class="col-md-3">
                  <h6 class="text-green font-weight-bold">Page Views</h6>
                  <p class="f-13">+ 25% this month</p>
                </div>
              </div>
            </div>
            <div id="earning"></div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card m-b-3">
            <div class="card-body">
              <div class="m-b-3 font-weight-bold">
                <h5>New Clients
                  <button type="button" class="btn btn-sm btn-rounded btn-info pull-right">250</button>
                </h5>
              </div>
              <div class="m-b-2 f-25">09.5% <i class="ti-bar-chart pull-right f-30"></i> </div>
              <div><i class="f-20 ti-upload text-aqua"></i> 35% Increase in 30 Days</div>
            </div>
          </div>
          <div class="card bg-info m-b-3">
            <div class="card-body text-white">
              <div class="m-b-1 font-weight-500">
                <h5><span class="text-white">This Year Income</span>
                  <button type="button" class="btn btn-sm btn-rounded btn-danger pull-right">View more</button>
                </h5>
              </div>
              <div class="f-40 font-weight-500">$58,869</div>
              <div class="m-t-1"><span id="spa-pie-1" class="m-t-3 pull-right"></span> <span class="f-13">New Orders</span>
                <h3>$32,535</h3>
                <span class="f-13">Online Revenue</span>
                <h3>$ 26,334</h3>
                <span class="f-13">Total Profit</span>
                <h3>$ 58,869</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      
      <div class="row">
        <div class="col-lg-5 m-b-3">
          <div class="card">
            <div class="card-body">
              <h5>Recent Activities <span class="pull-right f-13"><a href="#">View All</a></span></h5>
              <div class="message-widget"> <a href="#">
                <div class="user-img pull-left"> <img src="dist/img/img1.jpg" class="img-circle img-responsive" alt="User Image"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Florence Douglas</h5>
                  <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                </a> <a href="#">
                <div class="user-img pull-left"> <img src="dist/img/img3.jpg" class="img-circle img-responsive" alt="User Image"> <span class="profile-status invisable pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Florence Douglas</h5>
                  <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">10:30 AM</span> </div>
                </a> <a href="#">
                <div class="user-img pull-left"> <img src="dist/img/img4.jpg" class="img-circle img-responsive" alt="User Image"> <span class="profile-status offline pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Florence Douglas</h5>
                  <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">12:30 AM</span> </div>
                </a> <a href="#">
                <div class="user-img pull-left"> <img src="dist/img/img3.jpg" class="img-circle img-responsive" alt="User Image"> <span class="profile-status invisable pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Florence Douglas</h5>
                  <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">10:30 AM</span> </div>
                </a> <a href="#">
                <div class="user-img pull-left"> <img src="dist/img/img1.jpg" class="img-circle img-responsive" alt="User Image"> <span class="profile-status online pull-right"></span> </div>
                <div class="mail-contnet">
                  <h5>Florence Douglas</h5>
                  <span class="mail-desc">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been.</span> <span class="time">9:30 AM</span> </div>
                </a></div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="card">
            <div class="card-body">
              <h5>Recent Chats <span class="pull-right f-13"><a href="#">View All</a></span></h5>
              <div class="box-body"> 
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages" style="height:377px;">
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img2.jpg" alt="user image">
                    <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                  </div>
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img3.jpg" alt="user image"> 
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text"> You better believe it! </div>
                  </div>
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 5:37 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img4.jpg" alt="user image">
                    <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                  </div>
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan 6:10 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img5.jpg" alt="user image">
                    <div class="direct-chat-text"> I would love to. </div>
                  </div>
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img6.jpg" alt="user image">
                    <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                  </div>
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img3.jpg" alt="user image"> 
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text"> You better believe it! </div>
                  </div>
                  <div class="direct-chat-msg">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-left">Alexander Pierce</span> <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img6.jpg" alt="user image">
                    <div class="direct-chat-text"> A small river named Duden flows by their place and supplies it with the necessary. </div>
                  </div>
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-info clearfix"> <span class="direct-chat-name pull-right">Sarah Bullock</span> <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span> </div>
                    <img class="direct-chat-img" src="dist/img/img3.jpg" alt="user image"> 
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text"> You better believe it! </div>
                  </div>
                </div>
              </div>
              <div class="box-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input name="message" placeholder="Type Message ..." class="form-control" type="text">
                    <span class="input-group-btn">
                    <button type="button" class="btn btn-warning btn-flat">Send</button>
                    </span> </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row --> 
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

<!-- Jquery Sparklines --> 
<script src="dist/plugins/jquery-sparklines/jquery.sparkline.min.js"></script> 
<script src="dist/plugins/jquery-sparklines/sparkline-int.js"></script> 

<!-- Morris JavaScript --> 
<script src="dist/plugins/raphael/raphael-min.js"></script> 
<script src="dist/plugins/morris/morris.js"></script> 
<script src="dist/plugins/functions/dashboard1.js"></script> 

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
