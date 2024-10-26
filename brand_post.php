<?php
require_once 'includes/db.php';

$brand_image = $_FILES['brand_image']['name'];
$name_after_explode = explode('.',$brand_image);
$name_after_extention = end($name_after_explode);

$brand_new_image = time()."-".rand(1000,9999).".".$name_after_extention;
$temp_location = $_FILES['brand_image']['tmp_name'];
$new_location = "images/brand_images/".$brand_new_image;
move_uploaded_file($temp_location,$new_location);

$insert_query = "INSERT INTO brands(brand_image_name) VALUES('$brand_new_image')";
mysqli_query($db_connect,$insert_query);
header("location: brand.php");
?>