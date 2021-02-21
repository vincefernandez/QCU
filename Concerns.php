
   
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
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
  white-space: pre-wrap;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>
<form action="UserAccess.php" method="post">
<button class="BackButtonTop"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br>
</form>
<?php 
include 'connection.php';
session_start();
$student = $_SESSION['studno'];
$firstname1 = $_SESSION['firstname'];



if(isset($_POST['Submit'])){

  $_SESSION['subject'] = ($_POST['subject']);
  
  $subject1 = $_SESSION['subject'];
  $student1 = $_SESSION['studno'];
  $sql = "INSERT INTO concernstbl (student,subject,date) VALUES($student1,'$subject1',CURRENT_TIMESTAMP)";
  mysqli_query($conn,$sql);
}




   
?>
<center><h3>Concerns</h3></center>

<div class="container">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="alert alert-info">
    <strong>Hi <?php echo"$student!"?></strong> Your Message will be directly send to QCU Admin
  </div>
  
  <div class="alert alert-danger">
    <strong>Warning!</strong> Any inappropriate words will not be tolerated by QCU admin
  </div>
   
    <label for="subject">Message</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <input type="submit" value="Submit" name="Submit" style="float:right">
    </form>
</div>

   
 
   <?php
   /*
   $query = "Select student where = $student from adminsender";
   $result = $conn->query($query);
   if (!$result) {  ?>
    
 <?php
   }else{
    while($row = $result->fetch_assoc()) { 

  
      echo "<label for='subject'>Message</label>";
      echo "<textarea id='subject' name='subject' placeholder='Write something..' style='height:200px'></textarea>";
      echo "<input type='submit' value='Submit' name='Submit' style='float:right'>";
 
    
   }
   }
    
  */
  ?>

</body>
</html> 



<?php
$conn->close();
?>
