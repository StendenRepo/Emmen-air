<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="stylesheet.css" type="text/css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>gallerij</title>
</head>
<body>
  <div id="container">
    <header>
      <div class="logo">
        <h1>Emmen Air</h1>
      </div>
      <nav class="nav-desktop">
        <a href="#">Home</a>
        <a href="#">Berichten</a>
        <a href="#">Vliegroutes</a>
        <a href="#">Galerij</a>
        <a href="#">Uitloggen</a> 
      </nav>
    </header>
    <main>
      <div id="main-body">
        <div id="main-column">
          <div class="upload">      
            <button type="button">Upload een afbeelding</button>       
          </div>
          <div class="message">     
            <div class="English">
              <textarea name="bericht" id="berichtArea" placeholder="EN"></textarea> 
            </div>   
            <div class="Dutch">
              <textarea name="bericht" id="berichtArea" placeholder="NL"></textarea> 
            </div>          
          </div>
          <div class="upload">           
            <button type="button">Plaats afbeelding</button>            
          </div>
        </div>

      </div>

    </main>
  </div>
  
</body>
</html>