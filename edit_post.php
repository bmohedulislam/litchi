<?php 
session_start();
require_once "includes/db.php";

$id = $_POST['id'];
$full_name = $_POST['full_name'];
$old_full_name = $_POST['old_full_name'];
$email = $_POST['email'];

$update_query = "UPDATE users SET full_name = '$full_name', email = '$email' WHERE id =$id";
mysqli_query($db_connect,$update_query);
$_SESSION['success_message'] = "$old_full_name edited successfully to $full_name";
header("location: userlist.php");
?>