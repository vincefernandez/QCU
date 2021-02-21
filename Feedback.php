

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

if(isset($_POST['Delete'])){
$deleteID = $_POST['stud'];
$sql = "DELETE FROM adminsender where student = $deleteID";
$result = mysqli_query($conn,$sql);
}
session_start();
$student = $_SESSION['studno'];
$firstname1 = $_SESSION['firstname'];
$query = "SELECT * FROM adminsender WHERE student=$student ";
$result = mysqli_query($conn,$query);
?>
<center><h3>Quezon City University</h3></center>

<div class="alert alert-info">
    <strong>FROM </strong> QCU Admin:
   </div>
<?php
 while($row=mysqli_fetch_array($result)){
?>
<div class="container">
<form action="Feedback.php" method="post">
   <label for="subject">Hello <?php echo"$row[student]"?></label>
    <textarea id="subject" name="subject" style="height:200px"><?php echo"$row[message];"?></textarea>
    <span><?php echo "$row[date];"?></span>
   
    <input type="text" name="stud" <?php echo"value=$row[student]" ?>>
   <button type="submit" name="Delete">Delete</button>
</form>
</div>
</div>

   <?php
}
?>
<?php

if (!$result) {  ?>
   <label for='subject'> Hi <?php echo"$student";?></label>
    <textarea id='subject' name='subject' placeholder='Waiting for the response of Admin! Thank you!' style='height:200px; color:red;'></textarea>
  <?php
   }else{
 }
  ?>

<?php
$conn->close();

?>
</body>
</html> 



