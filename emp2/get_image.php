<?php

include "db.php";
$emp_id = $_POST["emp_id"];

// Retrieve the image data from the database
$query = "SELECT image FROM employee WHERE id = $emp_id";
$result = mysqli_query($conn, $query);

// If the query was successful, retrieve the image data and encode it in Base64 format
if ($result) {
    $row = mysqli_fetch_assoc($result);
    $image_data = $row['image'];
    $encoded_image = base64_encode($image_data);

    // Echo the Base64-encoded image data
    echo $encoded_image;
} else {
    // If there was an error, show an error message
    echo "Error: " . mysqli_error($conn);
}
?>