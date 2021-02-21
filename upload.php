<?php include 'connection.php'; 
?>


<?php 


if($_FILES['file']['name'] !=''){
    $filename = $_FILES['file']['name'];
    $test = explode(".", $_FILES['file']['name']);
    $extension = end($test);
    $name = rand(100,1000).','. $extension;
    $location = 'uploads/'.$filename;
    if(move_uploaded_file($filename, $location)){
        $sql = "INSERT INTO tbfile (name,Student, size, downloads) VALUES ('$filename','170566',$size, 0)";
        mysqli_query($conn,$sql);
    }
        
        echo '<img src="'.$location.'" height="150" width="225" class="img-thumbnail" />'; 
        $filename = $_FILES['file']['name'];
        // $sql = "INSERT INTO tbfile (name,Student, size, downloads) VALUES ($filename','170566',200, 0)";
        // if (mysqli_query($conn, $sql)) {
        //     echo "File uploaded successfully";
        // }
        // else{
        //     echo "error uploading to database";
        // }
   
}
else{
    echo "ERROR";
}

?>
