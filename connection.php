<?php


$studno = "";
$Student_Number = "";
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "classlist";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>