<?php
include "db.php";
// $emp_id = $_POST["emp_id"];


if (isset($_POST['upload'])) {
    $emp_id = $_POST['emp_id'];


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
    $sql = "UPDATE `employee` SET `image`='$attachment1',`audio`='$attachment2',`video`='$attachment3' WHERE emp_id=$emp_id";
    $result = $conn->query($sql);

    if ($result) {
        // echo "Record inserted successfully.";
        echo 
               "<script> alert('Record inserted successfully.');
               </script>"
               ;
    

    } else {

    }
}

// for adding employee-------------------------------
if (isset($_POST['newUserSubmit'])) {
    $emp_id = $_POST['emp_id'];

    $name = $_POST['name'];

    $mail = $_POST['email'];

    // if (!preg_match("/^[a-zA-Z_]+$/", $name)) {
    //     echo "Please Enter Valid Name";
    // } else {
    $sql = "INSERT INTO `employee`(`emp_id`,`name`,`email`) VALUES ('$emp_id','$name','$mail')";
    // }
    $result = $conn->query($sql);
}

?>

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css.css">

</head>

<body>
    <h1>Employee Details</h1>

    <div class="container">

        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD
            EMPLOYEE</button>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">SMS PORTAL</h4>
                    </div>
                    <div class="modal-body">
                        <div class="login-form">

                            <form action="" method="post">
                                <h1>Add new user</h1>
                                <div class="content">
                                    <div class="input-field">
                                        <input type="id" placeholder="ID" class="tb" name="emp_id" required>
                                    </div>

                                    <div class="input-field">

                                        <input type="text" placeholder="Name" autocomplete="nope" name="name" required>
                                    </div>

                                    <div class="input-field">
                                        <input type="Email" placeholder="Email" name="email" required>
                                    </div>

                                    <div class="input-field" action=" ">
                                        <button type="submit" name="newUserSubmit" value='Sign up'
                                            class="button">ADD</button><br>
                                        <a href="dashboard.php"><button class="button">Back</button></a>
                                        <!-- <button><input type="submit" name="submit" value="signup"></button> -->
                                    </div>
                            </form>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

    </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    <!-- HTML code to display the table -->
    <style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
    <div id="result-container2">


        <div id="result-container">
            <table id="employeeTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Attachment</th>
                        <th>Actions</th>
                        <th>Show</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Connect to the database and fetch records
                    // $conn = mysqli_connect("localhost", "username", "password", "employee");
                    $query = "SELECT * FROM employee";
                    $result = mysqli_query($conn, $query);

                    // Display records in table rows
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["emp_id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>";
                        echo "<form method='POST' enctype='multipart/form-data'>";
                        echo "<label for='emp_id'>Employee ID:</label>";
                        echo "<input type='text' id='emp_id' name='emp_id' required><br><br>";
                        echo "<label for='attachment1'>Image:</label>";
                        echo "<input type='file' id='attachment1' name='attachment1'><br><br>";

                        echo "<label for='attachment2'>Audio:</label>";
                        echo "<input type='file' id='attachment2' name='attachment2'><br><br>";


                        echo "<label for='attachment3'>Video:</label>";
                        echo "<input type='file' id='attachment3' name='attachment3'><br><br>";

                        echo "<input type='submit' name='upload' value=submit>";
                        echo "</form>";
                        echo "</td>";
                        echo "<td>";
                        echo "<button class='editBtn' data-id='" . $row["emp_id"] . "'>Update</button><br><br>";
                        echo "<button class='deleteBtn' data-id='" . $row["emp_id"] . "'>Delete</button>";
                        echo "<td>";
                        echo "<button class='showBtn' data-id='" . $row["emp_id"] . "'>Show Image</button><br><br>";
    
    echo "<div id='result-container3'>";
                        echo "<button class='showBtn2' data-audio='" . $row["audio"] . "'>Show Audio</button><br><br>";

                        echo "<button class='showBtn3' data-video='" . $row["video"] . "'>Show Video</button><br><br>";


                        echo "</td>";
                        echo "</tr>";
                    }


                    ?>
                </tbody>
</body>
</table>

<!-- JavaScript code to handle button clicks and make AJAX calls -->
<script>
    $(document).ready(function () {
        // Edit button click handler
        $(".editBtn").click(function () {
            var emp_id = $(this).data("id");
            $.ajax({
                url: "edit.php",
                type: "POST",
                data: { emp_id: emp_id },
                success: function (response) {
                    $('#result-container').html(response);
                    // Display response in a modal or redirect to edit page
                },
                error: function () {
                    alert("Error editing record.");
                }
            });
        });
    });

    // Delete button click handler
    $(".deleteBtn").click(function () {
        var emp_id = $(this).data("id");
        $.ajax({
            url: "delete.php",
            type: "POST",
            data: { emp_id: emp_id },
            success: function (response) {
                $('#result-container').html(response);
                // Display response in a modal or redirect to edit page
            },
            error: function () {
                alert("Error editing record.");
            }
        });
    });


    // for extra on click 
    $(document).ready(function () {
        // Edit button click handler
        $(".showBtn").click(function () {
            var emp_id = $(this).data("id");
            $.ajax({
                url: "imageshow.php",
                type: "POST",
                data: { emp_id: emp_id },
                success: function (response) {
                    $('#result-container3').html(response);
                    // Display response in a modal or redirect to edit page
                },
                error: function () {
                    alert("Error editing record.");
                }
            });
        });
    });






//down show buttons

    // $(document).ready(function () {
    //     // Edit button click handler
    //     $(".showBtn").click(function () {
    //         var image = $(this).data("img");
    //         alert(image);
    
           
    //     })
    // });


    // $(document).ready(function () {
    //     // Edit button click handler
    //     $(".showBtn2").click(function () {
    //         var audio = $(this).data("audio");
    //         alert(audio);
    //     })

    // }); $(document).ready(function () {
    //     // Edit button click handler
    //     $(".showBtn3").click(function () {
            
    //         var video = $(this).data("video");
    //         if( video == video){
    //             alert(video);
    //         }
    //         else{ alert('No data found')
    //         }
    //     })
    // });
</script>
<!-- <script>
    // Add a click event listener to the "Show" button
    document.getElementById('.show-image-btn').addEventListener('click', function () {
        // Send an AJAX request to the PHP script to retrieve the Base64-encoded image data
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_image.php?id=' + <?php echo $emp_id; ?>, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                // Retrieve the Base64-encoded image data from the response
                var encoded_image = xhr.responseText;

                // Set the source of the <img> tag to the Base64-encoded image data
                var img = document.createElement('image');
                img.src = 'data:/upload;base64,' + encoded_image;

                // Append the <img> tag to the document body
                document.body.appendChild(img);
            }
        };
        xhr.send();
    });
</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>