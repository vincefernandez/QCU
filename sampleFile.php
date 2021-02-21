<?php  include 'upload.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container" align="center">
    <h2 align="center"> Upload File</h2>
    <label>Select File</label>
    <input type="file" name="file" id="file" />
    <br/>
    <span id="uploaded_image"></span>
    </div>
</body>
</html>

<script>
$(document).ready(function(){
$(document).on('change','#file', function(){
    let property = document.getElementById("file").files[0];
    var image_name = property.name;
    var image_extension = image_name.split(".").pop().toLowerCase();
    if(jQuery.inArray(image_extension, ['gif','png','jpg','jpeg','PNG','pdf','Docs']) == -1){
        alert("Invalid Image File");
    }
    var image_size = property.size;
    if(image_size > 2000000){
        alert("Files is too big");
    }
    else{
         var form_data = new FormData();
         form_data.append("file",property);
         $.ajax({
             url: "upload.php",
             method:"POST",
             data:form_data,
             contentType:false,
             cache:false,
             processData:false,
             beforeSend:function(){
                 $('#uploaded_image').html("<label class'text-success'>Image Uploading ....</label>");
             },
             success:function(data){
                 $('#uploaded_image').html(data);
             }
         })
    }
});
});
</script>