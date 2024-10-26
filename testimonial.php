<?php
session_start();
require_once "includes/starlight.php";
require_once "includes/db.php";

$email_from_login_page = $_SESSION['email_from_login_page'];
$select_profile_pic_query = "SELECT profile_image FROM users WHERE email='$email_from_login_page'";
$assoc = mysqli_query($db_connect,$select_profile_pic_query);
$after_assoc = mysqli_fetch_assoc($assoc)['profile_image'];
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="row">
      <!-- <div class="col-lg-6">
        <div class="card">
          <div class="card-header text-white bg-primary">Change Profile</div>
          <div class="card-body">
            <div class="text-center">
              <img class="img-fluid border" width="150" src="images/profile_images/<?= $after_assoc?>" alt="Not fount">
              <?php
              if($after_assoc != 'default'):
              ?>
              <br>
              <a href="delete_profile_pic.php?picture_name=<?=$after_assoc?>" class="btn btn-danger">Delete profile pic</a>
              <?php
              endif;
              ?>
            </div>
            <form action="profile_image_post.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputPassword1">New Profile Image</label>
                    <input type="file" class="form-control" name="new_profile_image">
                </div>
                <button type="submit" class="btn btn-success">change Now</button>
            </form>
          </div>
        </div>
      </div> -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-header text-white bg-primary">Add Testimonial</div>
          <div class="card-body">
            <form action="testimonial_post.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputPassword1">Testimonial Photo</label>
                    <input type="file" class="form-control" name="testimonial_photo">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Testimonial Details</label>
                    <textarea name="testimonial_detail" id="" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Testimonial Name</label>
                    <input type="text" class="form-control" name="testimonial_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Testimonial Designation</label>
                    <input type="text" class="form-control" name="testimonial_designation">
                </div>
                <button type="submit" class="btn btn-success">Add Now</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


