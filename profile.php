<?php
session_start();
require_once "includes/header.php";
require_once "includes/nav.php";
require_once "includes/db.php";

$email_from_login_page = $_SESSION['email_from_login_page'];
$select_profile_pic_query = "SELECT profile_image FROM users WHERE email='$email_from_login_page'";
$assoc = mysqli_query($db_connect,$select_profile_pic_query);
$after_assoc = mysqli_fetch_assoc($assoc)['profile_image'];
?>
<div class="row">
  <div class="col-lg-6">
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
  </div>
  <div class="col-lg-6">
    <div class="card">
      <div class="card-header text-white bg-primary">Change Password</div>
      <div class="card-body">
        <form action="profile_post.php" method="POST">
            <div class="form-group">
                <label for="exampleInputPassword1">Old Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="old_password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">New Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="new_password">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm_password">
            </div>
            <button type="submit" class="btn btn-success">change password</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php
require_once "includes/footer.php";
?>

