<?php

// $servername = "localhost";
// $username = "id15998412_dbuser";
// $password = "";
// $dbname ="id15998412_dbname";
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