<?php include "../src/preload.php"; ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../templates/header.php"; ?>
<body>
  <?php include "../templates/navbar.php"; ?>
  <div id="flightcontainer">
    <div class="flightroutes">
      <form class="gallerij-form" action="user/assignment.php" method="POST">
        <div class="number-header">
          <h2><?php echo $lang["search-students-title"];?></h2>
        </div>
        <div class="number-input">
          <input type="text" name="number-finder" class="studentSearchField" id="number-finder"
            placeholder="<?php echo $lang["search-students-searchbar-text"];?>" />
        </div>
        <div class="number-submit gallerij-submit">
          <input type="submit" value="<?php echo $lang["searchBtnForm"]?>" name="submit">
        </div>
      </form>
      <?php if(!isset($_GET["error"]) && isset($_GET['flightCode'])) : ?>
      <img src="assets/flightroutes/<?php echo $_GET["flightCode"]; ?>.png" alt="Jouw fliegroute" class="routeimage">
      <ul class="studentlist">
        <li>
          <div>
            <p class="studentname">Naam: <?php echo $_GET["name"] ?></p>
          </div>
        </li>
      </ul>
      <?php else : ?>
      <ul class="studentlist">
        <li>
          <div>
            <h3 class="studentnameerror"><?php echo $_SESSION["error"]; ?></h3>
          </div>
        </li>
      </ul>
      <?php endif ?>
      <hr class="flightrouteline">
    </div>
  </div>
  <?php include "../templates/footer.php";?>
</body>
</html>