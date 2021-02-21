<?php 
include 'connection.php';

$sql = "SELECT * FROM announcetbl";
$result = $conn->query($sql);

echo $result->num_rows;
?>
