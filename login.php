<?php
session_start();
require_once "includes/header.php";
require_once "includes/nav.php";
?>
<div class="card">
  <div class="card-header text-white bg-primary">Login Page</div>
  <div class="card-body">
    <form action="login_post.php" method="POST">
        <div class="form-group">
            <label for="exampleInputPassword1">Gmail</label>
            <input type="gmail" class="form-control" id="exampleInputPassword1" placeholder="Gmail" name="gmail">
            <?php
            if(isset($_SESSION['email_password_error'])){
            ?>
                <small class="text-danger">
                <?php
                echo $_SESSION['email_password_error'];
                unset($_SESSION['email_password_error']);
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
        <button type="submit" class="btn btn-primary">login</button>
    </form>
  </div>
</div>
<?php
require_once "includes/footer.php";
?>

