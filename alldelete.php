<?php
session_start();
require_once "includes/db.php";

$deleted_query ="DELETE FROM users";
mysqli_query($db_connect,$deleted_query);
$_SESSION['deleted_status'] = "all delete successfully";
header("location: userlist.php");
?>