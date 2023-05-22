<?php
include "db.php"; 
if (isset($_POST['newUserSubmit'])) {
  $emp_id= $_POST['emp_id'];

  $name = $_POST['name'];

  $mail = $_POST['email'];
  
  // if (!preg_match("/^[a-zA-Z_]+$/", $name)) {
  //     echo "Please Enter Valid Name";
  // } else {
      $sql= "INSERT INTO `employee`(`emp_id`,`name`,`email`) VALUES ('$emp_id','$name','$mail')";
  // }
  $result =$conn->query($sql);
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
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">ADD EMPLOYEE</button>

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
        <button type="submit" name="newUserSubmit" value='Sign up' class="button">ADD</button><br>
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
        echo "<td><input type='file' name='attachment'></td>";
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
$(document).ready(function() {
  // Edit button click handler
  $(".editBtn").click(function() {
    var emp_id = $(this).data("id");
    $.ajax({
      url: "edit.php",
      type: "POST",
      data: { emp_id: emp_id },
      success: function(response) {
        $('#result-container').html(response);
        // Display response in a modal or redirect to edit page
      },
      error: function() {
        alert("Error editing record.");
      }
    });
  });

  // Delete button click handler
  $(".deleteBtn").click(function() {
    var emp_id = $(this).data("id");
    $.ajax({
      url: "delete.php",
      type: "POST",
      data: { emp_id: emp_id },
      success: function(response) {
        $('#result-container').html(response);
        // Display response in a modal or redirect to edit page
      },
      error: function() {
        alert("Error editing record.");
      }
    });
  });
//     $.ajax({
//       url: "delete.php",
//       type: "POST",
//       data: { emp_id: emp_id },
//       success: function(response) {
//         $('#result-container').html(response);

//         // Remove table row for the deleted record
//         // $("button[data-id='" + emp_id + "']").closest("tr").remove();
//       },
//       error: function() {
//         alert("Error deleting record.");
//       }
//     });
//   });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
