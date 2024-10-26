<?php
session_start();
require_once "includes/starlight.php";
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="card">
        <div class="card-header text-white bg-primary">Register Page</div>
        <div class="card-body">
            <form action="register_post.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputPassword1">Full Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name" name="full_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Gmail</label>
                    <input type="gmail" class="form-control" id="exampleInputPassword1" placeholder="Gmail" name="gmail">
                    <?php
                    if(isset($_SESSION['dubol_email_error'])){
                    ?>
                        <small class="text-danger">
                        <?php
                        echo $_SESSION['dubol_email_error'];
                        unset($_SESSION['dubol_email_error']);
                        ?>
                    </small>
                    <?php
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirm Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="confirm_password">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        </div>

    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


