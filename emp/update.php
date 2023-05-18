<?php
include "db.php";
$emp_id = $_POST["emp_id"];

$name= $_POST["name"];
$mail= $_POST["email"];





if ($_FILES['attachment1']['size'] > 0) {
    $fileType = $_FILES['attachment1']['type'];
    $file_name = basename($_FILES['attachment1']['name']);

    $fileSize = $_FILES['attachment1']['size'];
    
    if (strpos($fileType, 'image') !== false) {
      // file is an image
    $file_name = basename($_FILES['attachment1']['name']);

      $target_dir = 'upload/image/';
      $target_file = $target_dir . $file_name;
      
      if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
        die('Error uploading file.');
      }
      $attachment1 =  $target_file;
      $query = "UPDATE employee SET name='$name', email='$mail', image='$attachment1' WHERE emp_id='$emp_id'";

$result = mysqli_query($conn, $query);
mysqli_close($conn);

   
    } elseif (strpos($fileType, 'audio') !== false) {
      // file is an audio file
    $file_name = basename($_FILES['attachment1']['name']);

      $target_dir = 'upload/audio/';
      $target_file = $target_dir . $file_name;
      
      if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        die('Error uploading file.');
      }
      $attachment2 =  $target_file;
      $query = "UPDATE employee SET name='$name', email='$mail', audio='$attachment2' WHERE emp_id='$emp_id'";
      echo $query;
      exit();

      $result = mysqli_query($conn, $query);
      mysqli_close($conn);
      
      

      
      
    } elseif (strpos($fileType, 'video') !== false) {
      // file is a video file
    $file_name = basename($_FILES['attachment1']['name']);

      $target_dir = 'upload/video/';
      $target_file = $target_dir . $file_name;
      
      if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
        die('Error uploading file.');
      }
      $attachment3 =  $target_file;
      $query = "UPDATE employee SET name='$name', email='$mail', video='$attachment3' WHERE emp_id='$emp_id'";

      $result = mysqli_query($conn, $query);
      mysqli_close($conn);
    }
  }
      
     
//     } else {
//       die('Invalid file type.');
//     }
//   } else {
//     die('No file uploaded.');
//   }


// $sql = "INSERT INTO `employee`(`emp_id`,`name`,`email`,`image`,`audio`,`video`) VALUES ('$emp_id','$name','$mail','$attachment1','$attachment2','$attachment3')";
// $sql= "UPDATE employee SET emp_id='$emp_id', name='$name', email='$mail' WHERE emp_id='$emp_id'";

// $result = $conn->query($sql);

// $query = "UPDATE employee SET name='$name', email='$mail' WHERE emp_id='$emp_id'";

// $result = mysqli_query($conn, $query);
// mysqli_close($conn);
?>
