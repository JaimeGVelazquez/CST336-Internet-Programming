<?php

    include("dbConnection.php");
    $conn = getDatabaseConnection();
    $sql = "DELETE FROM Classes 
            WHERE classID = " . $_GET['classID'];

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");
    
?>