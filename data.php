<?php 
include 'connection.php';

$sql = "SELECT * FROM formtable";
$result = $conn->query($sql);

echo $result->num_rows;
?>