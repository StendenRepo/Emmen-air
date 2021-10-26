<?php include "../src/preload.php"; ?>
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
        <div class="bericht">
          <h3>Onderwerp nummer 1</h3>
          <p class="bericht-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores, id atque corrupti illo placeat omnis sapiente
            repellendus ullam, rerum et quis! Quae deserunt aliquid,
            reiciendis placeat doloribus minima qui libero.
          </p>
          <p>
            <small> 
                Auteur: 
            </small> 
          </p>
        </div>
        <div class="bericht">
          <h3>Subject number 1</h3>
          <p class="bericht-text">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Asperiores, id atque corrupti illo placeat omnis sapiente
            repellendus ullam, rerum et quis! Quae deserunt aliquid,
            reiciendis placeat doloribus minima qui libero.
          </p>
          <p>
            <small> 
                Auteur: 
            </small> 
          </p>
        </div>
      </div>
      <div class="links berichten-links">
        <div class="link-header">
          <h2><?php echo $lang["quick-links-title"];?></h2>
        </div>
        <p><a href="formberichten.php"><?php echo $lang["quick-links-inputForm-msg"] ?></a></p>
        <p><a href="uploadimage.php"><?php echo $lang["quick-links-inputForm-image"] ?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-schedule"]?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-grades"]?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-yearcalendar"]?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-example"]; ?></a></p>
        <p><a href="#"><?php echo $lang["quick-links-example"]; ?></a></p>
      </div>
    </div>
    <?php include "../templates/footer.php"; ?>
  </body>
</html>