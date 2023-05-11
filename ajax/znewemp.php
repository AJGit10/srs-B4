<?php
include "database.php";

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
  <link rel="stylesheet" href="zcss.css">

</head>

<style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
</head>
<body>


<body>


  <h1>Employee Details</h1>
 
  <div class="emp">

    <!-- <button id="search-btn" type="button">ADD EMPLOYEE</button> -->
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
              <form action="" method="post">
                <div class="login-form">
                  <h1>Add New User</h1>
                  <div class="content">
                    <div class="input-field">
                      <input type="text" placeholder="First name" class="tb" name="firstName" required>


                      <br>
                      <input type="text" placeholder="Last name" class="tb" name="lastName" required>



                    </div>
                    <div class="input-field">

                      <input type="email" placeholder="Email" autocomplete="nope" name="eMail" required>
                    </div>

                    <div class="input-field">
                      <input type="password" placeholder="Password" autocomplete="new-password" name="password"
                        required>
                    </div>
                    <div class="input-field">
                      <input type="text" placeholder="Apartment Id" class="tb" name="aptId" required>
                    </div>
                    <div class="input-field">
                      <input type="text" placeholder="roleId" class="tb" name="rollId" required>
                    </div>
                  </div>
                  <div class="input-field" action=" ">
                    <button type="submit" name="newUserSubmit" value='Sign up' class="button">ADD</button><br>
                    <a href="dashboard.php"><button class="button">Back</button></a>
                    <!-- <button><input type="submit" name="submit" value="signup"></button> -->
                  </div>
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
      <div id="result-container">
  <!-- Employee records will be displayed here -->
</div>



<table class="table">
    <thead>
        <tr>
            <th>Sr.No</th>
            <th>Employee Name</th>
            <th>Email</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT emp_id,name,eMail FROM employee";
        $result = mysqli_query($conn, $sql);
        if (!$result) { ?>
            echo "Error:";
        
        <?php } else { ?>
            <?php
            while ($row =$result->fetch_assoc()){
                echo
                "<tr>
              <td>" . $row['emp_id'] . "</td>

              <td>" . $row['name']. "</td>
              <td>" . $row['eMail'] . "</td>" 
              ?>
              <td><button type="button" id="btn-search"  button
                                                style="background-color: green;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Update</button></td>
        <td><button type="button" id="search-buttons"  button style="background-color: red;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">DELETE</button></td>

          </tr>
<input type="hidden" id="imp_id" value="<?php echo $row['emp_id'];?>">
            <?php } 
              
        }
      ?>
    </tbody>
</table>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $('#search-buttons').click(function() {
    var employeeid = $('#imp_id').val(); // Get the employee name entered in the search input field
    
    
    $.ajax({
      url: 'zdelete.php', // URL of the PHP script that fetches employee records
      type: 'POST',
      data: {'employeeid': employeeid},
      success: function(response) {
        $('#result-container').html(response); // Display the fetched employee records in the result container
      },
      error: function(xhr, status, error) {
        console.log('Error:', error);
      }
    });
  });
});

$(document).ready(function() {
  $('#btn-search').click(function() {
    var employeeid = $('#imp_id').val(); // Get the employee name entered in the search input field
    
    
    $.ajax({
      url: 'zupdate.php', // URL of the PHP script that fetches employee records
      type: 'POST',
      data: {'employeeid': employeeid},
      success: function(response) {
        $('#result-container').html(response); // Display the fetched employee records in the result container
      },
      error: function(xhr, status, error) {
        console.log('Error:', error);
      }
    });
  });
});
</script>