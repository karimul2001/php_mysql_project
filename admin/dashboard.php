<?php include_once("includes/db_config.php"); 
session_start();

if(!isset($_SESSION['email'])){
  header("Location: index.php");
}
?>

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
                  <p>Total Employee</p>
                  <h2 class="font-weight-bold">$15,859</h2>
                  <a href="employee_entry.php">View Statement</a> </div>
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
      
      
      <!-- /.row --> 
    </div>
    <!-- /.content --> 
  </div>
  <!-- /.content-wrapper -->
  <!-- Footer -->
  <?php include_once("includes/footer.php"); ?>
  