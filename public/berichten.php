<!-- Programmeur: Tamme Tuncil
Datum: 05-10-2021
Opdracht: Project, berichten pagina. -->
<!DOCTYPE html>
<html>
<head>
	<!-- Template include voor de header -->
	<?php include "../templates/header.php"; ?>
    <!-- Imported stylecode voor het font Roboto -->
	<style>
	@import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
	</style>
	<title>Berichten</title>
</head>
<body>
	<div id="container-berichten">
		<div class="item-1">
			<label class="uploadImage" for="fotoFile">Upload een afbeelding</label> 
            <input id="fotoFile" type="file">
		</div>
		<div class="item-2">
            <label for="textareaBerichten"></label>
            <textarea id="textareaBerichten" name=textarea placeholder="Vul hier uw bericht in..."></textarea>
		</div>
		<div class="item-3">
			<label class="submitImageButton" for="submitImage">Plaats afbeelding</label> 
            <input id="submitImage" type="submit">
		</div>
	</div>
</body>
</html> 