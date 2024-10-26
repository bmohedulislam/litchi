<?php
session_start();
require_once "includes/starlight.php";
require_once "includes/db.php";

$all_settings_query = "SELECT * FROM settings";
$all_settings_from_db = mysqli_query($db_connect,$all_settings_query);
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="card">
            <div class="card-header text-white bg-primary">Add Setting</div>
            <div class="card-body">
              <form action="settings_post.php" method="POST">
                  <?php foreach($all_settings_from_db as $settings):?>
                  <div class="form-group">
                      <label for="exampleInputPassword1"><?= $settings['setting_name']?></label>
                      <input type="text" class="form-control" name="<?= $settings['setting_name']?>" value="<?= $settings['setting_value']?>">
                  </div>
                  <?php endforeach; ?>
                  <button type="submit" class="btn btn-success">Update Settings</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->


