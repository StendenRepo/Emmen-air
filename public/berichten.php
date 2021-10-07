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
            <ul class="nav-desktop">
                <li><a href="#">Home</a></li>
                <li><a href="#">Berichten</a></li>
                <li><a href="#">Vliegroutes</a></li>
                <li><a href="#">Galerij</a></li>
                <li><a href="#">Uitloggen</a>
			</ul>
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
			<form action="berichten.php" onSubmit="alert('Uw afbeelding is geplaatst!');" >
				<textarea id="textareaBerichten" name="textarea" placeholder="Vul hier uw bericht in..." required></textarea> 
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