<?php
include "db.php"; // Include your database connection script

if (isset($_POST['newUserSubmit'])) {
  $emp_id = $_POST['emp_id'];
  $name = $_POST['name'];
  $mail = $_POST['email'];
  
  // Handle file upload
  if ($_FILES['attachment1']['size'] > 0) {
    $target_dir = 'upload/';
    $file_name = basename($_FILES['attachment1']['name']);
    $target_file = $target_dir . $file_name;
    if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
      die('Error uploading file.');
    }
    $attachment1 = $target_file; // Save file path to variable
  } else {
    $attachment1 = null; // If no file uploaded, set to null
  }


  if ($_FILES['attachment2']['size'] > 0) {
    $target_dir2 = 'upload/';
    $file_name2 = basename($_FILES['attachment2']['name']);
    $target_file2 = $target_dir2 . $file_name2;
    if (!move_uploaded_file($_FILES['attachment2']['tmp_name'], $target_file2)) {
      die('Error uploading file.');
    }
    $attachment2 = $target_file2; // Save file path to variable
  } else {
    $attachment2 = null; // If no file uploaded, set to null
  }



  if ($_FILES['attachment3']['size'] > 0) {
    $target_dir3 = 'upload/';
    $file_name3 = basename($_FILES['attachment3']['name']);
    $target_file3 = $target_dir3 . $file_name3;
    if (!move_uploaded_file($_FILES['attachment3']['tmp_name'], $target_file3)) {
      die('Error uploading file.');
    }
    $attachment3 = $target_file3; // Save file path to variable
  } else {
    $attachment3 = null; // If no file uploaded, set to null
  }




  // Insert record into database
  $sql = "INSERT INTO `employee` (`emp_id`, `name`, `email`, `image`,`audio`,`video`) VALUES ('$emp_id', '$name', '$mail', '$attachment1', '$attachment2', '$attachment3')";
  $result = $conn->query($sql);
  
  if ($result) {
    echo "Record inserted successfully.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
<html>
  <body>
    <form method="POST" enctype="multipart/form-data">
      <label for="emp_id">Employee ID:</label>
      <input type="text" id="emp_id" name="emp_id" required><br><br>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="attachment1">Attachment 1:</label>
      <input type="file" id="attachment1" name="attachment1"><br><br>

      <label for="attachment2">Attachment 1:</label>
      <input type="file" id="attachment2" name="attachment2"><br><br>


      <label for="attachment3">Attachment 1:</label>
      <input type="file" id="attachment3" name="attachment3"><br><br>

      <input type="submit" name="newUserSubmit" value="Submit">
    </form>
  </body>
</html>
