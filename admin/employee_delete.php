<?php
include_once("includes/db_config.php");
session_start(); // Always start session at the top

$id = $_GET['id'];
$sql = "DELETE FROM employees WHERE employee_id='$id'";
$conn->query($sql);

if($conn->affected_rows > 0){
    $_SESSION['msg'] = "Successfully Deleted";
}

header("Location: employee_list.php");
 // always exit after redirect
?>
