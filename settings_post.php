<?php
session_start();
require_once "includes/header.php";
require_once "includes/nav.php";
require_once "includes/db.php"; 

foreach($_POST as $setting_name=> $setting_value){
   $update_query = "UPDATE settings SET setting_value = '$setting_value' WHERE setting_name = '$setting_name'";
   mysqli_query($db_connect,$update_query);
   header('location: settings.php');
}
?>