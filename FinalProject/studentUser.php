<?php
session_start();



include 'dbConnection.php';
$conn = getDatabaseConnection();


function displayClasses() {
    global $conn;
    $sql = "SELECT * 
            FROM Classes";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $classes = $statement->fetchAll(PDO::FETCH_ASSOC);
    //print_r($classs);
    return $classes;
}

?>
<!DOCTYPE html>
<html>
    <head>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>User Class List </title>

        <style>
             @import url("css/styles.css");
        </style>
    </head>
    <body>
    <div class="body">
        <h1> Student Class List </h1>
        <h2> Welcome Student! </h2>
        
        <hr>
        <form action="logout.php">
            
            <input type="submit" value="Logout" />
            
        </form>
        
        <br /><br />
        
        <?php
        
        $classes =displayClasses();
        
        foreach($classes as $class) {
            
            echo $class['classId'];
            echo "[<a href='studentClassData.php?classID=".$class['classID']."'>'" .$class['className'] . "  " . $class['classSection']. "'</a> ]";
            
            echo "<br />";
            
        }
        
        
        
        ?>
    </div>
    </body>     
</html>