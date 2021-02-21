

    <?php 
    
    include 'connection.php';
    
    if(isset($_POST['save'])){
        $studno1 = $row['Student_Number'];
        $filename = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "hays/".$filename;
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $path_filename_ext = $path.".".$ext;
        $allowed = array('gif','txt','png', 'jpg','pdf','docsx','DOCX','docx','PNG');
        if (in_array($ext, $allowed)) {
            if ($_FILES["file"]["size"] < 500000) {
                
                $query = "INSERT INTO fileupload(student,download,date) values ($studno1,'$filename',CURRENT_TIMESTAMP)";
                move_uploaded_file($fileTmpName,$path);
                if(mysqli_query($conn,$query)){
                    echo "Success";
                }
            }else{
                echo "Sorry, your file is too large.";
              }
        }else{
            echo "File does not allowed";
        }
      
    }
    ?>

    <!-- <form action="sample.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <button type="submit" name="submit">Upload</button>
    </form> -->
