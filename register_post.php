<?php
session_start();
require_once "includes/db.php";

$full_name = $_POST['full_name'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
if($password = $confirm_password){
    $count_query = "SELECT COUNT(*) AS total FROM users WHERE email = '$gmail'";
    $assoc = mysqli_query($db_connect,$count_query);
    $after_assoc = mysqli_fetch_assoc($assoc);
    if($after_assoc['total'] == 0){
         $encrypt_password = md5($password);
        $insert_query = "INSERT INTO users(full_name,email,password) VALUES('$full_name','$gmail','$encrypt_password')";
        mysqli_query($db_connect,$insert_query);
        header("location: registration.php");
    }
    else{
        $_SESSION['dubol_email_error'] = "This email has been used";
        header("location: registration.php");
    }
}
else{
    echo "mile nai";
}
?>