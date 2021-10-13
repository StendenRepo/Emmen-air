<!--
Programmeur: Tamme Tuncil
Datum: 05-10-2021
Opdracht: Project, berichten pagina.
-->
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <?php include "../templates/header.php"; ?>
</head>
<body>
  <form action="berichten.php" method="post" enctype="multipart/form-data">
    <div id="container-berichten">
    <div class="titel-bericht">
        <input type="text" id="titelAfbeelding" name="titel_berichten" autocomplete="off" placeholder="Titel">
    </div>
    <div class="item-1">
        <label class="uploadImage" for="fotoFile">Upload een afbeelding</label>
        <input id="fotoFile" name="foto_berichten" type="file">
    </div>
    <div class="item-2">
        <textarea class="textareaBerichtenNL" name="textarea_nl" autocomplete="off" placeholder="Vul hier uw bericht in..." required></textarea>
    </div>
    <div class="item-2-en">
        <textarea class="textareaBerichtenEN" name="textarea_EN" autocomplete="off" placeholder="Type your message..." required></textarea>
    </div>
    <div class="item-3">
        <label class="submitImageButton" for="submitImage">Plaats Bericht</label>
        <input id="submitImage" name="submit_berichten" type="submit">
    </div>
  </div>
</form>
</body>
</html>