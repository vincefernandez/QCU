<!DOCTYPE html>
<html lang="en">
<head>
  <title>Quezon City University</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="qcu9.png">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<style>
  body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("qcubg.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 80%;

}
</style>
</head>

<body class="bg">

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">
  <a href="loginforadmin.php"><img src="qcu9.png" alt="Logo" style="width:40px;"></a>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="reciever.php">Request of Student  .<i class="fas fa-bell" id="notif" style="color: aqua;"></i></a>
       
      </li>
      <li class="nav-item">
        <a class="nav-link" href="announcement.php">Make an Announcement  .<i class="fas fa-bell" id="Announce-Notif" style="color: aqua;"></i></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Student_Concerns.php">Message From Students<i class="fas fa-bell" id="request-Notif" style="color: aqua;"></i></a>
      </li> 
      <li class="nav-item">
       
          
      <a class="nav-link" href="announcement_reciever.php">The Announcement<i class="fas fa-bell" id="request-Notif1" style="color: aqua;"></i></a>
        </ul>
      </li> 
     
    </ul>
  </div>  
</nav>
<br>

<div class="container">
  <center><h3>Quezon City University</h3></center>
  <div>
  <img src="download.jpg" alt="Paris" class="center">
  </div>

  
</div>
<script>
function loadDoc() {
    setInterval(function(){
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("notif").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "data.php", true);
  xhttp.send();
    },1000);
  
}
loadDoc();
function AnotherLoadDoc() {
    setInterval(function(){
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("Announce-Notif").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "AnnounceData.php", true);
  xhttp.send();
    },1000);
  
}
AnotherLoadDoc();
function Request() {
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
Request();

function AnnounceRecievable() {
    setInterval(function(){
      var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("request-Notif1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "AnnounceData.php", true);
  xhttp.send();
    },1000);
  
}
AnnounceRecievable();
</script>
</body>
</html>


