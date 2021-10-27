<?php
include "../src/preload.php";
include "../src/messages.php";
?>
<!--
Programmeur: Tamme Tuncil
Datum: 12-10-2021
Opdracht: Project, berichten pagina.
-->
<html lang="en">
  <head>
    <?php include "../templates/header.php"; ?>
  </head>
  <body>
    <?php include '../templates/navbar.php'; ?>
    <div class="bericht-container">
      <div class="bericht-overview">
        <div class="bericht-title"> <h2> Berichten </h2> </div>
          <div class="bericht" id="message-1">
              <h3>onderwerp 1 </h3>
              <p class="bericht-text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Asperiores, id atque corrupti illo placeat omnis sapiente
                repellendus ullam, rerum et quis! Quae deserunt aliquid,
                reiciendis placeat doloribus minima qui libero.
              </p>
            <p class="berichten-author"> Auteur </p>
          </div>
          <div class="bericht" id="message-2">
          <h3>onderwerp 1 </h3>
            <p class="bericht-text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Asperiores, id atque corrupti illo placeat omnis sapiente
              repellendus ullam, rerum et quis! Quae deserunt aliquid,
              reiciendis placeat doloribus minima qui libero.
            </p>
            <p class="berichten-author"> Auteur </p>
          </div>
      </div>
      <div class="berichten-divider"> </div>
      <div class="links berichten-links">
        <div class="link-header">
          <h2><?php echo $lang["quick-links-title"];?></h2>
        </div>
        <p><a href="formberichten.php"><?php echo $lang["quick-links-inputForm-msg"] ?></a></p>
        <p><a href="uploadimage.php"><?php echo $lang["quick-links-inputForm-image"] ?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-schedule"]?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-grades"]?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-yearcalendar"]?></a></p>
      </div>
    </div>
    <?php include "../templates/footer.php"; ?>
  </body>
</html>