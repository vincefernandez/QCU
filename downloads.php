<?php 
/*
if(!empty($_GET['file'])){
  $filename = basename($_GET['file']);
  $filepath = "hays/".$filename;

  if(!empty($filename) && file_exists($filepath)){
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$filename");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($filename));

    readfile($filename);
    exit;
  }
  else{
    echo "File not exist";
  }
}

*/


if(!empty($_GET['file'])){
  
  $filename = basename($_GET['file']);
  $filepath = "hays/".$filename;

  if(!empty($filename) && file_exists($filepath)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename=' . basename($filepath));
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize('hays/' . $file['name']));
    readfile('hays/' . $file['name']);

    readfile($filename);
    exit;
  }
  else{
    echo "File not exist";
  }
}
?>
