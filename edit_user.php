<?php
session_start();
require_once "includes/header.php";
require_once "includes/nav.php";
require_once "includes/db.php";

$id = $_GET['id'];
$select_query = "SELECT id,full_name,email FROM users WHERE id = $id";
$data_from_db = mysqli_query($db_connect,$select_query);
$assoc = mysqli_fetch_assoc($data_from_db);
?>
<div class="card">
  <div class="card-header text-white bg-primary">Edit Page</div>
  <div class="card-body">
    <form action="edit_post.php" method="POST">
        <div class="form-group">
            <label for="exampleInputPassword1">Full Name</label>
            <input type="hidden" class="form-control" name ="id" value="<?= $assoc['id']?>">
            <input type="hidden" class="form-control" id="exampleInputPassword1" placeholder="Full Name" name="old_full_name" value="<?= $assoc['full_name']?>">
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Full Name" name="full_name" value="<?= $assoc['full_name']?>">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Gmail</label>
            <input type="gmail" class="form-control" id="exampleInputPassword1" placeholder="Gmail" name="email" value="<?= $assoc['email']?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
  </div>
</div>
<?php
require_once "includes/footer.php";
?>

