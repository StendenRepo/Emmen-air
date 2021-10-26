<?php
include "../src/preload.php";
?>
<!--
Programmeur: Jesse Oost
Datum: 26-10-2021
Opdracht: Project, vliegroute pagina.
-->
<?php include "../src/preload.php"; ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <?php include "../templates/header.php"; ?>
    <meta charset="UTF-8">
    <title>Emmen Air - Vliegroutes</title>
    <link href="stylesheet.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <div id="flightcontainer">
    <form action="user/assignment.php" method="post">
        <div class="flightroutes">
          <img src="assets/flightroutes/amstoist.png" alt="AMS to IST" class="routeimage">
            <ul class="studentlist">
              <?php
                $users = json_decode(file_get_contents(dirname(__FILE__)."/../data/user.json"), true)["users"];

                foreach ($users as $user) : 
              ?>
              <li>
                <div>
                  <input type="checkbox" name="AMStoIST[]" value="<?php echo $user["email"]?>" id="AMStoIST_<?php echo $user["email"]?>" />
                  <label for="AMStoIST_<?php echo $user["email"]?>" class="studentname"><?php echo $user["email"] ?></label>
                </div>
              </li>
              <?php endforeach ?>
            </ul>
          <hr>
        </div>

        <div class="flightroutes">
          <img src="assets/flightroutes/amstojfk.png" alt="AMS to JFK" class="routeimage">
          <ul class="studentlist">
            <?php
              foreach ($users as $user) : 
              ?>
            <li>
              <div>
                <input type="checkbox" name="AMStoJFK[]" value="<?php echo $user["email"]?>" id="AMStoJFK_<?php echo $user["email"]?>" />
                <label for="AMStoJFK_<?php echo $user["email"]?>" class="studentname"><?php echo $user["email"] ?></label>
              </div>
            </li>
            <?php endforeach ?>
          </ul>
          <hr>
        </div>

        <div class="flightroutes">
          <img src="assets/flightroutes/amstopvg.png" alt="AMS to PVG" class="routeimage">
          <ul class="studentlist">
            <?php
              foreach ($users as $user) : 
              ?>
            <li>
              <div>
                <input type="checkbox" name="AMStoPVG[]" value="<?php echo $user["email"]?>" id="AMStoPVG_<?php echo $user["email"]?>" />
                <label for="AMStoPVG_<?php echo $user["email"]?>" class="studentname"><?php echo $user["email"] ?></label>
              </div>
            </li>
            <?php endforeach ?>
          </ul>
          <hr>
        </div>

        <div class="flightroutes">
          <img src="assets/flightroutes/amstosfo.png" alt="AMS to SFO" class="routeimage">
          <ul class="studentlist">
            <?php
              foreach ($users as $user) : 
              ?>
            <li>
              <div>
                <input type="checkbox" name="AMStoPVG[]" value="<?php echo $user["email"]?>" id="AMStoPVG_<?php echo $user["email"]?>" />
                <label for="AMStoPVG_<?php echo $user["email"]?>" class="studentname"><?php echo $user["email"] ?></label>
              </div>
            </li>
            <?php endforeach ?>
          </ul>
          <hr>
        </div>

        <div class="flightroutes">
          <img src="assets/flightroutes/amstosvo.png" alt="AMS to SVO" class="routeimage">
          <ul class="studentlist">
            <?php
              foreach ($users as $user) : 
              ?>
            <li>
              <div>
                <input type="checkbox" name="AMStoSVO[]" value="<?php echo $user["email"]?>" id="AMStoSVO_<?php echo $user["email"]?>" />
                <label for="AMStoSVO_<?php echo $user["email"]?>" class="studentname"><?php echo $user["email"] ?></label>
              </div>
            </li>
            <?php endforeach ?>
          </ul>
          <hr>
        </div>
          
        <div class=assignment-wrap>
          <button type="submit" class="assignment-button" name="save">Klik hier om op te slaan</button>
        </div>
      </form>
    </div>
  </body>
</html>