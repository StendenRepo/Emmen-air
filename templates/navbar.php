<div class="overlay"></div>
<header>
  <div class="logo">
    <img src="./assets/capEmbleemT.svg" alt="Het logo van Emmen Air" />
    <h1>Emmen Air</h1>
  </div>
  <div class="openMenu">
    <i class="fa fa-bars"></i>
  </div>
  <ul class="nav-desktop">
    <li><a href="home.php"><?php echo $general["nav-home"]; ?></a></li>
    <li><a href="?language=eng">EN</a>/<a href="?language=nl">NL</a></li>
    <li><a href="berichten.php"><?php echo $general["nav-messages"]; ?></a></li>
    <li><a href="#"><?php echo $general["nav-flightroutes"]; ?></a></li>
    <li><a href="gallerij.php"><?php echo $general["nav-gallery"]; ?></a></li>
    <li><a href="index.php"><?php echo $general["nav-logout"]; ?></a></li>
  </ul>

  <ul class="nav-mobile">
    <li><a href="home.php"><?php echo $general["nav-home"]; ?></a></li>
    <li><a href="?language=eng">EN</a>/<a href="?language=nl">NL</a></li>
    <li><a href="berichten.php">><?php echo $general["nav-messages"]; ?></a></li>
    <li><a href="#"><?php echo $general["nav-flightroutes"]; ?></a></li>
    <li><a href="gallerij.php"><?php echo $general["nav-gallery"]; ?></a></li>
    <li><a href="index.php"><?php echo $general["nav-logout"]; ?></a></li>
  </ul>
</header>