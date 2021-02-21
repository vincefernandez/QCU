<?php 
include('connection.php');
session_start();
$student = $_SESSION['studno'];


// $email1 = $_SESSION['email'];
// $studno1 = $_SESSION['studNumber'];
// $firstname1 = $_SESSION['firstname'];
// $lastname1 = $_SESSION['lastname'];
// $campus1 = $_SESSION['campus'];
// $subject1 = $_SESSION['subject'];
// $form1 = $_SESSION['form'];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="qcu9.png">
    <link rel="stylesheet" href="php.css">
    <link rel="stylesheet" href="animationAlert/animation.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php 

?>
<form action="LoginForStudent.php" method="post">
<button class="BackButtonTop"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br>
</form>
   





    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Hello <?php echo $student; ?>
</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href=#MainHeader>Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Request For <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
          <li><a href="CommentForm.php">Grade Slip</a></li>
          <li><a href="CommentForm.php">Registration Form</a></li>
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Message Admin<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="Concerns.php">Concerns</a></li>
          <li><a href="Feedback.php">Inbox</a></li>
        </ul>
      </li> 
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="request.php">Your Request Form <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        <li><a href="request.php">Your Request Form..</a></li>
        </ul>
      </li> 
          
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="request.php">Announcement From Admin <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        <li><a href="announcementRecieverStudent.php">Announcement<i class="fas fa-bell" id="request-Notif" style="color: black;"></i></a></li>
        </ul>
      </li> 
    </ul>
   
     
    
    <ul class="nav navbar-nav navbar-right">
  
      <li><a href="LoginForStudent.php"><span class="glyphicon glyphicon-hand-right"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
  


   
  
     
  <?php

include ('connection.php');

$sql = "Select * from haha where ID = $student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
    
   
      
    ?>
      
    <table class="table">
      
   <center> <h1>   Student Informations </h1></center>
    <thead>

      <th>StudentNumber</th>
      <th>Campus</th> 
      <th>Last Name</th>
      <th>First Name</th>
      <th>Middle Name</th>
      <th>Description</th>
      <th>Section</th>
      <th>Day</th>
      <th>Email</th>
     
    </thead>
    <tbody>
  
 <?php  while($row = $result->fetch_assoc()) { ?>
  <tr>
  <td class="Info"><?php echo $row['Student_Number']; ?> </td>
  <td class="Info"> <?php echo $row['Campus']; ?> </td>
  <td class="Info"> <?php echo $row['Last_Name']; ?> </td>
  <td class="Info"> <?php echo $row['First_Name']; ?> </td>
  <td class="Info">  <?php echo $row['Middle_Name']; ?> </td>
  <td class="Info">  <?php echo $row['Description']; ?> </td>
  <td  class="Info"> <?php echo $row['Section']; ?> </td>
  <td class="Info"><?php echo $row['Day']; ?> </td>
  <td class="Info"> <?php echo $row['Email']; ?> </td>
 
  </tr>
  
 
    </tbody>
  
  
  <?php
   
     }
     } else {
        echo "0 results";
     } 
     ?>
   
  
  
<?php
  $conn->close();
  
  ?>
<script>
function AnnounceRecievable() {
    setInterval(function(){
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("request-Notif").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "concernsData.php", true);
  xhttp.send();
    },1000);
  
}
AnnounceRecievable();
</script>
</body>
</html>
