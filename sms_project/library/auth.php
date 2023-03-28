

<?php
class Auth {
   public $isloggedIn = false;
   function login($userName,$userPassword)
   {

   global $conn;

   

       $sql =  "SELECT * FROM user WHERE eMail = '$userName' and  passWord = '$userPassword' ";
       $result = $conn->query($sql);
      // print_r($result);exit;

      if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($row['rollId'] == '1') {
            header("Location: ./dashboard.php");
        } elseif ($row['rollId'] == '2') {
            header("Location: ./user/chairmenDash.php");
        } elseif ($row['rollId'] == '3') {
            header("Location: ./user/userDash.php");
        } else {
            echo "Incorrect Input";
        }
        // return true;
    } else {
        return false;
    }
  }}
?> 



