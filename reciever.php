<?php 
include 'connection.php';
 include 'fileslog.php';
session_start();

$student = $_SESSION['studno'];


$email1 = $_SESSION['email'];
$studno1 = $_SESSION['studNumber'];
$firstname1 = $_SESSION['firstname'];
$lastname1 = $_SESSION['lastname'];
$campus1 = $_SESSION['campus'];
$subject1 = $_SESSION['subject'];
$form1 = $_SESSION['form'];


// if(isset($_POST['fileSubmit'])){
//   $_SESSION['file'] = htmlentities(($_POST['file']));
//   $file = $_SESSION['file'];
//   $sql2 = "INSERT INTO formtable (email, Student_Number, firstname,lastname,campus,form,message,file)
//   VALUES ('$email1', '$studno1', '$firstname1', '$lastname1', '$campus1', '$form1','$file)";
//   echo "File Upload Successfuly";
//    mysqli_query($conn,$query);
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="qcu9.png">
    <!-- <link rel="stylesheet" href="registrationform.css">
    <link rel="stylesheet" href="php.css"> -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="RegistrationForm.css">
    <link rel="stylesheet" href="php.css">
    <link rel="stylesheet" href="animationAlert/animation.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">.
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
 
  
</head>
<body class="bg-info">
<?php 
include 'connection.php';
if(isset($_POST['submit'])){
  if(isset($_POST['id'])){
    foreach($_POST['id'] as $id){
        $query = "DELETE FROM formtable WHERE id = '$id'";
        mysqli_query($conn,$query);
    }
  }
}
// // DELETE THIS IF ERROR
// if(isset($_POST['btn-upload']))
// {    
//  $file = rand(1000,100000)."-".$_FILES['file']['name'];
//     $file_loc = $_FILES['file']['tmp_name'];
//  $file_size = $_FILES['file']['size'];
//  $file_type = $_FILES['file']['type'];
//  $folder="uploads/";
 
//  move_uploaded_file($file_loc,$folder.$file);
//  $sql1="INSERT INTO tbfile(studno,file,type,size) VALUES($student,'$file','$file_type','$file_size')";
//  mysqli_query($conn,$sql1); 
// }
// delete this IF ERROR

$sql = "Select * From formtable LIMIT 10";
$result = mysqli_query($conn,$sql);
?>
<button class="BackButtonTop"><a href="AdminAccess.php"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br></a>
  <form action="reciever.php" method="post">
  <div class="container">
  <div>
  <div>
  <center><h2>Student Request List</h2></center>





  <table class="table table-dark">
    <thead>
     <tr>
      <td colspan="5">
      
      <input type="submit" name="submit" value="Delete" class="danger btn-danger"
      onclick="return confirm('Are you sure you want to delete?')">
        </td>
     </tr>
      <tr>
        <th><input type="checkbox" id="checkAll"></th>
        <th>Email</th>
        <th>Student Number</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Campus</th>
        <th>Requesting For..</th>
        <th>message</th>
       
        
      </tr>
    </thead>
    <tbody>
    <?php

    while($row=mysqli_fetch_array($result)){

    
    ?>
   
      <tr>
        <td><input type="checkbox" class="checkItem" value="<?= $row['id']?>" name="id[]"></td>
               <td><?= $row['email']; ?></td>
        <td><?= $row['Student_Number']; ?></td>
        <td><?= $row['firstname']; ?></td>
        <td><?= $row['lastname']; ?></td>
        <td><?= $row['campus']; ?></td>
        <td><?= $row['message']; ?></td>
        <td><?= $row['form']; ?></td>
        <td>
        <form action="reciever.php" method="POST" enctype="multipart/form-data" >
        <input type='number' name="stud" <?php echo"value=$row[Student_Number]" ?> style="background:gray" readonly>
          <input type="file" name="myfile"> <br>
          <button type="submit" name="save">upload</button>

        </td>
    
  
  
 

       






        </form>
      </tr>
    <?php } ?> 
    </tbody>
  </table>
  </div>
  </div>
  </div>
  </form>


<script>
$(document).ready(function(){
$("#checkAll").click(function(){
  if($(this).is(":checked")){
    $(".checkItem").prop('checked',true);
  }
  else{
  $(".checkItem").prop('checked',false);
  }
});
});

$('.addfiles').on('click', function() { $('#fileupload').click();return false;});
</script>
</body>
</html>