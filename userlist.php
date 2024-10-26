<?php
session_start();
require_once "includes/starlight.php";
require_once "includes/db.php";

$select_query = "SELECT id,full_name,email FROM users";
$data_from_db = mysqli_query($db_connect,$select_query);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="card">
      <div class="card-header text-white bg-primary mb-3">
        User List
        <a class="btn btn-danger text-right" href="alldelete.php">All Delete</a>
      </div>
      <?php
      if(isset($_SESSION['deleted_status'])){
      ?>
        <div class="alert alert-danger">
        <?php
        echo $_SESSION['deleted_status'];
        unset($_SESSION['deleted_status']);
        ?>
        </div>
      <?php
      }
      ?>
      <?php
      if(isset($_SESSION['success_message'])){
      ?>
        <div class="alert alert-success">
        <?php
        echo $_SESSION['success_message'];
        unset($_SESSION['success_message']);
        ?>
        </div>
      <?php
      }
      ?>
      <div class="card-body">
        <table class="table">
          <thead>
            <tr>
              <th scope="col">id</th>
              <th scope="col">Full Name</th>
              <th scope="col">Gmail</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                foreach($data_from_db as $user_value){
                ?>
            <tr>
              <th><?=$user_value['id']?></th>
              <td><?=$user_value['full_name']?></td>
              <td><?=$user_value['email']?></td>
              <td>
                <a class="btn btn-info" href="edit_user.php?id=<?=$user_value['id']?>">Edit</a>
                <a class="btn btn-danger" href="deleted_user.php?id=<?=$user_value['id']?>">Delete</a>
              </td>
            </tr>
            <?php
            }
            ?>
            <?php
            if($data_from_db->num_rows ==0){
              ?>
              <tr>
                <td colspan="50" class="text-center text-danger">
                  No data to show
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

