<!--
Programmeur: Tamme Tuncil
Datum: 05-10-2021
Opdracht: Project, berichten pagina.
-->
<!DOCTYPE html>
<html>
<head>
  <?php include "../templates/header.php"; ?>
  <!-- Imported stylecode voor het font Roboto en Montserrat-->
</head>
<body>
  <div id="container-berichten">
    <div class="item-1">
      <label class="uploadImage" for="fotoFile">Upload een afbeelding</label>
      <input id="fotoFile" type="file">
    </div>
    <div class="item-2">
      <form action="berichten.php" onSubmit="alert('Uw afbeelding is geplaatst!');">
        <textarea id="textareaBerichten" name="textarea" placeholder="Vul hier uw bericht in..." required></textarea>
        <input id="submitImage" type="submit">
      </form>
    </div>
    <div class="item-3">
      <label class="submitImageButton" for="submitImage">Plaats afbeelding</label>
    </div>
  </div>
</body>
</html>