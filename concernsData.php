<?php 
include 'connection.php';

$sql = "SELECT * FROM concernstbl";
$result = $conn->query($sql);

echo $result->num_rows;
?>
