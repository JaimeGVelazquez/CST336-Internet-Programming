<?php

include 'dbConnection.php';
$conn = getDatabaseConnection();

$sql = "SELECT *
        FROM search_history
        WHERE query = :query";

$namedParameters = array();
$namedParameters[':query'] = $_GET['query'];
        
$stmt = $conn->prepare($sql);
$stmt->execute($namedParameters);
$record = $stmt->fetch(PDO::FETCH_ASSOC);//expecting only one record

echo json_encode($record);

?>