<?php
include 'connection.php';
if(isset($_POST['submit'])){

$user = $_POST['user'];
$pass = $_POST['pass'];

$user = stripcslashes($user);  
$pass = stripcslashes($pass);  
$user = mysqli_real_escape_string($conn, $user);  
$pass = mysqli_real_escape_string($conn, $pass); 

$sql = "select *from admin where username = '$user' and password = '$pass'";  
$result = mysqli_query($conn, $sql);  
 
while($row=mysqli_fetch_array($result)){
 

if($user === $row['username']){
if($pass === $row['password']){
  echo"<script> alert('Successfully Login'); </script>";
  header('location: AdminAccess.php');
}else{ 
  echo "Wrong Password";
 }
}else{
  echo "Wrong Username";

}
}

}
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="qcu9.png">
    <link rel="stylesheet"  href="AdminAccess.css">
    <link rel="stylesheet" href="animationAlert/animation.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<a href="index.html"><button style="position:fixed; display:inline; float: left; color: black"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
    
   <div class="wrapper">
       
       <div class="header">
        
            <h1>Admin Access</h1>
         <div class="login">
        <input type="text" placeholder="Please type UserName" name="user" required><br><br>
         <input type="password" placeholder="Please type pass" name="pass" required>
         <br>
         <div class="submit"><input type="submit" value="submit" name="submit" ></button>
         
            
   </div>
         </div>
       </div></div>




   </form>
   
 <script>
   
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
      
 </script> 
</body>
</html>