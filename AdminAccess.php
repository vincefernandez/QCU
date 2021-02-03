<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;

}
.fa-file{
  height: 30px;
  width: 30px;
}
</style>
</head>
<body>
<button class="BackButtonTop"><a href="LoginForAdmin.php"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br></a>
<div class="topnav">
  <h1>Welcome Administration</h1>
 <h1><a href="reciever.php">Requested of a Students</a></h1>
 <h1><i class="fas fa-bell" id="notif">1</i></h1>

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
</script>
</body>
</html>
