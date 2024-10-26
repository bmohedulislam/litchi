<?php 
session_start();
require_once 'includes/db.php';

$testimonial_detail = $_POST['testimonial_detail'];
$testimonial_name = $_POST['testimonial_name'];
$testimonial_designation = $_POST['testimonial_designation'];

$testimonial_image_name = $_FILES['testimonial_photo']['name'];
$name_after_explode = explode('.',$testimonial_image_name);
$name_after_extention = end($name_after_explode);

$testimonial_new_image = time()."-".rand(1000,9999).".".$name_after_extention;
$temp_location = $_FILES['testimonial_photo']['tmp_name'];
$new_location = "images/testimonial_images/".$testimonial_new_image;
move_uploaded_file($temp_location,$new_location);

$insert_query = "INSERT INTO testimonial(testimonial_photo,testimonial_detail,testimonial_name,testimonial_designation) VALUES('$testimonial_new_image','$testimonial_detail','$testimonial_name','$testimonial_designation')";
mysqli_query($db_connect,$insert_query);
header("location: testimonial.php");
?>