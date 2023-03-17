<?php
include('../protected/header.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');

class User
{
    function userInfo() // user name
    {
        global $conn;

        if (isset($_SESSION['userMail'])) {
            $existingUserMail = $_SESSION['userMail'];
        } else {
            die("Data not found");
        }

        $que = "SELECT * FROM user WHERE eMail = '$existingUserMail'";

        $fetch = $conn->query($que);
        $row = mysqli_fetch_assoc($fetch);
        return $row;
    }

    function list() //view list of all users
    {
        //code to get all users 
        global $conn;

        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result);
        // echo '$num';
        $sql2 = "SELECT DISTINCT(aptId) FROM `user`";
        $result2 = mysqli_query($conn, $sql2);
        $num2 = mysqli_num_rows($result2);

        if ($num > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $userList[] = $row;
            }
            return $userList;
        } else {
            return 0;
        }
    }

    function add($userfirstName, $userlastName, $userMail, $userPassword, $userAptId) //adding new user
    {
        //code to add new user entry
        global $conn;
        $sql = "INSERT INTO user(firstName, lastName, eMail, password, aptId) VALUES('$userfirstName','$userlastName','$userMail','$userPassword', $userAptId)";

        $output = $conn->query($sql);
        if (!$output) {
            echo 'not done';
        } else {
            echo ' ';
        }
    }
    function get($userId) //get specific user by userId
    {
        //code to get single user details from database.
        global $conn;
        $sql = "SELECT *FROM user where userId ='$userId'";
        $result = $conn->query($sql);
        $fetch = mysqli_fetch_array($result);
        return $fetch;
    }
    //new lines starts
    function updateUserInfo($userfirstName, $userlastName, $userAptId)
    {
        global $conn;
        if (isset($_SESSION['userMail'])) {
            $existingUserMail = $_SESSION['userMail'];
        } else {
            die("Data not found");
        }

        $query = "UPDATE user SET firstName = '$userfirstName', lastName = '$userlastName', aptId = $userAptId WHERE eMail = '$existingUserMail'";
        $conn->query($query);
        //new line ends
    }
}
// }
$user = new User();
$u1 = new User();

?>