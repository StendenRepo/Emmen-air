<!DOCTYPE html>
<html lang="en">
<head>
  <!-- 
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylesheet.css">
  <script src="https://kit.fontawesome.com/644a2942c8.js" crossorigin="anonymous"></script>
  <title>Document</title>
  -->
  <!-- VERWIJDER DIT NA AFLOOP -->
  <?php include "../templates/header.php" ?>
  <!-- VERWIJDER DIT NA AFLOOP -->
</head>
<body>
  <?php include '../templates/navbar.php'; ?>
  <div id="container">
    <main class="home">
      <div class="info">
        <div class="info-header">
          <h2><?php echo $home["information-title"];?></h2>
        </div>
        <div class="info-menu">
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig">
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p><?php echo $home["information-article-text-general"];?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="links">
        <div class="link-header">
          <h2><?php echo $home["quick-links-title"];?></h2>
        </div>
        <p><a href="#"><?php echo $home["quick-links-schedule"]?></a></p>
        <p><a href="#"><?php echo $home["quick-links-grades"]?></a></p>
        <p><a href="#"><?php echo $home["quick-links-yearcalendar"]?></a></p>
        <p><a href="#"><?php echo $home["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $home["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $home["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $home["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $home["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $home["quick-links-example"]; ?></a></p>
      </div>
      <div class="news">
        <div class="news-header">
          <h2><?php echo $home["news-title"]; ?></h2>
        </div>
        <div class="news-image">
          <img src="assets/airplane-3702676_1920.jpg" alt="vliegtuig">
        </div>
        <div class="news-text">
          <h2><a href="infopage.php"><?php echo $home["news-article"];?></a></h2>
        </div>
      </div>
      <div class="event-number">
        <div class="event">
          <div class="event-header">
            <h2><?php echo $home["events-title"]; ?></h2>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>17</p>
              <p><?php echo $home["events-month-april"]; ?></p>
            </div>
            <div class="event-time">
              <p><?php echo $home["events-open-day"];?></p>
              <p>19:00</p>
            </div>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>26</p>
              <p><?php echo $home["events-month-april"]; ?></p>
            </div>
            <div class="event-time">
              <p><?php echo $home["events-open-day"]; ?></p>
              <p>19:00</p>
            </div>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>8</p>
              <p><?php echo $home["events-month-may"]; ?></p>
            </div>
            <div class="event-time">
              <p><?php echo $home["events-open-day"]; ?></p>
              <p>19:00</p>
            </div>
          </div>
        </div>
        <div class="number">
          <div class="number-header">
            <h2><?php echo $home["search-students-title"]; ?></h2>
          </div>
          <div class="number-search">
            <h2><?php echo $home["search-students-searchbar-text"]; ?></h2>
            <i class="fas fa-search"></i>
          </div>
        </div>
      </div>
    </main>
    <footer>
      <p>copyright</p>
    </footer>
  </div>
</body>
</html>