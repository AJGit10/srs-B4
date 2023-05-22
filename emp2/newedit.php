<?php
// Assuming you have already established a database connection
include "db.php"; 
$emp_id = $_POST["emp_id"];
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $emp_id = $_POST['emp_id'];
    $name = $_POST['name'];
    $mail = $_POST['email'];

    // Validate and sanitize the input values as needed

    // Handle file upload if a new attachment is provided
    if ($_FILES['attachment']['error'] === UPLOAD_ERR_OK) {
        $attachment = $_FILES['attachment']['name'];
        // Move the uploaded file to a suitable location on the server
        move_uploaded_file($_FILES['attachment']['tmp_name'], 'upload/image/' . $attachment);
    }

    // Prepare and execute the SQL update statement
    
    if (isset($attachment)) {
    $sql = "UPDATE employee SET name = '$name', email = '$mail',
    image = '$attachment' WHERE emp_id='$emp_id'";
    
    
    
    
    if (mysqli_query($conn, $sql)) {
        // Update successful
        echo "Employee record updated successfully.";
    } else {
        // Update failed
        echo "Error updating employee record: " . mysqli_error($conn);
    }
}
}

// Retrieve the employee record to pre-fill the form
$query1 = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);

// Close the database connection
// mysqli_close($conn);
?>

<!-- HTML form to display and update the employee details -->
<form method="POST" enctype="multipart/form-data">
    <input type="id" name="id" value="<?php echo $row["emp_id"]; ?>"><br>
    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row["name"]; ?>"><br>
    <label>Email:</label>
    <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br>
    <label>Attachment:</label>
    <input type="file" name="attachment">
    <button type="submit">Update</button>
</form>
