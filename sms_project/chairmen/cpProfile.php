<?php 
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/config.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/database.php');

// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/header.php');	
// include("includes/config.php");	
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
				<a href="../user/chairmenDash.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
				<box-icon type='solid' name='user-pin'></box-icon>
					<span class="text">Chair Person</span>
				</a>
			</li>
			<li>
				<a href="../user/updateUser.php">
					<!-- <i class='bx bxs-doughnut-chart' ></i> -->
					<box-icon type='solid' name='group'></box-icon>
					<span class="text">Update User</span>
				</a>
			</li>
			<li>
				<a href="../apartment/updateApartment.php">																				
					<!-- <i class='bx bxs-message-dots' ></i> -->
					<box-icon name='duplicate'></box-icon>
					<span class="text">Update Apartment</span>
				</a>
			</li>
			<li>
				<a href="../notes/meetNotes.php">
					
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
			<a href="./user/getUserById.php" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
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
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				
			</div>

			<ul class="box-info">
				<li>
				<box-icon type='solid' name='user-circle'></box-icon>
					<span class="text">
					
						<h3><?php
                echo "Welcome " . $fetch['firstName'] . " " . $fetch['lastName'] . " " . $fetch['userId']
                ?></h3>
						<!-- <p>Registration</p> -->
					</span>
				</li>
				
				
			</ul>


			
</body>
</html>
