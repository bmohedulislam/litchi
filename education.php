<?php
session_start();
require_once "includes/starlight.php";
require_once "includes/db.php";

$all_education_query = "SELECT * FROM educations";
$all_education_from_db = mysqli_query($db_connect,$all_education_query);
?>
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
     <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-white bg-primary">Add education</div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Education_title</th>
                    <th scope="col">Progress</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_education_from_db as $education): ?>
                  <tr>
                    <td><?= $education['year']?></td>
                    <td><?= $education['education_title']?></td>
                    <td><?=$education['progress']?></a></td>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-white bg-primary">Add Education</div>
            <div class="card-body">
              <form action="education_post.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Year</label>
                      <input type="text" class="form-control" name="year">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Education Title</label>
                      <input type="text" class="form-control" name="education_title">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Progress</label>
                      <input type="text" class="form-control" name="progress">
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
<?php
require_once "includes/footer.php";
?>

