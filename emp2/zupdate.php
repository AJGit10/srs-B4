<?php
include "db.php";
// $emp_id = $_POST["emp_id"];


if (isset($_POST['submit'])) {
    // Get the form data
$emp_id = $_POST["id"];

    $name = $_POST['name'];
    $mail = $_POST['email'];

    // File upload handling
    $file = $_FILES['file'];
    $file_name = $file['name'];
    $fileType = $file['type'];
    $fileSize = $file['size'];
    $fileTmpName = $file['tmp_name'];


       if (strpos($fileType, 'image') !== false) {
      // file is an image
      $str = basename($_FILES['file']['name']);
      $file_name= str_replace(' ','',$str);

      $target_dir = 'upload/image/';
      $target_file = $target_dir . $file_name;
      
      if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        die('Error uploading file.');
      }
      $attachment1 =  $target_file;
      $query = "UPDATE employee SET name='$name', email='$mail', image='$attachment1' WHERE emp_id='$emp_id'";
      echo"ajay";

$result = mysqli_query($conn, $query);
mysqli_close($conn);

   
    } elseif (strpos($fileType, 'audio') !== false) {
      // file is an audio file
      $str = basename($_FILES['file']['name']);
      $file_name= str_replace(' ','',$str);

      $target_dir = 'upload/audio/';
      $target_file = $target_dir . $file_name;
      
      if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        die('Error uploading file.');
      }
      $attachment2 =  $target_file;
      $query = "UPDATE employee SET name='$name', email='$mail', audio='$attachment2' WHERE emp_id='$emp_id'";
      
     

      $result = mysqli_query($conn, $query);
      mysqli_close($conn);
      
      

      
      
    } elseif (strpos($fileType, 'video') !== false) {
      // file is a video file
      $str = basename($_FILES['file']['name']);
      $file_name= str_replace(' ','',$str);

      $target_dir = 'upload/video/';
      $target_file = $target_dir . $file_name;
      
      if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        die('Error uploading file.');
      }
      $attachment3 =  $target_file;
      $query = "UPDATE employee SET name='$name', email='$mail', video='$attachment3' WHERE emp_id='$emp_id'";
      echo "ajay3";

      $result = mysqli_query($conn, $query);
      mysqli_close($conn);
    }
  }
      

?>
