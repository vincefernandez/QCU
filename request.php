<?php 
include 'connection.php';
include 'fileslog.php';

session_start();

$student = $_SESSION['studno'];

$student = $_SESSION['studno'];
$email1 = $_SESSION['email'];
$studno1 = $_SESSION['studNumber'];
$firstname1 = $_SESSION['firstname'];
$lastname1 = $_SESSION['lastname'];
$campus1 = $_SESSION['campus'];
$subject1 = $_SESSION['subject'];
$form1 = $_SESSION['form'];


if(isset($_POST['Fileupload'])){
  $title =  $_POST['title'];
     $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
 
     $tname = $_FILES["file"]["tmp_name"];
     $uploads_dir = 'uploads';
     move_uploaded_file($tname,$uploads_dir.'/'.$pname);
 
     $InsertFile = "INSERT INTO haha(title,File) 
     Values ('$title',$pname')";
     if(mysqli_query($conn,$InsertFile)){
         echo "File Uploaded Successfully!";
     }
     else{
         echo "ERROR";
     }
 }

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
        $query = "DELETE FROM tbfile WHERE id = '$id'";
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

$sql = "Select * From tbfile where Student = $student";
$result = mysqli_query($conn,$sql);
?>
<button class="BackButtonTop"><a href="UserAccess.php"><span class="glyphicon glyphicon-hand-left"> Go Back!</span></button></a><br><br></a>
  <form action="request.php" method="post">
  <div class="container">
  <div>
  <div>
  <center><h2>Student's Reciever File</h2></center>

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
   
       <th>Student Number</th>
       <th>File Name</th>
       <th>File Size</th>
       <th>Action</th>
        
      </tr>
    </thead>
    <tbody>
   
<?php foreach ($files as $file): ?>
   
  <?php while($row=mysqli_fetch_array($result)){

    
    ?>

 
  </p>
 
      <tr>
        <td><input type="checkbox" class="checkItem" value="<?= $row['id']?>" name="id[]"></td>
               
               <td><?= $row['Student']; ?></td>
        <td><?= $row['name']; ?></td>
        <td><?= $row['size']; ?></td>
      
      
        <td><a href="downloads.php?file_id=<?php echo $file['id'] ?>">Download File</a></td>







      </tr>
      
    <?php } ?> 
    <?php endforeach;?>
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
</script>
</body>
</html>