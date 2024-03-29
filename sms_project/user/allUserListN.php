<?php 
// session_start();
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/config.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/database.php');

	
$fetch = $user->userInfo();

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
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="./user/chairmenList.php">
				<box-icon type='solid' name='user-pin'></box-icon>
					<span class="text">Chair Person</span>
				</a>
			</li>
			<li>
				<a href="./user/updateUser.php">
					<!-- <i class='bx bxs-doughnut-chart' ></i> -->
					<box-icon type='solid' name='group'></box-icon>
					<span class="text">Update User</span>
				</a>
			</li>
			<li>
				<a href="./apartment/updateApartment.php">																				
					<!-- <i class='bx bxs-message-dots' ></i> -->
					<box-icon name='duplicate'></box-icon>
					<span class="text">Update Apartment</span>
				</a>
			</li>
			<li>
				<a href="./notes/meetNotes.php">
					
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
					<span class="text"><p><font color=purple>Settings</font></p></span>
				</a>
			</li>
			<li>
				<a href="../logout.php" class="logout">
					<!-- <i class='bx bxs-log-out-circle' ></i> -->
					<box-icon name='log-out-circle'></box-icon>
					<span class="text"><p><font color=Red>Logout</font></p></span>
					<!-- <a href="logout.php">Logout</a> -->
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="./user/userById.php" class="nav-link">Categories</a>
			<form action="userById.php" method="post">
				<div class="form-input">
				<input type="search" name="userId" placeholder="Search...">
				<button type="submit" name="searchUserId" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
            <!-- <h1>WELCOME <?php echo $info['firstName']; ?></h1> -->
			<h1><?php
                echo "Welcome " . $fetch['firstName'] . " " . $fetch['lastName'];
                ?></h1>
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
<style>
        table,
        th,
        td {
            border: 1px solid;
        }
    </style>
    
    <div class="head-title">
        <div class="left">
            <h1>
                List of All Users
            </h1>
        </div>
    </div>

    <ul class="box-info">
        <li>
            <!-- <i class='bx bxs-smile'></i> -->
            <span class="text">
                <h3>
                    <table class='table'>
                        <thead>
                            <tr>
                                <th>User Id</th>
                                <th>User Name</th>
                                <th>User Mail</th>
                                <th>User Apt Id</th>
                                <th>Role</th>
                                <th>Update</th>
                                <th>Delete</th>
                                
                               
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $sqljoin = "SELECT user.userId, user.firstName, user.lastName, user.eMail, user.aptId, role.roleLabel FROM user JOIN role ON user.rollId = role.rollId";
                            $result = $conn->query($sqljoin);

                            if (!$result) { ?>
                                <tr>
                                    <td colspan="6">No Results found</td>
                                </tr>
                            <?php } else { ?>
                                <?php
                                while ($row3 = $result->fetch_assoc()) {
                                    echo
                                        "<tr>
                                        <td>" . $row3['userId'] . "</td>
                                        <td>" . $row3['firstName'] . " " . $row3['lastName'] . "</td>
                                        <td>" . $row3['eMail'] . "</td>
                                        <td>" . $row3['aptId'] . "</td>
                                        <td>" . $row3['roleLabel'] . "</td>" ?>
                                    <td><a href="./updateUser.php?id=<?= $row3['userId'] ?> "><button
                                                style="background-color: purple;  border: none; color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Update</button></a>
                                    </td>
                                    <td><a href="./userDelete.php?id=<?=$row3['userId'] ?>"><button
                                                style="background-color:red;  border: none;  color: white;  padding: 15px 32px;  text-align: center;  text-decoration: none;  display: inline-block;  font-size: 16px;  margin: 4px 2px;  cursor: pointer; ">Delete</button></a>
                                    </td>
                                    </tr>
                                    <?php ?>
                                <?php } ?>
                            <?php } ?>
                        </tbody>
                        </table>

                        <!-- <?php
                            // $result = $user->list();
                            // foreach ($result as $key => $value) {
                            
                            //     echo $value['userId'] . "  " . $value['firstName'] . " " . $value['lastName'];
                            //     echo '<br>';
                            // }
                            ?> -->
                </h3>
            </span>
        </li>
    </ul>
</main>
</body>
</html>
