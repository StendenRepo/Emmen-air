<!--
    programmeur: Victor Peters
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php"; ?>
</head>
<body>
  <?php include '../templates/navbar.php'; ?>
  <div id="container">
    <main class="home">
      <div class="info">
        <div class="info-header">
          <h2>Informatie</h2>
        </div>
        <div class="info-menu">
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig" />
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p>vind hier meer informatie over dit onderwerp</p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig" />
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p>vind hier meer informatie over dit onderwerp</p>
            </div>
          </div>
          <div class="info-element">
            <div class="image">
              <img src="assets/plane-841441_1920.jpg" alt="vliegtuig" />
            </div>
            <div class="info-text">
              <h2>Lorem Ipsum</h2>
              <p>vind hier meer informatie over dit onderwerp</p>
            </div>
          </div>
        </div>
      </div>
      <div class="links">
        <div class="link-header">
          <h2>Snelle Links</h2>
        </div>
        <p><a href="#">Roosters</a></p>
        <p><a href="#">Cijfers</a></p>
        <p><a href="#">Jaarkalenders</a></p>
        <p><a href="#">Voorbeeld</a></p>
        <p><a href="#">Voorbeeld</a></p>
        <p><a href="#">Voorbeeld</a></p>
        <p><a href="#">Voorbeeld</a></p>
        <p><a href="#">Voorbeeld</a></p>
        <p><a href="#">Voorbeeld</a></p>
      </div>
      <div class="news">
        <div class="news-header">
          <h2>Nieuws</h2>
        </div>
        <div class="news-image">
          <img src="assets/airplane-3702676_1920.jpg" alt="vliegtuig" />
        </div>
        <div class="news-text">
          <h2><a href="infopage.php">Nieuws Artikel</a></h2>
        </div>
      </div>
      <div class="event-number">
        <div class="event">
          <div class="event-header">
            <h2>Evenementen</h2>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>17</p>
              <p>April</p>
            </div>
            <div class="event-time">
              <p>open dag</p>
              <p>19:00</p>
            </div>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>26</p>
              <p>April</p>
            </div>
            <div class="event-time">
              <p>open dag</p>
              <p>19:00</p>
            </div>
          </div>
          <div class="event-element">
            <div class="event-date">
              <p>8</p>
              <p>Mei</p>
            </div>
            <div class="event-time">
              <p>open dag</p>
              <p>19:00</p>
            </div>
          </div>
        </div>
        <div class="number">
          <form action="vliegroutes.php" method="POST">
            <div class="number-header">
              <h2>Zoek uw schoolgenoten op</h2>
            </div>
            <div class="number-input">
              <input type="text" name="number-finder" id="number-finder" placeholder="Zoek..." />
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