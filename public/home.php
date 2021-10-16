<?php include "../src/preload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php"; ?>
</head>
<body>
  <?php include '../templates/navbar.php'; ?>
  <div id="container">
    <main class="home">
      <div class="info-news">
        <div class="info">
          <div class="info-header">
            <h2><?php echo $lang["information-title"];?></h2>
          </div>
          <div class="info-menu">
            <div class="info-element">
              <div class="image">
                <img src="assets/plane-841441_1920.jpg" alt="vliegtuig" />
              </div>
              <div class="info-text">
                <h2>Lorem Ipsum</h2>
                <p><?php echo $lang["information-article-text-general"];?></p>
              </div>
            </div>
            <div class="info-element">
              <div class="image">
                <img src="assets/plane-841441_1920.jpg" alt="vliegtuig" />
              </div>
              <div class="info-text">
                <h2>Lorem Ipsum</h2>
                <p><?php echo $lang["information-article-text-general"];?></p>
              </div>
            </div>
            <div class="info-element">
              <div class="image">
                <img src="assets/plane-841441_1920.jpg" alt="vliegtuig" />
              </div>
              <div class="info-text">
                <h2>Lorem Ipsum</h2>
                <p><?php echo $lang["information-article-text-general"];?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="news">
          <div class="news-header">
            <h2><?php echo $lang["news-title"]; ?></h2>
          </div>
          <div class="news-image">
            <img src="assets/airplane-3702676_1920.jpg" alt="vliegtuig" />
          </div>
          <div class="news-text">
            <h2><a href="infopage.php"><?php echo $lang["news-article"];?></a></h2>
          </div>
        </div>
      </div>
      <div class="link-event-number">
        <div class="links">
          <div class="link-header">
            <h2><?php echo $lang["quick-links-title"];?></h2>
          </div>
          <p><a href="formberichten.php"><?php echo $lang["quick-links-inputForm-msg"] ?></a></p>
          <p><a href="uploadimage.php"><?php echo $lang["quick-links-inputForm-image"] ?></a></p>
          <p><a href="#"><?php echo $lang["quick-links-schedule"]?></a></p>
          <p><a href="#"><?php echo $lang["quick-links-grades"]?></a></p>
          <p><a href="#"><?php echo $lang["quick-links-yearcalendar"]?></a></p>
        </div>
        <div class="event">
          <div class="event-header">
            <h2><?php echo $lang["events-title"]; ?></h2>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>17</p>
              <p><?php echo $lang["events-month-april"]; ?></p>
            </div>
            <div class="event-time">
              <p><?php echo $lang["events-open-day"];?></p>
              <p>19:00</p>
            </div>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>26</p>
              <p><?php echo $lang["events-month-april"]; ?></p>
            </div>
            <div class="event-time">
              <p><?php echo $lang["events-open-day"]; ?></p>
              <p>19:00</p>
            </div>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>8</p>
              <p><?php echo $lang["events-month-may"]; ?></p>
            </div>
            <div class="event-time">
              <p><?php echo $lang["events-open-day"]; ?></p>
              <p>19:00</p>
            </div>
          </div>
        </div>
        <div class="number">
          <form action="vliegroutes.php" method="POST">
            <div class="number-header">
              <h2><?php echo $lang["search-students-title"];?></h2>
            </div>
            <div class="number-input">
              <input type="text" name="number-finder" class="studentSearchField" id="number-finder"
                placeholder="<?php echo $lang["search-students-searchbar-text"];?>" />
            </div>
          </form>
        </div>
      </div>
    </main>
    <footer>
      <p>copyright</p>
    </footer>
  </div>
</body>
</html>