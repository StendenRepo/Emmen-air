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
  <div id="container-galerij">
    <header>
    </header>
    <main>
      <div id="main-body">
        <div id="main-column">
          <div class="upload">      
            <form action="upload.php" method="POST" enctype="multipart/form-data">
              <label for="upload-file"> Upload afbeelding </label>
              <input id="upload-file" type="file" name="file">  
              <button id="submit-image" type="submit" name="submit"></button>  
            </form>      
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
            <label for="submit-image"> Plaats Afbeelding </label>           
          </div>
        </div>
      </div>     
    </main>
  </div>
</body>
</html>
