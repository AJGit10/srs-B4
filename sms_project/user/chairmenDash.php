<?php 
// session_start();
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/config.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/database.php');
if(!isset($_COOKIE['userName'])){
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
					<span class="text"><p><font color=purple>Settings</font></p></span>
				</a>
			</li>
			<li>
				<a href="../logout.php" class="logout">
					
					<box-icon name='log-out-circle'></box-icon>
					<span class="text"><p><font color=Red>Logout</font></p></span>
					
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
					<h1>Welcome Chairmen Dash</h1>
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
					
						<h3><a href="../chairmen/cpProfile.php">My Profile</a></h3>
						<!-- <p>Registration</p> -->
					</span>
				</li>
                <li>
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAOVJREFUSEvtk9ERAUEQRN9lIAQZkAEiQARCEAIyEAIRkAEyIAMhyIBqtarOmrVzzvkyn3ez/XZ6egsarqJhff6ArMMpi1rADBgFhS2wAC5ZxaghBTgCnah3Dwy+AegDu4SQAAK5y5pgHuyxRGST/sd1DR9e9CyAfN8krjgGtI9aAB22dnACuglwpQmk0QaWwDAIroM15xLgIZrax92dOi/5Y4B2MAWUpnIpPVqylSK3RStgksmglSQX4F16Ymb8HlwAjd5zvqCDYaF5tLzk3NJiAVdAfgpwulOtzTVmNcnn7j8g694NZzEjGZb5xYoAAAAASUVORK5CYII="/>
					<span class="text">
					
						<h3><a href="../chairmen/addUserByCp.php">Add New User</a></h3>
			
					</span>
				</li>
				<li>
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAFtJREFUSEtjZKAxYKSx+QyjFhAM4QEJov9QZ8Esh/EJuhZNH5iLzQc0t4BYlxKlbkDigCiXEatoQOJgNJJRomdAUhHN44DmFhCbxIlSNyBxQJTLiFU06gOCIQUAArwMGUsaCXEAAAAASUVORK5CYII="/>
					<span class="text">
						<h3><a href="../chairmen/userListByCp.php">User List</a></h3>

                    </span>
				</li>
				
				
				<!-- <li>
				
				<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAKxJREFUSEvVldENgzAMRB+TlE5CV+lkrEI36SagVE2FzMeLVQEif8jnu8R3JB07r25nfkzgAYxA37iRN/AEpoo3gdJwaySvsNJzbxWYv0DbSOXb4K3xcIEoaN9qshFYPS1gfp/vgeU+5jw9opbcr3OeFrBYpuvxP0gTBNfVZDtytr6JaZbA8CoQc58e4ekeXPcEdudY/Tf66EF56gbrlvoLKFfOZ9mD86fWAQIL7EA9GZb3Lu8AAAAASUVORK5CYII="/>
					<span class="text">
						<h3><a href="../chairmen/viewAptByCp.php">View Apartments</a></h3>
			
					</span>
				</li> -->
				<li>
				<box-icon name='food-menu'></box-icon>
					<span class="text">
						<h3><a href="../chairmen/addNoteByCp.php">Add Meeting Notes</a></h3>

                    </span>
				</li>
				<li>
				<box-icon type='solid' name='message-dots'></box-icon>
					<span class="text">
						<h3><a href="../chairmen/noteListByCp.php">View Meet Notes</a></h3>

                    </span>
				</li>
				<li>
				<box-icon name='food-menu'></box-icon>
					<span class="text">
						<h3><a href="../notes/upmeet.php">Update Meet Notes</a></h3>

                    </span>
				</li>
				
				
				</li>
			</ul>

<!-- <div><a href="list.php? chid=<?php echo $info['aptId']; ?> "> Get All Users</div> -->
<div><a href="notelist.php? noteId=<?php echo $info['aptId']; ?>">Notifications</a></div>
			<!-- <div><a href=" logout.php">Logout</a></div> -->
			
</body>
</html>
