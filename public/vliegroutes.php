<?php include "../src/preload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../templates/header.php"; ?>
<body>
  <?php include "../templates/navbar.php"; ?>
  <div id="flightcontainer">
    <div class="flightroutes">
      <?php if(!isset($_GET["error"])) : ?>
      <img src="assets/flightroutes/<?php echo $_GET["flightCode"]; ?>.png" alt="Jouw fliegroute" class="routeimage">
      <ul class="studentlist">
        <li>
          <div>
            <p class="studentname"><?php echo $_GET["name"] ?></p>
          </div>
        </li>
      </ul>
      <?php else : ?>
      <ul class="studentlist">
        <li>
          <div>
            <h3 class="studentname">Error</h3>
          </div>
        </li>
      </ul>
      <?php endif ?>
      <hr>
    </div>
  </div>
</body>
</html>