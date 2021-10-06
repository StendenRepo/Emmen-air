<!-- 
Programmeur: Tamme Tuncil
Datum: 05-10-2021
Opdracht: Project, berichten pagina.
-->
<!DOCTYPE html>
<html>
<head>
	<!-- Template include voor de header -->
	<?php include "../templates/header.php"; ?>
	<!-- Imported stylecode voor het font Roboto en Montserrat-->
	<style>
	    @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');
	 	@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
	</style>
	<title>Berichten</title>
</head>
<body>
<!-- Start van header -->
	<header>
		<div class="logo">
			<h1>Emmen Air</h1>
		</div>
		<div class="openMenu">
			<i class="fa fa-bars"></i>
		</div>
		<nav class="nav-desktop">
			<a href="#">Home</a> 
			<a href="#">Berichten</a> 
			<a href="#">Vliegroutes</a> 
			<a href="#">Galerij</a> 
			<a href="#">Uitloggen</a>
		</nav>
	</header>
<!-- Einde header -->

<!-- Eerst container upload afbeelding -->
	<div id="container-berichten">
		<div class="item-1">
			<label class="uploadImage" for="fotoFile">Upload een afbeelding</label> 
			<input id="fotoFile" type="file">
		</div>
		<!-- Einde eerste container -->
		
		<!-- Start tweede container textarea -->
		<div class="item-2">
			<form action="berichten.php">
				<textarea id="textareaBerichten" name="textarea" placeholder="Vul hier uw bericht in..."></textarea> 
				<input id="submitImage" type="submit">
			</form>
		</div>
		<!-- Einde tweede container textarea -->

		<!-- Start derde container submit button -->
		<div class="item-3">
			<label class="submitImageButton" for="submitImage">Plaats afbeelding</label>
		</div>
	</div>
<!-- Einde main content -->
</body>
</html>