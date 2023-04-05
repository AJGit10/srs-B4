<?php
// session_start();
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/includes/config.php');
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/includes/database.php');
if (!isset($_COOKIE['userName'])) {
    header('location:../index.php');
}


$fetch = $user->userInfo();
$idOfChairPerson = $fetch['aptId'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

    <!-- Boxicons -->
    <!-- <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'> -->
    <!-- My CSS -->
    <link rel="stylesheet" href="../dash.css">

    <title>SMS Portal</title>
</head>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
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


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bi bi-building-fill-gear'></i>
            <span class="text">SMS Portal</span>
        </a>
        <ul class="side-menu top">
            <li class="active">
                <a href="#">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="../user/chairmenList.php">
                    <box-icon type='solid' name='user-pin'></box-icon>
                    <span class="text">Chair Person</span>
                </a>
            </li>
            <li>
                <a href="../user/updateUserN.php">
                    <!-- <i class='bx bxs-doughnut-chart' ></i> -->
                    <box-icon type='solid' name='group'></box-icon>
                    <span class="text">Update User</span>
                </a>
            </li>
            <li>
                <a href="../chairmen/updateAptByCp.php">
                    <!-- <i class='bx bxs-message-dots' ></i> -->
                    <box-icon name='duplicate'></box-icon>
                    <span class="text">Update Apartment</span>
                </a>
            </li>
            <li>
                <a href="../chairmen/noteListCp.php">

                    <box-icon type='solid' name='edit'></box-icon>
                    <span class="text">Meet Notes</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            <li>
                <a href="#">
                    <!-- <i class='bx bxs-cog' ></i> -->
                    <box-icon type='solid' name='cog'></box-icon>
                    <span class="text">
                        <p>
                            <font color=purple>Settings</font>
                        </p>
                    </span>
                </a>
            </li>
            <li>
                <a href="../logout.php" class="logout">

                    <box-icon name='log-out-circle'></box-icon>
                    <span class="text">
                        <p>
                            <font color=Red>Logout</font>
                        </p>
                    </span>

                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="./user/getUserById.php" class="nav-link">Categories</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <?php
            echo "Welcome " . $fetch['firstName'] . " " . $fetch['lastName'];
            ?>
            </h1>
            <!-- <input type="checkbox" id="switch-mode" hidden>	
            <label for="switch-mode" class="switch-mode"></label>
            <a href="#" class="notification">
                <i class='bx bxs-bell' ></i>
                <span class="num">8</span>
            </a> -->
            <a href="#" class="profile">
                <img src="aj.jpg">
            </a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="login-form">
                 <?php
                if (isset($_GET['id'])) {
                    $userId = $_GET['id'];
                    $user = "SELECT * FROM user WHERE userId = '$userId'";
                    $result = $conn->query($user);
                    if (mysqli_num_rows($result) > 0) {
                        foreach ($result as $user)

                        ?> 

                        <form action=" " method="post" enctype="multipart/form-data">
                            <h1>Upload Profile Picture</h1>
                            <div class="content">

                                <div class="input-field">
                                    <input type="number" value="<?= $user['userId']; ?>" class="tb" name="userId">
                                </div>


                                <input type="file" name="submitImage">
                                <input type="submit" name="submit" value="Upload">

                        </form>
                         <?php
                    }
                } else {
                    ?>
                    <h4>No DATA found</h4>
                    <?php
                }

                ?> 
            </div>

</body>

</html>