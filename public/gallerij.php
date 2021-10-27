<?php include "../src/preload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php"; ?>
</head>
<body>
  <?php include '../templates/navbar.php'; ?>
  <main class="gallerij-container">
    <div class="gallery-title">
      <div>
        <a href="title">
          <h2> Upload een afbeelding </h2>
        </a>
      </div>
    </div>
    <div class="row">
      <div class="gallerij-image">
        <img src="./assets/auto-verticaal.jpg" alt="plaatje">
        <div> test </div>
      </div>
      <div class="gallerij-image">
        <img src="./assets/auto-horizontaal.jpg" alt="plaatje">
        <div> test </div>
      </div>
      <div class="gallerij-image">
        <img src="./assets/auto-horizontaal.jpg" alt="plaatje">
        <div> test </div>
      </div>
    </div>
    <div class="row">
      <div class="gallerij-image">
        <img src="./assets/auto-verticaal.jpg" alt="plaatje">
        <div> test </div>
      </div>
      <div class="gallerij-image">
        <img src="./assets/F-16_June_2008.jpg" alt="plaatje">
        <div> test </div>
      </div>
      <div class="gallerij-image">
        <img src="./assets/F-16_June_2008.jpg" alt="plaatje">
        <div> test </div>
      </div>
    </div>
  </main>
  <?php include "../templates/footer.php";?>
</body>
</html>