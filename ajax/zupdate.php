<?php
include "database.php";
        $sql = "SELECT emp_id,name,eMail FROM employee";
        $result = mysqli_query($conn, $sql);
        if (!$result) { ?>
            echo "Error:";
        
        <?php } else { ?>
            <?php
            while ($row =$result->fetch_assoc()){
                echo "";?>
                <div class="login-form">

              <form action="" method="post">
                <h1>Update User</h1>
                <div class="content">

                  <div class="input-field">
                    <input type="number" placeholder="<?php echo $row['emp_id'] ?>" class="tb" name="userId">
                    <div class="input-field">
                      <input type="text" placeholder="<?php echo $row['name'] ?>" class="tb" name="name">
                    </div>
                   

                    <div class="input-field">
                      <input type="email" placeholder="<?php echo $row['eMail'] ?>" class="tb" name="eMail">
                    </div>
                    
                  </div>
                  <div class="action">
                    <button type="submit" name="updateUserSubmit" value='Update' class="button">Update</button><br>
                    <a href="../dashboard.php" action=" "> <button class="button">Back</button></a>
                  </div>
              </form>


            </div>
            <?php } 
              
            }