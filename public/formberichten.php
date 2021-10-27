<?php include "../src/preload.php"; ?>
<!--
Programmeur: Tamme Tuncil
Datum: 05-10-2021
Opdracht: Project, berichten pagina.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include "../templates/header.php"; ?>
</head>
<body>
  <?php include '../templates/navbar.php'; ?>
  <main>
    <form action="user/uploadMessage.php" method="post" enctype="multipart/form-data">
      <div id="container-berichten">
        <div class="titel-bericht">
          <label for="titelAfbeelding"> Titel </label>
          <input type="text" id="titelAfbeelding" name="titel_berichten" autocomplete="off"
            placeholder="Vul hier de titel in van het bericht">
        </div>
        <div class="item-1">
          <label class="uploadImage" for="fotoFile">Upload een afbeelding</label>
          <input id="fotoFile" name="foto_berichten" type="file">
        </div>
        <div class="item-2">
          <label for="text-nl"> Nederlands bericht </label>
          <textarea id="text-nl" class="textareaBerichtenNL" name="messageNL" autocomplete="off"
            placeholder="Vul hier uw bericht in..." required></textarea>
        </div>
        <div class="item-2-en">
          <label for="text-eng"> Engels bericht </label>
          <textarea class="textareaBerichtenEN" id="text-eng" name="messageEN" autocomplete="off"
            placeholder="Type your message..." required></textarea>
        </div>
        <div class="item-3">
          <label class="submitImageButton" for="submitImage">Plaats Bericht</label>
          <input id="submitImage" name="submit_berichten" type="submit">
        </div>
      </div>
    </form>
  </main>
  <?php include "../templates/footer.php"; ?>
</body>
</html>