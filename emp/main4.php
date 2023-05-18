<?php
include "db.php";
$emp_id = $_POST["emp_id"];


// for adding employee-------------------------------
if (isset($_POST['newUserSubmit'])) {
    $emp_id = $_POST['emp_id'];

    $name = $_POST['name'];

    $mail = $_POST['email'];
    // $attachment1 = $_POST['image']; 
    // $attachment2 = $_POST['audio']; 
    // $attachment3 = $_POST['video']; 




    if ($_FILES['attachment1']['size'] > 0) {
        $fileType = $_FILES['attachment1']['type'];
        $file_name = basename($_FILES['attachment1']['name']);

        $fileSize = $_FILES['attachment1']['size'];

        if (strpos($fileType, 'image') !== false) {
            // file is an image
            $str = basename($_FILES['attachment1']['name']);
            $file_name= str_replace(' ','',$str);

            $target_dir = 'upload/image/';
            $target_file = $target_dir . $file_name;
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                
              }

            if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
                die('Error uploading file.');
            }
            $attachment1 = $target_file;

        } elseif (strpos($fileType, 'audio') !== false) {
            // file is an audio file
            $str = basename($_FILES['attachment1']['name']);

          $file_name= str_replace(' ','',$str);

        
            $target_dir = 'upload/audio/';
            $target_file = $target_dir . $file_name;
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                
              }
            
            if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $file_name)) {
              die('Error uploading file.');
            }
            $attachment2 =  $file_name;
            


        } elseif (strpos($fileType, 'video') !== false) {
            // file is a video file
            $file_name = basename($_FILES['attachment1']['name']);

            $target_dir = 'upload/video/';
            $target_file = $target_dir . $file_name;

            if (!move_uploaded_file($_FILES['attachment1']['tmp_name'], $target_file)) {
                die('Error uploading file.');
            }
            $attachment3 = $target_file;



        } else {
            die('Invalid file type.');
        }
    } else {
        die('No file uploaded.');
    }


    $sql = "INSERT INTO `employee`(`emp_id`,`name`,`email`,`image`,`audio`,`video`) VALUES ('$emp_id','$name','$mail','$attachment1','$attachment2','$attachment3')";

    $result = mysqli_query($conn, $sql);
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

                            <form action="" method="post" enctype='multipart/form-data'>
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
                                    <div class="input-field">


                                        <label for='attachment1'>Attachment:</label>
                                        <input type='file' id='attachment1' name='attachment1'>


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
    <style>
        #display-image {
            width: 100%;
            justify-content: center;
            padding: 5px;
            margin: 15px;
        }

        img {
            margin: 5px;
            width: 350px;
            height: 250px;
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
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Connect to the database and fetch records
                    
                    $query = "SELECT * FROM employee";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row["emp_id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo "<td>" . $row["email"] . "</td>";
                        echo "<td>";
                        
                         if ($row["image"]) {
                            echo "<div id='display-image'><img src=" . $row["image"] . ">";
                        }  if ($row["audio"]) {
                            echo "<audio controls autoplay><source src=" . $row["audio"] . " type='audio/mpeg'></audio>";
                        }  if ($row["video"]) {
                            echo "<video width='250' height='150' controls><source src=" . $row["video"] . " type='video/mp4'></video>";
                            
                        } 
                        echo "</td>";


                        echo "<td>";
                        echo "<button class='editBtn' data-id='" . $row["emp_id"] . "'>Update</button>";
                        echo "<button class='deleteBtn' data-id='" . $row["emp_id"] . "'>Delete</button>";
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










</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>