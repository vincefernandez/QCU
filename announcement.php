<?php 
include 'connection.php';
session_start();

$student = $_SESSION['studno'];


if(isset($_POST['FormSubmitting'])){
  session_start();
  // $_SESSION['studno'] = htmlentities($_POST['studno']);


$_SESSION['name'] = htmlentities(($_POST['name']));

$_SESSION['subject'] = htmlentities(($_POST['subject']));
$_SESSION['body'] = htmlentities(($_POST['body']));
header('Location: announcement.php');
// header('Location: UserAccess.php');




$body1 = $_SESSION['body'];
$subject1 = $_SESSION['subject'];

$msg = "Send Successful";
$sql = "INSERT INTO announcetbl (subjectAnn,messageAnn,date1)
VALUES ('$subject1','$body1',CURRENT_TIMESTAMP)";
if ($conn->query($sql) === TRUE) {
  echo "Send Successfully";
} else {
  echo "Error";
}

}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="qcu9.png">
    
    <link rel="stylesheet" href="animationAlert/animation.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<style>
    body {
    font-family: 'Raleway', sans-serif;
    background-image: url("background.png");
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    overflow: hidden;
}
    /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}


/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 60%;
  padding-top: 20px;
  margin-top: 60px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
#headershit{
    position: fixed;
     top: 0px;
     margin-right: 20%;
     width: 100%;
     font-size: 20px;
    font-weight: bolder;
    color: white;
     box-shadow: 2px 18px 70px 0px #9D9D9D;
  }
  #headddd{
    display: flex;
    
  justify-content: space-between;
  align-items: center;
  padding-right: 10px;
  
  }
</style>
<body>

<div id="headershit">
      <div id="headddd">
        <a href="#header"> <img class="cursor" src="qcu9.png" height = "50px"></a>

        <span >Quezon City University</span>
      </div>
    </div>

    <a href="AdminAccess.php"><button style="position:fixed; display:inline; float: left; color: black"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a>
<br>

<div class="container">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
 
 <center><h2>Announcement</h2></center>
  
    <div class="row">
      <div class="col-25">
        <label for="lname">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="subject" placeholder="Subject" required>
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="subject">Body</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="body" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="FormSubmitting" >
    </div>
    </div>
  </form>
</div>
<script>
    $('.addfiles').on('click', function() { $('#fileupload').click();return false;});
</script>   
</body>
</html>