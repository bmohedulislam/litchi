<?php
session_start();
if(!isset($_SESSION['login_status'])){
    header("location: login.php");
}
require_once "includes/db.php";
require_once "includes/starlight.php";
//require_once "includes/nav.php";
?>
<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
  <div class="sl-pagebody">
    <div class="sl-page-title">
      <h1>Hello world</h1>
      <h2>Email:<?= $_SESSION['email_from_login_page']?></h2>
    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->




