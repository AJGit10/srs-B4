<?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/database.php');

?>


<head>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
    .blue-button { margin-left: 65vh;
  background-color: black;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 25px;
}

.emp {
    margin-left: 5vh;

    align-items: right;
        justify-items: center;
}

        table,
        th,
        td {
            margin-right: 10px;
             margin-top: 7vh;
            border: 1px solid;
        }
    </style>
</head>
<body>
    <h1>Employee Details</h1>
    <div class="emp">
    
    <!-- <button id="search-btn"  type="submit" name="submit">Add</button> -->
<!-- <button inpute class="blue-button">ADD EMPLOYEE </button> -->

<!-- <script>
$(document).ready(function() {
  $('#search-btn').click(function() {
    $.ajax({
      type: 'GET',
      url: 'zadd.php', // Replace with the URL of the file you want to open
      success: function(response) {
        var newWindow = window.open();
        newWindow.document.write(response);
      },
      error: function(xhr, textStatus, errorThrown) {
        console.log(xhr.responseText);
      }
    });
  });
});
</script> -->
<script>
$(document).ready(function() {
  $('#search-btn').click(function() {
    var name = prompt('Enter name:');
    var email = prompt('Enter email:');
    
    if (name !== null && email !== null) {
      $.ajax({
        type: 'POST',
        url: 'zadd.php', // Replace with your PHP script URL
        data: {
          name: name,
          email: email
        },
        success: function(response) {
          alert('User added successfully!');
        },
        error: function(xhr, textStatus, errorThrown) {
          console.log(xhr.responseText);
        }
      });
    }
  });
});
</script> 


<table class="table">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT userId,firstName,lastName,eMail FROM user";
        $result = mysqli_query($conn, $sql);
        if (!$result) { ?>
            echo "Error:";
        
        <?php } else { ?>
            <?php
            while ($row =$result->fetch_assoc()){
                echo
                "<tr>
              <td>" . $row['userId'] . "</td>

              <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
              <td>" . $row['eMail'] . "</td>" ?>
              <td><button class= "update-btn" data-id="1" button
                                                style="background-color: green;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Edit</button></td>
              <td><button class= "delete-btn" data-id="1" button
                                                style="background-color: red;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Delete</button></td>

          </tr>

            <?php } 
              
        }
      ?>
    </tbody>
</table>

                                                <button id="search-btn" type="button">ADD EMPLOYEE</button>
</div>
</body>
