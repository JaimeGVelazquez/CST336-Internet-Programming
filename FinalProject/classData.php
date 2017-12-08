<?php
session_start();

include("dbConnection.php");
 $conn = getDatabaseConnection();

function getClassInfo($classID) {
    global $conn;    
    $sql = "SELECT * 
            FROM Classes NATURAL JOIN Professors NATURAL JOIN Buildings
            WHERE classID = $classID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    //print_r($record);
    return $record;
}

if (isset($_GET['classID'])) {
    
    $classInfo = getClassInfo($_GET['classID']);
    
    
}

echo 'Class ID: ' . $classInfo['classID'] . '<br>';
echo 'Class Name: ' . $classInfo['className'] . '<br>';
echo 'Class Room: ' . $classInfo['classRoom'] . '<br>';
echo 'Class Building: ' . $classInfo['buildingName'] . '<br>';
echo 'Professor: ' . $classInfo['professorName'] . '<br>';
echo 'Professor Salary: ' . $classInfo['professorSalary'] . '<br>';
echo 'Subject: ' . $classInfo['professorField'] . '<br>';





?>
<!DOCTYPE html>
<html>
    <head>
        <title>Class Data</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>
        <form action="admin.php">
            
            <input type="submit" value="Back" />
            
        </form>
    </body>
</html>