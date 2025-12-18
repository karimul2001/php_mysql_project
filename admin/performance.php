<?php
include_once("includes/db_config.php");
session_start();

if(!isset($_SESSION['email'])){
  header("Location: index.php");
}

// INSERT REVIEW
if(isset($_POST['submit'])){
  $employee_id = $_POST['employee_id'];
  $reviewer_id = $_POST['reviewer_id'];
  $review_date = $_POST['review_date'];
  $rating      = $_POST['rating'];
  $comments    = $_POST['comments'];

  $sql = "INSERT INTO performance_reviews
          (employee_id, reviewer_id, review_date, rating, comments)
          VALUES
          ('$employee_id','$reviewer_id','$review_date','$rating','$comments')";

  $conn->query($sql);

  if($conn->affected_rows){
    echo "<div class='alert alert-success text-center'>Performance Review Added Successfully</div>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Performance Review Entry</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="dist/bootstrap/css/bootstrap.min.css">
<link rel="icon" type="image/png" sizes="16x16" href="dist/img/favicon-16x16.png">
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="dist/css/style.css">
<link rel="stylesheet" href="dist/css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>

<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">

<?php include_once("includes/header.php"); ?>
<?php include_once("includes/leftbar.php"); ?>

<div class="content-wrapper">

  <div class="content-header sty-two">
    <h1 class="text-white text-center">Performance Review Entry</h1>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li><i class="fa fa-angle-right"></i> Form</li>
      <li><i class="fa fa-angle-right"></i> Performance Review</li>
    </ol>
  </div>

  <div class="content">
    <div class="card">
      <div class="card-body">

        <h4 class="text-green text-center">Employee Performance Review Form</h4>

        <form method="post">

          <div class="form-group has-black">
            <label>Employee ID</label>
            <input type="number" name="employee_id" class="form-control" required>
          </div>

          <div class="form-group has-black">
            <label>Reviewer ID</label>
            <input type="number" name="reviewer_id" class="form-control" required>
          </div>

          <div class="form-group has-black">
            <label>Review Date</label>
            <input type="date" name="review_date" class="form-control" required>
          </div>

          <div class="form-group has-black">
            <label>Rating</label>
            <select name="rating" class="form-control" required>
              <option value="">Select Rating</option>
              <option value="1">1 - Poor</option>
              <option value="2">2 - Fair</option>
              <option value="3">3 - Good</option>
              <option value="4">4 - Very Good</option>
              <option value="5">5 - Excellent</option>
            </select>
          </div>

          <div class="form-group has-black">
            <label>Comments</label>
            <textarea name="comments" class="form-control" rows="4"></textarea>
          </div>

          <input type="submit" name="submit" value="Submit Review" class="btn btn-outline-success">
          <a href="performance_review.php" class="btn btn-outline-info">
            Review List
          </a>

        </form>

      </div>
    </div>
  </div>
</div>

<?php include_once("includes/footer.php"); ?>

<div class="control-sidebar-bg"></div>
</div>

<script src="dist/js/jquery.min.js"></script>
<script src="dist/bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/bizadmin.js"></script>
<script src="dist/js/demo.js"></script>

</body>
</html>
