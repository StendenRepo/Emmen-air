<?php include "../src/preload.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <?php include "../templates/header.php"; ?>
  <body>
    <?php include "../templates/navbar.php"; ?>
    <div id="flightcontainer">
      <div class="flightroutes">
        <img src="assets/flightroutes/<?php echo $flightCode; ?>.png" alt="Jouw fliegroute" class="routeimage">
        <ul class="studentlist">
          <?php
            $assignments = json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true)["AMStoIST"];

            foreach ($assignments as $assignment) : 
            ?>
          <li>
            <div>
              <p class="studentname"><?php echo $assignment["name"] ?></p>
            </div>
          </li>
          <?php endforeach ?>
        </ul>
        <hr>
      </div>
    </div>
  </body>
</html>