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
            <div class="card-header text-white bg-primary">Add Brand</div>
            <div class="card-body">
              <form action="brand_post.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Brand Image</label>
                      <input type="file" class="form-control" name="brand_image">
                  </div>
                  <button type="submit" class="btn btn-success">Add Brand</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


