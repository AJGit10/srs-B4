<?php

include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');

// session_start();
$fetch = $user->userInfo();
$idOfChairPerson = $fetch['aptId'];
if (isset($_POST['updateApartmentSubmit'])) {
    $aptName = $_POST['aptName'];   
    $aptId = $_POST['aptId'];
    $aptAddress = $_POST['aptAddress'];
    $aptCity = $_POST['aptCity'];
    // $AptUserId = $_POST['userId'];

    $apartment->updateApartmentInfo($aptId, $aptName, $aptAddress, $aptCity);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>                                                                                                                     
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Apartment</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        body {
            background-color: #f7c4c9;
            font-family: 'Rubik', sans-serif;
        }

        .login-form {
            background: #fff;
            width: 500px;
            margin: 65px auto;
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            flex-direction: column;
            border-radius: 4px;
            box-shadow: 0 2px 25px rgba(0, 0, 0, 0.2);
        }

        .login-form h1 {
            padding: 35px 35px 0 35px;
            font-weight: 300;
        }

        .login-form .content {
            padding: 35px;
            text-align: center;
        }

        .login-form .input-field {
            padding: 12px 5px;
        }

        .login-form .input-field input {
            font-size: 16px;
            display: block;
            font-family: 'Rubik', sans-serif;
            width: 100%;
            padding: 10px 1px;
            border: 0;
            border-bottom: 1px solid #747474;
            outline: none;
            -webkit-transition: all .2s;
            transition: all .2s;
        }

        .login-form .input-field input::-webkit-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::-moz-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input:-ms-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::-ms-input-placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input::placeholder {
            text-transform: uppercase;
        }

        .login-form .input-field input:focus {
            border-color: #222;
        }

        .login-form a.link {
            text-decoration: none;
            color: #747474;
            letter-spacing: 0.2px;
            text-transform: uppercase;
            display: inline-block;
            margin-top: 20px;
        }

        .login-form .action {
            display: -webkit-box;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            flex-direction: row;
        }

        .login-form .action button {
            width: 100%;
            border: none;
            padding: 18px;
            font-family: 'Rubik', sans-serif;
            cursor: pointer;
            text-transform: uppercase;
            background: #e8e9ec;
            color: #777;
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 0;
            letter-spacing: 0.2px;
            outline: 0;
            -webkit-transition: all .3s;
            transition: all .3s;
        }

        .login-form .action button:hover {
            background: #d8d8d8;
        }

        .login-form .action button:nth-child(2) {
            background: #2d3b55;
            color: #fff;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 4px;
        }

        .login-form .action button:nth-child(2):hover {
            background: #3c4d6d;
        }

        .button {
            display: inline-block;
            border-radius: 12px;
            background-color: #f4511e;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 15px;
            width: 150px;
            cursor: pointer;
            margin: 2px;
        }

       
    </style>
</head>

<body>

    <div class="login-form">
    
        <form action="" method="post">
            <h1>Update Apartment</h1>
            <div class="content">
            <div class="input-field">
            <div class="input-field">
            <div class="input-field">

<input type="text" value="<?= $idOfChairPerson ?>" class="tb" name="aptId" size="50" disabled>
</div>
                <div class="input-field">
                    <input type="text" placeholder="Apartment Name" class="tb" name="aptName">
                    
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Apartment Address" class="tb" name="aptAddress">
                </div>
               

                <div class="input-field">
                    <input type="text" placeholder="Apartment City" class="tb" name="aptCity">
                </div>
               
            </div>
            <div class="action">
                <button type="submit" name="updateApartmentSubmit" value='Update' class="button">Update</button>
                <!-- <button><input type="submit" name="submit" value="signup"></button> -->
            </div>
        </form>
        <a href="../dashboard.php"><button class="button">Back</button></a>
       
    </div>
</body>

</html>

<!-- <?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?> -->