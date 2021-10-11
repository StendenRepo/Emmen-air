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
		<header>
			<div class="logo">
				<h1>Emmen Air</h1>
			</div>
			<div class="openMenu">
				<i class="fa fa-bars"></i>
			</div>
			<ul class="nav-desktop">
				<li><a href="home.php">Home</a></li>
				<li><a href="?language=eng">eng</a>/<a href="?language=nl">nl</a></li>
				<li><a href="#">Berichten</a></li>
				<li><a href="#">Vliegroutes</a></li>
				<li><a href="#">Galerij</a></li>
				<li><a href="#">Uitloggen</a>
			</ul>
		</header>
		<div id="container-berichten">
			<div class="item-1">
				<label class="uploadImage" for="fotoFile">Upload een afbeelding</label> 
				<input id="fotoFile" type="file">
			</div>
			<div class="item-2">
				<form action="berichten.php" onSubmit="alert('Uw afbeelding is geplaatst!');" >
					<textarea id="textareaBerichten" name="textarea" placeholder="Vul hier uw bericht in..." required></textarea> 
					<input id="submitImage" type="submit">
				</form>
			</div>
			<div class="item-3">
				<label class="submitImageButton" for="submitImage"><?php echo $submitLable; ?></label>
			</div>
		</div>
	</body>
</html>