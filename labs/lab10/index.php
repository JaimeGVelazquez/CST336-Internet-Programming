<?php

  //print_r($_FILES);
  if( $_FILES['myFile']['size'] < 1000000){
  move_uploaded_file($_FILES["myFile"]["tmp_name"], "gallery/" . $_FILES["myFile"]["name"] );
  } else {
      alert("File size too large");
  }
  //echo $_FILES['myFile']['size'];
  
  $files = scandir("gallery/", 1);
 // print_r($files);

?>

<!DOCTYPE html>

<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title> Lab 10: Photo Gallery </title>
        <script>
             $(document).ready( function(){
                    $('.image').click( function ()
                    {
                        $('.image').width(50);
                        $('.image').height(50);
                        $(this).width(500);
                        $(this).height(500);
                    });
             });//document.ready
        </script>
        <style>
             @import url("css/styles.css");
        </style>
    </head>
    <body>

    <h2> Photo Gallery </h2>
    <form method="POST" enctype="multipart/form-data"> 


        <input type="file" name="myFile" /> 
        
        <input type="submit" value="Upload File!" />

    </form>
    
    <?php
          for ($i = 0; $i < count($files) - 2; $i++) {
                
                echo "<img class='image' src='gallery/" .   $files[$i] . "' width='50' >";
      
            }
    
    ?>

    </body>
</html>