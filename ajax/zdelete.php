<?php

include "database.php";


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
          <div class="login-form">
     
            <form action="" method="post">
              <h1>Delete User</h1>
              <div class="content">

              <div class="input-field">
              <input type="number" placeholder=" emp id" class="tb" name="userId">
              <div class="input-field">
              <div class="input-field">
                <input type="text" placeholder="<?php echo $row['name'] ?>" class="tb" name="Name">
              </div>
              <div class="input-field">
                <input type="text" placeholder="<?php echo $row['eMail'] ?>" class="tb" name="email">
              </div>
                    <h2>
                      <?php echo "Are You Sure!!!" ?>
                    </h2>
                  </div>
                  <div class="action">
                    <button type="button"  onclick="delete_emp(<?php echo  $row['emp_id'];?>);" name="UserDeleteSubmit" value='Delete' class="button">
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
      <?php } 
        
      }}
      ?>


            <?php
            
  
  if (isset($_POST['delete_emp_id'])) {
    $emp_id1 = $_POST['delete_emp_id'];
  
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