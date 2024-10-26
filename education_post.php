<?php
session_start();
require_once "includes/db.php";

$year = $_POST['year'];
$education_title = $_POST['education_title'];
$progress = $_POST['progress'];

$education_insert_query = "INSERT INTO educations(year,education_title,progress) VALUES('$year','$education_title','$progress')";
mysqli_query($db_connect,$education_insert_query);
header("location: education.php");
?>