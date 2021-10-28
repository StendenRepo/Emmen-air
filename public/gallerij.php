<?php include "../src/preload.php"; ?>
<?php include "../src/images.php"; ?>
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
        <a href="uploadimage.php">
          <h2> <?php echo $lang["quick-links-inputForm-image"]; ?> </h2>
        </a>
      </div>
    </div>
    <div class="row">
      <?php
    $images = getAllImages();
      foreach($images as $image) {
        echo "
        <div class='gallerij-image'>
          <img src='assets/uploaded_images/{$image["imageName"]}' alt='{$image["imageName"]}'>
          <div>";
        echo ($_SESSION["language"] === "eng") ?
              $image["hoverTextEn"] :
              $image["hoverTextNl"];
        echo '
          </div>
        </div>';
      }
    ?>
    </div>
  </main>
  <?php include "../templates/footer.php";?>
</body>
</html>