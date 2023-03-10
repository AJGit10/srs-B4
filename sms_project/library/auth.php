

<?php
class Auth {
   public $isloggedIn = false;
   function login($userName,$userPassword)
   {

   global $conn;

   

       $sql =  "SELECT * FROM user WHERE eMail = '$userName' and  passWord = '$userPassword' ";
       $result = $conn->query($sql);
      // print_r($result);exit;

        if ($result){
          $rowCount = mysqli_num_rows($result);

          if($rowCount==1){ 
            return true;
          } else {
            return false;
          }
        } else {
            return false;
         }
      }
   }
?> 



