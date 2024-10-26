<?php
session_start();
require_once "includes/db.php";

$gmail = $_POST['gmail'];
$password = md5($_POST['password']);

$count_query = "SELECT COUNT(*) AS total FROM users WHERE email = '$gmail' AND password='$password'";
$assoc = mysqli_query($db_connect,$count_query);
$after_assoc = mysqli_fetch_assoc($assoc);
if($after_assoc['total'] == 1){
    $_SESSION['login_status'] = "Yes";
    $_SESSION['email_from_login_page'] = $gmail;
   header("location: dashbord.php");
}
else{
    $_SESSION['email_password_error'] = "Your email and password is worng";
    header("location: login.php");
}
?>