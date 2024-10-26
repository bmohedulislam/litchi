<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Litchi</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="registration.php">Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="userlist.php">Userlist</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="portfolio.php">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="testimonial.php">Testimonial</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="education.php">Education</a>
      </li>
      <?php
      if(!isset($_SESSION['login_status'])):
      ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Log in</a>
      </li>
       <?php
      endif;
      ?>
      <?php
      if(isset($_SESSION['login_status'])):
      ?>
      <li class="nav-item">
        <a class="nav-link" href="dashbord.php">Dashbord</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="settings.php">Settings</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Log out</a>
      </li>
      <?php
      endif;
      ?>
    </ul>
  </div>
</nav>