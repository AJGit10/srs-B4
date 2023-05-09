<?php
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/includes/config.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');

include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/includes/database.php');


if (isset($_POST['newUserSubmit'])) {
  $firstName = $_POST['firstName'];

  $lastName = $_POST['lastName'];

  $eMail = $_POST['eMail'];
  $password = $_POST['password'];
  $AptId = $_POST['aptId'];
  $rollId = $_POST['rollId'];
  if (!preg_match("/^[a-zA-Z_]+$/", $firstName . $lastName)) {
    echo "Please Enter Valid Name";
  } else {
    $sql = "INSERT INTO `user`(`firstName`,`lastName`,`eMail`,`password`,`aptId`,`rollId`) VALUES ('$firstName','$lastName','$eMail','$password','$AptId','$rollId')";
  }
  $result = $conn->query($sql);
}


?>
<!DOCTYPE html>
<html lang="en">

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



  <script>
    $(document).ready(function () {
      $('#search-btn').click(function () {
        $.ajax({
          type: 'GET',
          url: 'zadd.php', // Replace with the URL of the file you want to open
          success: function (response) {
            var newWindow = window.open();
            newWindow.document.write(response);
          },
          error: function (xhr, textStatus, errorThrown) {
            console.log(xhr.responseText);
          }
        });
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
        while ($row = $result->fetch_assoc()) {
          echo
            "<tr>
              <td>" . $row['userId'] . "</td>

              <td>" . $row['firstName'] . " " . $row['lastName'] . "</td>
              <td>" . $row['eMail'] . "</td>" ?>
          <td> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ajModal" button
              style="background-color: green;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">EDIT</button>
          </td>
          <td> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#aj2Modal" button
              style="background-color: red;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">DELETE</button>
          </td>

          </tr>

        <?php }

      }
      ?>
    </tbody>
  </table>
  <?php
  if (isset($_POST['updateUserSubmit'])) {
    $userId = $_POST['userId'];
    $userfirstName = $_POST['firstName'];
    $userlastName = $_POST['lastName'];
    $userEmail = $_POST['eMail'];
    $userAptId = $_POST['aptId'];

    if (!preg_match("/^[a-zA-Z_]+$/", $userfirstName . $userlastName)) {
      echo " ";
    } else {
      $user->updateUserInfo($userId, $userfirstName, $userlastName, $userEmail, $userAptId);
    }
  }
  ?>
  <div class="container">

    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="ajModal" role="dialog">
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
                <h1>Update User</h1>
                <div class="content">

                  <div class="input-field">
                    <input type="number" placeholder="User ID" class="tb" name="userId">
                    <div class="input-field">
                      <input type="text" placeholder="First name" class="tb" name="firstName">
                    </div>
                    <div class="input-field">
                      <input type="text" placeholder="Last name" class="tb" name="lastName">
                    </div>

                    <div class="input-field">
                      <input type="email" placeholder="Email" class="tb" name="eMail">
                    </div>
                    <div class="input-field">
                      <input type="number" placeholder="Apartment Id" class="tb" name="aptId">
                    </div>
                  </div>
                  <div class="action">
                    <button type="submit" name="updateUserSubmit" value='Update' class="button">Update</button><br>
                    <a href="../dashboard.php" action=" "> <button class="button">Back</button></a>
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

  <!--222222222222222222222222222222222222222222222222222222222 second delete button  -->
  <?php
  
if (isset($_POST['UserDeleteSubmit'])) {
  $userId = $_POST['userId'];

  $user->deleteUser($userId);

}
?>
  <div class="container">

    <!-- Trigger the modal with a button -->

    <!-- Modal -->
    <div class="modal fade" id="aj2Modal" role="dialog">
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
                    <h1>Delete User</h1>
                    <div class="content">
 
                    <div class="input-field">
                    <input type="number" placeholder="User ID" class="tb" name="userId">
                    <div class="input-field">
                          <h2>
                            <?php echo "Are You Sure!!!" ?>
                          </h2>
                        </div>
                        <div class="action">
                          <button type="submit" name="UserDeleteSubmit" value='Delete' class="button">
                            <p>
                              <font color=green>Yes Delete</font>
                            </p>
                          </button>

                        </div>
                        <div class="action"> <a href="../dashboard.php"><button class="button">
                              <p>
                                <font color=red>Cancel</font>
                              </p>
                            </button></a></div>
                  </form>
                      
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>

        </div>
      </div>

</body>