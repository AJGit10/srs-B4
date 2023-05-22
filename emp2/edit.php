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
  // if ($_FILES['attachment1']['size'] > 0) {
//     $fileType = $_FILES['attachment1']['type'];
//     $file_name = basename($_FILES['attachment1']['name']);

//     $fileSize = $_FILES['attachment1']['size'];
    
//     if (strpos($fileType, 'image') !== false) {
//       // file is an image
//       $str = basename($_FILES['attachment1']['name']);
//       $file_name= str_replace(' ','',$str);

//       $target_dir = 'upload/image/';
//       $target_file = $target_dir . $file_name;
      
//       if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
//         die('Error uploading file.');
//       }
//       $attachment1 =  $target_file;
//       $query = "UPDATE employee SET name='$name', email='$mail', image='$attachment1' WHERE emp_id='$emp_id'";

// $result = mysqli_query($conn, $query);
// mysqli_close($conn);

   
//     } elseif (strpos($fileType, 'audio') !== false) {
//       // file is an audio file
//       $str = basename($_FILES['attachment1']['name']);
//       $file_name= str_replace(' ','',$str);

//       $target_dir = 'upload/audio/';
//       $target_file = $target_dir . $file_name;
      
//       if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
//         die('Error uploading file.');
//       }
//       $attachment2 =  $target_file;
//       $query = "UPDATE employee SET name='$name', email='$mail', audio='$attachment2' WHERE emp_id='$emp_id'";

//       $result = mysqli_query($conn, $query);
//       mysqli_close($conn);
      
      
//     } elseif (strpos($fileType, 'video') !== false) {
//       // file is a video file
//       $str = basename($_FILES['attachment1']['name']);
//       $file_name= str_replace(' ','',$str);

//       $target_dir = 'upload/video/';
//       $target_file = $target_dir . $file_name;
      
//       if (!move_uploaded_file($_FILES['file']['tmp_name'], $target_file)) {
//         die('Error uploading file.');
//       }
//       $attachment3 =  $target_file;
//       $query = "UPDATE employee SET name='$name', email='$mail', video='$attachment3' WHERE emp_id='$emp_id'";

//       $result = mysqli_query($conn, $query);
//       mysqli_close($conn);
//     }
//   }
      $query = "UPDATE employee SET name='$name', email='$mail' WHERE emp_id='$emp_id'";
    $result = mysqli_query($conn, $query);
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

$file= $row['image'];
$file1= $row['audio'];
$file2= $row['video'];
 $image= str_replace( "\\", '/', $file );
 $audio= str_replace( "\\", '/', $file1 );
 $video= str_replace( "\\", '/', $file2 );


?>
<!-- HTML code for the edit form -->
 <form id="editForm" method="post" enctype='multipart/form-data'>
<label for="emp_id">ID:</label>
  <input type="number" id="emp_id" name="emp_id" value="<?php echo $row["emp_id"]; ?>"><br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>"><br>
  <label for="email">Email:</label>
  <input type="text" id="email" name="email" value="<?php echo $row["email"]; ?>"><br>
  <label for="attachment">Attachment:</label>
  <input type='file' id='attachment' name='attachment' value=""><p><?php echo "Previous File: ";echo basename( $image ). " ";echo basename( $audio ). " ";echo basename( $video );?></p> 
<!-- <button onclick="checkFile()">Upload</button> -->

  
   <button class='edit-btn' type="submit" name="submit" value="update">Update</button>

</form> 

<!-- ---------------------------------------------------------------------------->

<!-- <div class="login-form">
    
    <form action="" method="post">
        <h1>Update User</h1>
        <div class="content">
        
        <div class="input-field">
                <input type="number" placeholder="<?php echo $row["emp_id"]; ?>" class="tb" name="emp_id">
            

            <div class="input-field">
                <input type="text" placeholder="<?php echo $row["name"]; ?>" class="tb" name="name">
            </div>
            <div class="input-field">
                <input type="email" placeholder="<?php echo $row["email"];?>" class="tb" name="email">
            </div>
        </div>
        <div class="action">
            <button type="submit" name="updateUserSubmit" value='Update' class="button">Update</button><br>
            <a href="../dashboard.php" action=" "> <button class="button">Back</button></a>
        </div></form>
    
   
</div> -->
<!-- ------------------------------------------------------------------------------------------------ -->
  <script>
$(document).ready(function() {
  $("#editForm").submit(function(event) {
    // Prevent the form from submitting normally
    event.preventDefault();
// var imp_id= $('#emp_id').val();
// var name= $('#name').val();
// var email= $('#email').val();
// var attachment= $('#attachment').val();

// alert(attachment);

    // Serialize the form data into a URL-encoded string
    var formData = $(this).serialize();
    // alert(formData);
    // event.preventDefault();
    // var formData = new FormData(this);
// console.log(formData);
    // Make an AJAX call to update the record
    $.ajax({
      url: "update.php",
      type: "POST",
      
      // data: {imp_id:imp_id,name:name,email:email},
      data: formData,

      
      success: function(response) {
        $('#result-container').html(response);

        // Display success message and redirect to main page
        alert("Record updated successfully.");
        // window.location.href = "main4.php";
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


</script> -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

