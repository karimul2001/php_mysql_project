<?php 

include_once("includes/db_config.php"); 
session_start();
$id = $_REQUEST['id'];
$sql = "UPDATE leaves SET `status` = 'Approved' WHERE leaves.leave_id = '$id'";
$conn -> query($sql);

header("Location:leaves_history.php");

?>