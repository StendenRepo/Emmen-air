<?php include "../src/preload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php" ?>
</head>
<body>
  <?php include '../templates/navbar.php'; ?>
  <main class="main-gallerij">
    <div id="main-body">
      <div id="main-column">
        <form class="input-form" action="user/upload.php" method="POST" enctype="multipart/form-data">
          <div class="upload">
            <label for="upload-file" class="label-form"> <?php echo $lang["upload-title"]; ?> </label>
          </div>
          <input id="upload-file" type="file" name="file">
          <button id="submit-image" type="submit" name="submit"></button>
          <div class="message">
            <div class="english">
              <label for="message-eng"> Bericht Engels </label>
              <textarea id="message-eng" name="messageEN" class="message-area" placeholder="EN"></textarea>
            </div>
            <div class="dutch">
              <label for="message-nl"> Bericht Nederlands </label>
              <textarea id="message-nl" name="messageNL" class="message-area" placeholder="NL"></textarea>
            </div>
          </div>
          <div class="upload">
            <label for="submit-image" class="label-form"> <?php echo $lang["upload-end"]; ?> </label>
          </div>
        </form>
      </div>
    </div>
  </main>
  <?php include "../templates/footer.php"; ?>
</body>
</html>