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
    $query = "UPDATE employee SET name='$name', mail='$mail' WHERE emp_id='$emp_id'";
    $result = mysqli_query($conn, $query);
  }

// Retrieve the emp_id value from the AJAX request




// Fetch the record with the specified emp_id value
$query1 = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);

// Close the database connection
// mysqli_close($conn);
?>

<!-- HTML code for the edit form -->
<form id="editForm" method="post">
<label for="name">ID:</label>
  <input type="id" name="emp_id" value="<?php echo $row["emp_id"]; ?>"><br>
  <label for="name">Name:</label>
  <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>
  <label for="email">Email:</label>
  <input type="text" name="email" value="<?php echo $row["email"]; ?>"><br>
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
        $('#result-container2').html(response);

        // Display success message and redirect to main page
        alert("Record updated successfully.");
        window.location.href = "main.php";
      },
      error: function() {
        alert("Error deleting record.");
      }
    });
  });
});
</script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
