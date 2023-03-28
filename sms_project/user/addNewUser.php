<?php
// include('../protected/header.php');
// include('../public/meta.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');

session_start();
// include('../library/user.php');
if (isset($_POST['newUserSubmit'])) {
    $userfirstName = $_POST['firstName'];   
    $userlastName = $_POST['lastName'];
    $userMail = $_POST['eMail'];
    $userPassword = $_POST['password'];
    $userAptId = $_POST['aptId'];
    $userRollId = $_POST['rollId'];

    $user->add($userfirstName, $userlastName, $userMail, $userPassword, $userAptId, $userRollId);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Registration Form</title>
    
</head>

<body>
    <!-- <div id="navbar" class="navbar collapse navbar-collapse">
        <a class="active" href="javascript:void(0)">Home</a>
        <a href="About Us.txt">About Us</a>
        <a href="Contact Us.txt">Contact Us</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div> -->
    <!-- partial:index.partial.html -->
    <div class="login-form">
        
        <form action="" method="post">
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
                <div class="input-field">
                    <input type="text" placeholder="Apartment Id" class="tb" name="aptId" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="roleId" class="tb" name="rollId" required>
                </div>
            </div>
            <div class="action">
                <button type="submit" name="newUserSubmit" value='Sign up' class="button">sign up</button><br>
                <a href="dashboard.php"><button class="button">Back</button></a>
                <!-- <button><input type="submit" name="submit" value="signup"></button> -->
            </div>
        </form>
    </div>
</body>

</html>

<?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?>