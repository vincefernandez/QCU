<?php  session_start()?>
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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">.
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<a href="LoginForstudent.php"><button class="BackButtonTop"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br>
   
   






    <div class="RequestingForFile">
    
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">Hello <?php
      $_SESSION['user'] = $_POST['studno'];
      echo $_SESSION['user'];
?></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href=#MainHeader>Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Request For <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="CommentForm.php">Transcript of Records</a></li>
          <li><a href="CommentForm.php">Grade Slip</a></li>
          <li><a href="CommentForm.php">Registration Form</a></li>
        </ul>
      </li>
     <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Our Administrations!<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Transcript of Records</a></li>
          <li><a href="#">Grade Slip</a></li>
          <li><a href="#">Registration Form </a></li>
        </ul>
      </li> 
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact Numbers <span class="caret"></span></a>
        <ul class="dropdown-menu">
          
        <li><a href="CommentForm.php">Registration Form</a></li>
        </ul>
      </li> 
          
    </ul>
   
     
    
    <ul class="nav navbar-nav navbar-right">
  
      <li><a href="LoginForStudent.php"><span class="glyphicon glyphicon-hand-right"></span> Log Out</a></li>
    </ul>
  </div>
</nav>
  


    </div>
  
     
  <?php
include ('connection.php');
$Student_Number = $_POST['studno'];
$sql = "Select * from haha where ID = $Student_Number"; 
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
  <tr>
 <?php  while($row = $result->fetch_assoc()) { ?>
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

</body>
</html>
