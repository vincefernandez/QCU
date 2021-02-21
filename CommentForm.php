<?php 
include 'connection.php';
session_start();

$student = $_SESSION['studno'];


if(isset($_POST['FormSubmitting'])){
  session_start();
  // $_SESSION['studno'] = htmlentities($_POST['studno']);
$_SESSION['email'] = htmlentities(($_POST['email']));
$_SESSION['studNumber'] = htmlentities(($_POST['studNumber'])); 
$_SESSION['firstname'] = htmlentities(($_POST['firstname']));
$_SESSION['lastname'] = htmlentities(($_POST['lastname']));
$_SESSION['subject'] = htmlentities(($_POST['subject']));
$_SESSION['campus'] = htmlentities(($_POST['campus']));
$_SESSION['form'] = htmlentities(($_POST['form']));
header('Location: CommentForm.php');
// header('Location: UserAccess.php');


$email1 = $_SESSION['email'];
$studno1 = $_SESSION['studNumber'];
$firstname1 = $_SESSION['firstname'];
$lastname1 = $_SESSION['lastname'];
$campus1 = $_SESSION['campus'];
$subject1 = $_SESSION['subject'];
$form1 = $_SESSION['form'];
include('connection.php');

$msg = "Send Successful";
$sql = "INSERT INTO formtable (email,Student_Number,firstname,lastname,campus,form,message)
VALUES ('$email1', '$studno1', '$firstname1','$lastname1','$campus1','$subject1','$form1')";
if ($conn->query($sql) === TRUE) {
  echo 'Successfully Send Request';
} else {
  echo '<script>alert("You have an Error!")</script>'; 
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
    <link rel="stylesheet" href="RegistrationForm.css">
    <link rel="stylesheet" href="animationAlert/animation.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<button class="BackButtonTop"><a href="UserAccess.php"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br></a>

<div style="text-align:center">
<h2>Requesting Form</h2>
<p>Please Fill out the form</p>
</div>
<div class="container">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="row">
      <div class="col-25">
        <label for="Email">Email Address</label>
      </div>
      <div class="col-75">
        <input type='text' id='Email' name='email' placeholder='Your Student Email...' required>
      </div>
    </div>
  <div class="row">
      <div class="col-25">
        <label for="studnumber">Student Number</label>
      </div>
      <div class="col-75">
     <input type='number' name='studNumber' placeholder='Your Student No...' required >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your First Name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your Last name.." required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="campus">Campus</label>
      </div>
      <div class="col-75">
     
        <select id="country" name="campus" required>
        <option value="" disabled selected hidden>Select Campus..</option required>
          <option value="San Bartolome">San Bartolome</option>
          <option value="Batasan">Batasan</option>
          <option value="SanFrancisco">San Francisco</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="form">Requesting For..</label>
      </div>
      <div class="col-75">
     
        <select id="country" name="form" required>
        <option value="" disabled selected hidden>Select Requirements..</option required> 
          <option value="Regform">Registration Form</option>
          <option value="Tor">Transcript of Records</option>
          <option value="StudID">Student ID</option>
        </select>
      </div>
    </div>
  
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="FormSubmitting" >
    </div>
    </div>
  </form>
</div>




</body>
</html>
