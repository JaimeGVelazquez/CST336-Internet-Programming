<?php
session_start();

include("dbConnection.php");
 $conn = getDatabaseConnection();

function getUserInfo($userId) {
    global $conn;    
    $sql = "SELECT * 
            FROM tc_user
            WHERE userId = $userId";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch();
    //print_r($record);
    return $record;
}

if (isset($_GET['userId'])) {
    
    $userInfo = getUserInfo($_GET['userId']);
    
    
}

echo 'User ID: ' . $userInfo['userId'] . '<br>';
echo 'Name:' . $userInfo['firstName'] . ' ' . $userInfo['lastName'] . '<br>';
echo 'Email: ' . $userInfo['email'] . '<br>';
echo 'University ID: ' . $userInfo['universityId'] . '<br>';
echo 'Phone: ' . $userInfo['phone'] . '<br>';
echo 'Gender: ' . $userInfo['gender'] . '<br>';
echo 'Role: ' . $userInfo['role'] . '<br>';




?>
<!DOCTYPE html>
<html>
    <head>
        <title>User Data</title>
    </head>
    <body>
        <form action="admin.php">
            
            <input type="submit" value="Back" />
            
        </form>
    </body>
</html>