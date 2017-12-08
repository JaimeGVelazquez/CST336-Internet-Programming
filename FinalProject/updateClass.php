<?php
session_start();

if (!isset($_SESSION['username'])) { //validates that admin has indeed logged in
    
    header("Location: index.php");
    
}

 include("dbConnection.php");
 $conn = getDatabaseConnection();

function getClassInfo($classID) {
    global $conn;    
    $sql = "SELECT * 
            FROM Classes
            WHERE classID = $classID";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    //print_r($record);
    return $record;
}

if (isset($_GET['updateClassForm'])) { //admin has submitted form to update user
    
    
    $sql = "UPDATE Classes
            SET className = :cName,
                classRoom = :cRoom,
                classSection = :cSection
			WHERE classID = :cID";
			
	
	$namedParameters = array();
	$namedParameters[":cID"] = $_GET['classID'];
	$namedParameters[":cName"] = $_GET['className'];
	$namedParameters[":cRoom"] = $_GET['classRoom'];
	$namedParameters[":cSection"] = $_GET['classSection'];
    $stmt = $conn->prepare($sql);
    $stmt->execute($namedParameters);
}



if (isset($_GET['classID'])) {
    
    $classInfo = getClassInfo($_GET['classID']);
    
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin: Updating Class </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </head>
    <body>

    <h1> Admin Section </h1>
    <h2> Updating Class Info </h2>

    <fieldset>
        
        <legend> Update Class </legend>
        
        <form>
            
            <input type="hidden" name="classID" value="<?=$classInfo['classID']?>" />
            Class Name: <input type="text" name="className" required value="<?=$classInfo['className']?>" /> <br>
            Class Room: <input type="text" name="classRoom" required value="<?=$classInfo['classRoom']?>"/> <br>
            Class Section: <input type="text" name="classSection" required value="<?=$classInfo['classSection']?>"/> <br>

                        </select>
                        <br />
                <input type="submit" name="updateClassForm" value="Update Class!"/>
        </form>
        
    </fieldset>


    </body>
</html>