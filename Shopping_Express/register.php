<?php
include($_SERVER["DOCUMENT_ROOT"].'/shopping_express/html/navbar.html');
include($_SERVER["DOCUMENT_ROOT"].'/shopping_express/include/database.php');




if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form values
   
    $firstname = $_POST['firstName'];
    $lastname = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $mobileNumber = $_POST['phoneNumber'];
    if (!preg_match("/^[a-zA-Z_]+$/", $firstname . $lastname)) {
        echo "Please Enter Valid Name";
    } else {
        $sql = "INSERT INTO user (firstName, lastName, email, password, phoneNumber) VALUES ($firstname, $lastname, $email, $password, $mobileNumber)";
    }


    // Prepare and execute the SQL query to insert the data into the database
   
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            // Close the connection
            mysqli_close($conn);
            header('Location: login.php');
            exit();
            }
            
   
?>