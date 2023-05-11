<?php
include "db.php";
$emp_id = $_POST["emp_id"];

// // Delete the record with the specified emp_id value
$query = "DELETE FROM employee WHERE emp_id = '$emp_id'";
$result = mysqli_query($conn, $query);

mysqli_close($conn);

?>