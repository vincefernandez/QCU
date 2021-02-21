<!DOCTYPE html>
<html>
<head>
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
</style>
</head>
<body>

<form action="UserAccess.php" method="post">
<button class="BackButtonTop"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br>
</form>
   
<?php

include ('connection.php');
if(isset($_POST['Delete'])){
$id = $_POST['id'];
$sql1 = "DELETE FROM announcetbl where id = $id";
$result1 = mysqli_query($conn,$sql1);
}
$sql = "Select * from announcetbl LIMIT 10";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    ?>
 <center><h1>Announcement</h1></center>
 <?php  while($row = $result->fetch_assoc()) { ?>

 
<form action="announcement_reciever.php" method="POST">


<div class="header">
<div class="container">
  <img src="qcu9.png" alt="Avatar" style="width:100%;"><?php echo"<h3>$row[subjectAnn];</h3>" ?>
  <div style="padding-left: 20px;"><?php echo "<p>$row[messageAnn];</p> "?>
  </div>
  <span class="time-right"><?php echo "$row[date1]; "?></span>
  <input type="text" name="id" <?php echo"value=$row[id]" ?>>
  <button type="submit" name="Delete" style="float: right;">Delete</button>
</div>
</div>

</form>
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
