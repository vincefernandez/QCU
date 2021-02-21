<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  .header{
    margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
  }
body {
  

    font-family: 'Raleway', sans-serif;
    background-image: url("background.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    
}

.container {
  border: 3px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
  white-space: pre-wrap;
  opacity: 0.8;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 50px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.BackButtonTop{
  float:left;
}
.studInput{
border: none;
background-color: none;
background: transparent;
cursor: context-menu;
}
</style>
</head>
<body>

<button class="BackButtonTop"><a href="AdminAccess.php"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br>

   
<?php

include ('connection.php');
if(isset($_POST['Delete'])){
  $stud = $_POST['stud'];
  $queryDelete = "DELETE FROM concernstbl where student = $stud";
  $result = $conn->query($queryDelete);
}
if(isset($_POST['MsgSubmit'])){
    $stud = $_POST['stud'];
    $message1 = $_POST['message'];
    $querySend = "INSERT INTO adminsender (student,message,date) VALUES ($stud,'$message1',CURRENT_TIMESTAMP)";
    $result = $conn->query($querySend);
}
// if(isset($_POST['Delete'])){
//     $delID = $_POST['id'];
//     $deleteQuery = "DELETE FROM concernstbl where id = $delID";
    
// }
$sql = "Select * from concernstbl LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {  

    ?>
 <center><h1 style="color: white;">Message From Students</h1></center>
 
 <?php  while($row = $result->fetch_assoc()) { ?>

 

<div class="header">
<div class="container">
  <img src="student.png" alt="Avatar" style="width:100%;"><?php echo"<h3>$row[student]</h3>" ?>
  <div style="padding-left: 20px;"><?php echo "<p>$row[subject];</p> "?>
  </div>
  <span class="time-right"><?php echo "$row[date]; "?></span>
<form action="Student_Concerns.php" method="POST">
  <div class="container darker">
    <p>Send Message to <input type="text" name='stud' <?php echo"value=$row[student]" ?> class="studInput"></p>
  <img src="qcu9.png" alt="Avatar" class="right" style="width:100%;">
 <textarea name="message" id="" cols="70" rows="5"></textarea>
 <input type="text" name="id" <?php echo"value=$row[student]" ?>>
 <button type="submit" class="btn btn-success" name="MsgSubmit">Send</button>
 <button type="submit" class="btn btn-danger" name="Delete">Delete</button>
 </div>
 </form>
</div>

</div>




<?php
   
  }
  } else {
    echo "<center><h1 style='color:white'><bold> NO REQUEST FROM THE STUDENTS! </h1></bold></center>";
     echo "<script> alert('NO REQUEST FROM THE STUDENTS!'); 
     alert('Go Back');</script>";

  } 
  ?>



<?php
$conn->close();
?>

</body>
</html>
