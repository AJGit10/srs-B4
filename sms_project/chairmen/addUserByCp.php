<?php

include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/public/meta.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/send.php');


$auth->isLoggedin();
// $send->send();
// session_start();
$fetch = $user->userInfo();
$idOfChairPerson = $fetch['aptId'];

if (isset($_POST['newUserSubmit'])) {
    $userfirstName = $_POST['firstName'];
    $userlastName = $_POST['lastName'];
    $userMail = $_POST['eMail'];
    $userPassword = $_POST['password'];
    $userAptId = $fetch['aptId'];
    $userRollId = 3;
    if (!preg_match("/^[a-zA-Z_]+$/", $userfirstName, $userlastName)) {
        echo "Please Enter Valid Name";
    } else {
        $user->add($userfirstName, $userlastName, $userMail, $userPassword, $userAptId, $userRollId);
    }



}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/style1.css">
    <title>New User</title>

</head>

<body>

    <div class="login-form">

        <form action=" " method="post">
            <h1>Add new user</h1>
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
                    <input type="password" placeholder="Password" autocomplete="new-password" name="password" required>
                </div>
                <div class="input-Box">
                    <label for="aptId"> Apartment Id: </label>
                    <input type="text" value="<?= $idOfChairPerson ?>" class="tb" name="aptId" disabled>
                    <br>
                    <label for="rollId"> Role: </label>
                    <select name="rollId" class="tb" disabled>
                        <option value="3">User</option>
                    </select>
                </div>
                <div class="input-field" action=" ">
                    <button type="submit" name="newUserSubmit" value='Sign up' class="button">ADD</button>
                </div>
                <div class="input-field" action="./chairmen/chairmendash.php">
                    <button type="submit" name="back" value='back' class="button">Back</button>
                </div>

        </form>

    </div>

</body>

</html>

<!-- <?php
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/protected/footer.php');
?> -->