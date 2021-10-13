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
    <main class="main-gallerij">
      <div id="main-body">
        <div id="main-column">
          <div class="upload"> 
            <label for="upload-file" class="input-form"> Upload afbeelding </label>                            
          </div>
          <form class="input-form" action="upload.php" method="POST" enctype="multipart/form-data">
            <input id="upload-file" type="file" name="file">  
            <button id="submit-image" type="submit" name="submit"></button> 
            <div class="message">     
              <div class="English">
                <textarea name="messageEN" class="message-area" placeholder="EN"></textarea> 
              </div>   
              <div class="Dutch">
                <textarea name="messageNL" class="message-area" placeholder="NL"></textarea> 
              </div>          
            </div>
          </form>          
          <div class="upload" >       
              <label for="submit-image" class="input-form"> Plaats Afbeelding </label>                
          </div>
        </div>
      </div>     
    </main>
</body>
</html>
