<?php
include "db.php";
$emp_id = $_POST["emp_id"];

$name= $_POST["name"];
$mail= $_POST["email"];

$query = "UPDATE employee SET name='$name', email='$mail' WHERE emp_id='$emp_id'";

$result = mysqli_query($conn, $query);
mysqli_close($conn);

?>
