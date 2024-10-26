<?php
session_start();
require_once "includes/starlight.php";
require_once "includes/db.php";

$all_portfolios_query = "SELECT * FROM portfolios";
$all_portfolios_from_db = mysqli_query($db_connect,$all_portfolios_query);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="row">
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-white bg-primary">Profile List</div>
            <div class="card-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Portfolio Title</th>
                    <th scope="col">Portfolio Details</th>
                    <th scope="col">Portfolio Thumbnail</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($all_portfolios_from_db as $portfolio): ?>
                  <tr>
                    <td><?= $portfolio['portfolio_title']?></td>
                    <td><?=$portfolio['portfolio_details']?></a></td>
                    <td><img width="100" src="images/portfolio_images/thumbnail_images/<?=$portfolio['portfolio_thumbnail']?>" alt="img"></td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-header text-white bg-primary">Add Portfolio</div>
            <div class="card-body">
              <form action="portfolio_post.php" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputPassword1">Portfolio Title</label>
                      <input type="text" class="form-control" name="portfolio_title">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Portfolio Details</label>
                      <textarea name="portfolio_details" id="" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Portfolio Thumbnail</label>
                      <input type="file" class="form-control" name="portfolio_thumbnail">
                  </div>
                  <div class="form-group">
                      <label for="exampleInputPassword1">Portfolio Feature</label>
                      <input type="file" class="form-control" name="portfolio_feature_photo">
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


