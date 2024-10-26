<?php 
session_start();
require_once 'includes/db.php';

$portfolio_tite = $_POST['portfolio_title'];
$portfolio_details = $_POST['portfolio_details'];
$post_by = $_SESSION['email_from_login_page'];

$thumbnail_image_name = $_FILES['portfolio_thumbnail']['name'];
$name_after_explode = explode('.',$thumbnail_image_name);
$name_after_extention = end($name_after_explode);

$thumbnail_new_image = time()."-".rand(1000,9999).".".$name_after_extention;
$temp_location = $_FILES['portfolio_thumbnail']['tmp_name'];
$new_location = "images/portfolio_images/thumbnail_images/".$thumbnail_new_image;
move_uploaded_file($temp_location,$new_location);

$feature_image_name = $_FILES['portfolio_feature_photo']['name'];
$name_after_explode = explode('.',$feature_image_name);
$name_after_extention = end($name_after_explode);

$feature_new_image = time()."-".rand(1000,9999).".".$name_after_extention;
$temp_location = $_FILES['portfolio_feature_photo']['tmp_name'];
$new_location = "images/portfolio_images/feature_images/".$feature_new_image;
move_uploaded_file($temp_location,$new_location);

$insert_query = "INSERT INTO portfolios(post_by,portfolio_tite,portfolio_details,portfolio_thumbnail,portfolio_feature_photo) VALUES('$post_by','$portfolio_tite','$portfolio_details','$thumbnail_new_image','$feature_new_image')";
mysqli_query($db_connect,$insert_query);
header("location: portfolio.php");
?>