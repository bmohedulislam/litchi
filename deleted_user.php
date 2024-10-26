<?php
session_start();
require_once "includes/header.php";
require_once "includes/nav.php";
require_once "includes/db.php";

$id = $_GET['id'];
$deleted_query = "DELETE FROM users WHERE id=$id";
mysqli_query($db_connect,$deleted_query);
$_SESSION['deleted_status'] = "user delete successfully";
header("location: userlist.php");

?>