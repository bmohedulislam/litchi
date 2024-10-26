<?php
session_start();
require_once "includes/db.php";
$encrypt_password = md5($_POST['old_password']);
$email = $_SESSION['email_from_login_page'];
$check_query = "SELECT COUNT(*) AS total FROM users WHERE email = '$email' AND password = '$encrypt_password'";
$assoc = mysqli_query($db_connect,$check_query);
$after_assoc = mysqli_fetch_assoc($assoc);
if($after_assoc['total'] == 1){
    if($_POST['new_password'] == $_POST['confirm_password']){
      $encrypt_password = md5($_POST['new_password']);
      $password_update_query = "UPDATE users SET password = '$encrypt_password' WHERE email = '$email'";
      mysqli_query($db_connect,$password_update_query);
      header("location: profile.php");
    }
    else{
        echo "new password and confirm passwor do not match";
    }
}
else{
    echo "vul dicho";
}
?>