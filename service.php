<?php
session_start();
require_once "includes/starlight.php";
require_once "includes/db.php";

$all_services_query = "SELECT * FROM services";
$all_services_from_db = mysqli_query($db_connect,$all_services_query);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-white bg-primary">Service List</div>
            <div class="card-body">
              <table class="table">
              <thead>
                  <tr>
                      <th scope="col">SERVICE ICON</th>
                      <th scope="col">SERVICE TITLE</th>
                      <th scope="col">SERVICE DESCRIPTION</th>
                  </tr>
              </thead>
              <tbody>
                  <?php
                      foreach($all_services_from_db as $service){
                  ?>
                      <tr>
                          <td><i class="<?= $service['service_icon']?>"></i></td>
                          <td><?= $service['service_title']?></td>
                          <td><?= $service['service_description']?></td>
                      </tr>
                  <?php
                      }
                  ?>
              </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-white bg-primary">Add Service</div>
            <div class="card-body">
              <?php if(isset($_SESSION['status'])): ?>
                <div class="alert alert-success">
                  <?= $_SESSION['status'] ?>
                  <?php unset($_SESSION['status']) ?>
                </div>
              <?php endif; ?>
              <form action="service_post.php" method="POST">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Service Icon</label>
                      <input type="text" class="form-control" placeholder="service_icon" name="service_icon">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Service Title</label>
                      <input type="text" class="form-control" placeholder="service_title" name="service_title">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Service Description</label>
                      <input type="text" class="form-control" placeholder="service_description" name="service_description">
                  </div>
                  <button type="submit" class="btn btn-success">Change Service</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
