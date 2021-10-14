<div class="overlay"></div>
<header>
  <div class="logo">
    <img src="./assets/capEmbleemT.svg" alt="Het logo van Emmen Air" />
    <a href="home.php"><h1>Emmen Air</h1></a>
  </div>
  <div class="openMenu">
    <i class="fa fa-bars"></i>
  </div>
  <!-- desktop navbar start -->
  <ul class="nav-desktop">
    <li><a class="nav-home" href="home.php"><?php echo $lang["nav-home"]; ?></a></li>
    <li><a class="nav-message" href="berichten.php"><?php echo $lang["nav-messages"]; ?></a></li>
    <li><a class="nav-flightroutes" href="#"><?php echo $lang["nav-flightroutes"]; ?></a></li>
    <li><a class="nav-gallery" href="gallerij.php"><?php echo $lang["nav-gallery"]; ?></a></li>
    <div class="navbar-section-divider"></div>
    <li>
        <a href="?language=eng">
          <img width="30px" height="20px" src="assets/flag-gb.png" alt="flag-eng">
        </a>
        <a href="?language=nl">
          <img width="30px" height="20px" src="assets/flag-nl.png" alt="flag-nl">
        </a>
    </li>
    <li><a href="index.php"><?php echo $lang["nav-logout"]; ?></a></li>
  </ul>
  <!-- desktop navbar end -->
  <!-- mobile navbar start -->
  <ul class="nav-mobile">
    <li><a class="nav-home" href="home.php"><?php echo $lang["nav-home"]; ?></a></li>
    <li><a class="nav-message" href="berichten.php"><?php echo $lang["nav-messages"]; ?></a></li>
    <li><a class="nav-flightroutes" href="#"><?php echo $lang["nav-flightroutes"]; ?></a></li>
    <li><a class="nav-gallery" href="gallerij.php"><?php echo $lang["nav-gallery"]; ?></a></li>
    <div class="navbar-section-divider"></div>
    <li>
        <a href="?language=eng">
          <img width="30px" height="20px" src="assets/flag-gb.png" alt="flag-eng">
        </a>
        <a href="?language=nl">
          <img width="30px" height="20px" src="assets/flag-nl.png" alt="flag-nl">
        </a>
    </li>
    <li><a href="index.php"><?php echo $lang["nav-logout"]; ?></a></li>
  </ul>
  <!-- mobile navbar start -->
</header>