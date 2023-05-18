<?php
include "db.php"; 
$emp_id = $_POST["emp_id"];

if (isset($_POST['updateUserSubmit'])) {
  $emp_id = $_POST["emp_id"];
  $name= $_POST["name"];
  $mail= $_POST["email"];

  // if (!preg_match("/^[a-zA-Z_]+$/", $userfirstName . $userlastName)) {
  //   echo " ";
  // } else {
    // $query = "UPDATE employee SET name='$name', email='$mail' WHERE emp_id='$emp_id'";
    // $result = mysqli_query($conn, $query);
   

  // }
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
      
}
// Retrieve the emp_id value from the AJAX request




// Fetch the record with the specified emp_id value
// $query1 = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
// $result1 = mysqli_query($conn, $query1);
// $row = mysqli_fetch_assoc($result1);


// Close the database connection
// mysqli_close($conn);



// new changed code

// if ($_FILES['attachment1']['size'] > 0) {
//   $fileType = $_FILES['attachment1']['type'];
//   $file_name = basename($_FILES['attachment1']['name']);

//   $fileSize = $_FILES['attachment1']['size'];
  
//   if (strpos($fileType, 'image') !== false) {
//     // file is an image
//   $file_name = basename($_FILES['attachment1']['name']);

//     $target_dir = 'upload/image/';
//     $target_file = $target_dir . $file_name;
//     if (file_exists($target_file)) {
//       echo "Sorry, file already exists.";
      
//     }
    
//     if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
//       die('Error uploading file.');
//     }
//     $attachment1 =  $target_file;
 
//   } elseif (strpos($fileType, 'audio') !== false) {
//     // file is an audio file
//   $file_name = 'upload/' . time(). $_SERVER['REMOTE_ADDR'] . '.mp3';

//     // $target_dir = 'upload/audio/';
//     // $target_file = $target_dir . $file_name;
    
//     if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $file_name)) {
//       die('Error uploading file.');
//     }
//     $attachment2 =  $file_name;
    
    
//   } elseif (strpos($fileType, 'video') !== false) {
//     // file is a video file
//   $file_name = basename($_FILES['attachment1']['name']);

//     $target_dir = 'upload/video/';
//     $target_file = $target_dir . $file_name;
    
//     if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
//       die('Error uploading file.');
//     }
//     $attachment3 =  $target_file;

    
   
//   } else {
//     die('Invalid file type.');
//   }
// } else {
//   die('No file uploaded.');
// }


// $query = "UPDATE employee SET name='$name', email='$mail', image='$attachment1', audio='$attachment2', video='$attachment3' WHERE emp_id='$emp_id'";
//   $result = mysqli_query($conn, $query);

// $result = $conn->query($sql);
// }     
?>
<?php 
$query1 = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);
?>
<!-- HTML code for the edit form -->
<form id="editForm" method="post" enctype='multipart/form-data'>
<label for="name">ID:</label>
  <input type="id" name="emp_id" value="<?php echo $row["emp_id"]; ?>"><br>
  <label for="name">Name:</label>
  <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>
  <label for="email">Email:</label>
  <input type="text" name="email" value="<?php echo $row["email"]; ?>"><br>
  <label for='attachment1'>Attachment:</label>
                        <input type='file' id='attachment1' name='attachment1'><p><?php echo $row["image"];?></p>
<!-- <button onclick="checkFile()">Upload</button> -->

  
  <button class='edit-btn' type="submit" name="updateUserSubmit">Update</button>

</form>


 <script>
$(document).ready(function() {
  $("#editForm").submit(function(event) {
    // Prevent the form from submitting normally
    event.preventDefault();

    // Serialize the form data into a URL-encoded string
    var formData = $(this).serialize();

    // Make an AJAX call to update the record
    $.ajax({
      url: "update.php",
      type: "POST",
      data: formData,
      success: function(response) {
        $('#result-container').html(response);

        // Display success message and redirect to main page
        alert("Record updated successfully.");
        window.location.href = "update.php";
      },
      error: function() {
        alert("Error deleting record.");
      }
    });
  });
});
</script> 

<!-- on click for upload button -->
<!-- <input type="file" id="fileInput" /> -->
<!-- <p id="message"></p> -->

<!-- JavaScript -->
<!-- <script>
function checkFile() {
  var fileExists = checkIfFileExists();

  if (fileExists) {
    var fileInput = document.getElementById("attachment1");
    var file = fileInput.files[0];
    var fileName = file.name;
    var buttonLabel = document.querySelector("button").textContent;
    document.querySelector("button").textContent = fileName + " " + buttonLabel;

    document.getElementById("message").textContent = "File already uploaded.";
  } else {
    // The file doesn't exist, so allow the user to upload a new file
    var fileInput = document.getElementById("attachment1");
    fileInput.click();

    document.getElementById("message").textContent = "";
  }
}

function checkIfFileExists() {
  $sql3 = "SELECT * FROM employee WHERE emp_id = '<? echo $emp_id?>'";
$result3 = $conn->query($sql3);
$row=$result3
}
</script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
