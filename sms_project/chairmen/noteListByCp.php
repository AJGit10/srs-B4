<?php 
session_start();
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/config.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/constants.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/includes/database.php');

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
				<a href="./user/chairmenList.php">
				<box-icon type='solid' name='user-pin'></box-icon>
					<span class="text">Chair Person</span>
				</a>
			</li>
			<li>
				<a href="../user/updateUserN.php">
					
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
				<a href="logout.php" class="logout">
					<!-- <i class='bx bxs-log-out-circle' ></i> -->
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
			<a href="./user/userById.php" class="nav-link">Categories</a>
			<form action="userById.php" method="post">
				<div class="form-input">
				<input type="search" name="userId" placeholder="Search...">
				<button type="submit" name="searchUserId" class="search-btn"><i class='bx bx-search'></i></button>
				</div>
			</form>
            
			<h1><?php
                echo "Welcome " . $fetch['firstName'] . " " . $fetch['lastName'];
                ?></h1>
			
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
    
    <main>
	<div class="head-title">
		<div class="left">
			<h1>
				List of All NOTES of My Society
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
								<th>Apartment Id</th>
								<th>Apartment Name</th>
								<th>Note Id</th>
								<th>Note Title</th>
								<th>Note Details</th>
								<th>Edit Note</th>
								<th>Delete Note</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$sql = "SELECT apartment.aptId, apartment.aptname, notes.noteId, notes.noteTitle, notes.noteDetails FROM apartment JOIN notes ON apartment.aptId = notes.aptId WHERE apartment.aptId = '$idOfChairPerson'";
							$result = $conn->query($sql);
							if (!$result) { ?>
								<tr>
									<td colspan="7">No Results found</td>
								</tr>
							<?php } else { ?>
								<?php
								while ($row = $result->fetch_assoc()) {
									echo
										"<tr>
                                        <td>" . $row['aptId'] . "</td>
                                        <td>" . $row['aptname'] . "</td>
                                        <td>" . $row['noteId'] . "</td>
                                        <td>" . $row['noteTitle'] . "</td>
                                        <td>" . $row['noteDetails'] . "</td>" ?>
										<td><a href="updateMeetByCp.php?id=<?= $fetch['aptId']; ?> "><button
													class="button">Update</button></a>
										</td>
										<td>
											<form action="meetDeleteByCp.php" method="POST"><button type="submit"
													name="meetingDelete" value="<?= $row3['noteId']; ?>" class="button2">Delete</button>
											</form>
										</td>
										</tr>
								<?php } ?>
							<?php } ?>
						</tbody>
					</table>
				</h3>
			</span>
		</li>
	</ul>
</main>


</body>
</html>
