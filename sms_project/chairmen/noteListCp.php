 <?php
// session_start();

include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');

$fetch = $user->userInfo();
$idOfChairPerson = $fetch['aptId'];
?>
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
										<td><a href="upmeet.php?id=<?= $fetch['aptId']; ?> "><button
													class="button">Edit</button></a>
										</td>
										<td>
											<form action="deleteNote.php" method="POST"><button type="submit"
													name="userDelete" value="<?= $row3['userId']; ?>" class="button2">Delete</button>
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

<?php
// include("../../protected/footer.php");
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?> 




<!-- ------------------------------------------ -->