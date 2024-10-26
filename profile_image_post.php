<?php
session_start();
require_once "includes/db.php";
if(!$_FILES['new_profile_image']['name']){
    echo "Give your picturee";
    die();
}
$image_name = $_FILES['new_profile_image']['name'];
$name_after_explode = explode('.',$image_name);
$extention = end($name_after_explode);
$accepted_extention =['png','jpg','jpeg','PNG','JPG','JPEG'];
if(!in_array($extention,$accepted_extention)){
    echo "This file formate is not supported";
    die();
}
if($_FILES['new_profile_image']['size']>50000){
    echo "Your file should be less than 50kb";
    die();
}
$email = $_SESSION['email_from_login_page'];
$get_id_query ="SELECT id,profile_image FROM users WHERE email='$email'";
$user_id = mysqli_fetch_assoc(mysqli_query($db_connect,$get_id_query))['id'];
$db_profile_image_name = mysqli_fetch_assoc(mysqli_query($db_connect,$get_id_query))['profile_image'];
if($db_profile_image_name != "default.jpg"){
   unlink('images/profile_images/'.$db_profile_image_name);
}

$image_new_name = $user_id.".".$extention;
$temp_location = $_FILES['new_profile_image']['tmp_name'];
$new_location = "images/profile_images/".$image_new_name;
move_uploaded_file($temp_location,$new_location);

$image_update_query = "UPDATE users SET profile_image ='$image_new_name' WHERE email ='$email'";
mysqli_query($db_connect, $image_update_query);
header('location: profile.php');
?>