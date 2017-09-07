
<!DOCTYPE html>
<?php
    include '777/inc/functions.php'
?>
<html>
    <head>
        <style>
            @import url("777/css/styles.css");
        </style>
        <title> 777 Slot Machine </title>
    </head>
    <body>
        <div id="main">
        
            <?php
                play();
            ?>
        
            <form>
                <input type="submit" value="Spin"/>
            </form>
        </div>
    </body>
</html>