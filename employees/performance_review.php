<?php
include_once("includes/db_config.php");
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
<title>Performance Review List</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../dist/bootstrap/css/bootstrap.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="../dist/img/favicon-16x16.png">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="../dist/css/style.css">
<link rel="stylesheet" href="../dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

<style>
table, th, td{
  border: 2px solid black;
  border-collapse: collapse;
  height: 50px;
  width: 1000px;
}
th, td{
  text-align: center;
}
</style>
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/leftbar.php"); ?>

<div class="content-wrapper">

  <div class="content-header sty-one">
    <h1 class="text-center">Employee Performance Reviews</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Review</li>
      <li><i class="fa fa-angle-right"></i> List</li>
    </ol>
  </div>

  <div class="content">
    <div class="card">
      <div class="card-body">

        <h4 class="text-dark">Performance Review Records</h4>

        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <th>Review ID</th>
                <th>Employee ID</th>
                <th>Reviewer ID</th>
                <th>Review Date</th>
                <th>Rating</th>
                <th>Comments</th>
              </tr>
            </thead>

            <?php
              $sql = "SELECT * FROM performance_reviews ORDER BY review_id DESC";
              $reviewData = $conn->query($sql);
            ?>

            <tbody>
              <?php if($reviewData->num_rows > 0){ ?>
                <?php while($row = $reviewData->fetch_assoc()){ ?>
                <tr>
                  <td><?= $row['review_id']; ?></td>
                  <td><?= $row['employee_id']; ?></td>
                  <td><?= $row['reviewer_id']; ?></td>
                  <td><?= date('d M Y', strtotime($row['review_date'])); ?></td>
                  <td>
                    <?php
                      if($row['rating']==5) echo "Excellent";
                      elseif($row['rating']==4) echo "Very Good";
                      elseif($row['rating']==3) echo "Good";
                      elseif($row['rating']==2) echo "Fair";
                      else echo "Poor";
                    ?>
                  </td>
                  <td><?= $row['comments']; ?></td>
                </tr>
                <?php } ?>
              <?php } else { ?>
                <tr>
                  <td colspan="6" class="text-center">No Review Found</td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>

        <hr>
        

      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>

<div class="control-sidebar-bg"></div>
</div>

<script src="../dist/js/jquery.min.js"></script>
<script src="../dist/bootstrap/js/bootstrap.min.js"></script>
<script src="../dist/js/bizadmin.js"></script>
<script src="../dist/js/demo.js"></script>

</body>
</html>
