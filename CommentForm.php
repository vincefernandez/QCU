<?php  session_start() 

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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">.
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <br>
<a href="UserAccess.php"><button class="BackButtonTop"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br>
<div style="text-align:center">
<h2>Registration Form</h2>
<p>Please Fill out the form</p>
</div>
<div class="container">
  <form action="/action_page.php">
  <div class="row">
      <div class="col-25">
        <label for="Email">Email Address</label>
      </div>
      <div class="col-75">
        <input type="text" id="Email" name="Email" placeholder="Your Student No...">
      </div>
    </div>
  <div class="row">
      <div class="col-25">
        <label for="studnumber">Student Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="studnumber" name="studNumber" placeholder="Your Student No...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="campus">Campus</label>
      </div>
      <div class="col-75">
     
        <select id="country" name="country">
        <option value="" disabled selected hidden>Select Campus..</option>
          <option value="australia">San Bartolome</option>
          <option value="canada">Batasan</option>
          <option value="usa">San Francisco</option>
        </select>
      </div>
      <div class="col-75">
     
        <select id="country" name="country">
        <option value="" disabled selected hidden> Requesting For .....</option>
          <option value="australia">Grade Slip</option>
          <option value="canada">Registration Form</option>
          <option value="usa">Transcript of Records</option>
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
      <input type="submit" value="Submit">
    </div>
  </form>
</div>

</body>
</html>
