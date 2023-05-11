<?php
include "database.php";

// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/user.php');
if($_POST['employeeid']!=""){
  $emp_id = $_POST['employeeid'];

  $sql = "SELECT emp_id,name,eMail FROM employee WHERE emp_id='".$emp_id."'" ;

  $result = mysqli_query($conn, $sql);

  if (!$result) { ?>
      echo "Error:";
  
  <?php } else { ?>
      <?php
      while ($row =$result->fetch_assoc()){
          echo "";?>

<!DOCTYPE html>
<html lang="en">

<head>                                                                                                                     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
   
</head>

<body>

    <div class="login-form">
  
        <form action="#" method="post">
            <h1>Update User</h1>
            <div class="content">
            
                <div class="input-field">
                    <input type="number" value="user ID" class="tb" name="emp_id">
                </div>
                <div class="input-field">
                    <input type="text" placeholder="<?php echo $row['name'] ?>" class="tb" name="name">
                </div>
                <div class="input-field">
                    <input type="email" placeholder="<?php echo $row['eMail'] ?>" class="tb" name="eMail">
                </div>
               
            </div>
            <div class="action">
                    <button type="button"  onclick="update_emp(<?php echo  $row['emp_id'];?>);" name="UserUpdateSubmit" value='Update' class="button">
                      <p>
                        <font color=green>Yes Update</font>
                      </p>
                    </button>
            <div class="action"> <a href="#"><button class="button">Back</button></a></div>
        </form>
        
    </div>
    <?php } 
        
      }}
      ?>
</body>

</html>
<?php
            
  
            if (isset($_POST['update_emp_id'])) {
              $emp_id1 = $_POST['update_emp_id'];
            
             echo $sql1= "DELETE FROM `employee` WHERE emp_id=$emp_id1";
              $result1 = mysqli_query($conn,$sql1);
             
            
            }
            ?>
                      <script>
                        function delete_emp(emp_id){
                          $.ajax({
                url: 'zdelete.php', // URL of the PHP script that fetches employee records
                type: 'POST',
                data: {'delete_emp_id': emp_id},
                success: function(response) {
                  $('#result-container').html(response); // Display the fetched employee records in the result container
                location.reload();
                }
              });
            }
          
          
                      </script>