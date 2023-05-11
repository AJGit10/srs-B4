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
                    <h1>Delete User</h1>
                    <div class="content">
 
                    <div class="input-field">
                    <input type="number" placeholder="<?php echo $row['emp_id'] ?>" class="tb" name="userId">
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
            <?php } 
              
            }