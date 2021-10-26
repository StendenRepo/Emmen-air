<!--
Programmeur: Jesse Oost
Datum: 26-10-2021
Opdracht: Project, vliegroute pagina.
-->
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

      <div class="assignment-wrap">
        <a href="vliegrouteskopelen.php">
          <div class="assignment-filling">
            <p class="assignment-text">Klik hier om studenten te kopelen</p>
          </div>
        </a>
      </div>

      <div class="flightroutes">
        <img src="assets/flightroutes/amstoist.png" alt="AMS to IST" class="routeimage">
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

      <div class="flightroutes">
        <img src="assets/flightroutes/amstojfk.png" alt="AMS to JFK" class="routeimage">
        <ul class="studentlist">
          <?php
            $assignments = json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true)["AMStoJFK"];

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

      <div class="flightroutes">
        <img src="assets/flightroutes/amstopvg.png" alt="AMS to PVG" class="routeimage">
        <ul class="studentlist">
          <?php
            $assignments = json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true)["AMStoPVG"];

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

      <div class="flightroutes">
        <img src="assets/flightroutes/amstosfo.png" alt="AMS to SFO" class="routeimage">
        <ul class="studentlist">
          <?php
            $assignments = json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true)["AMStoSFO"];

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

      <div class="flightroutes">
        <img src="assets/flightroutes/amstosvo.png" alt="AMS to SVO" class="routeimage">
        <ul class="studentlist">
          <?php
            $assignments = json_decode(file_get_contents(dirname(__FILE__)."/../data/vliegroutes.json"), true)["AMStoSVO"];

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