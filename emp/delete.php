<?php
include "db.php";
// $emp_id = $_POST["emp_id"];

// // Delete the record with the specified emp_id value
// $query = "DELETE FROM employee WHERE emp_id = '$emp_id'";
// $result = mysqli_query($conn, $query);
// Retrieve the emp_id value from the AJAX request
$emp_id = $_POST["emp_id"];

// Fetch the record with the specified emp_id value
$query = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Close the database connection
mysqli_close($conn);

?>
<div class="login-form">
           
           <form action="" method="post">
             <h1>Delete User</h1>
             <div class="content">

             <div class="input-field">
             <input type="number" placeholder="<?php echo $row['emp_id'] ?>" class="tb" >
             <div class="input-field">
             <div class="input-field">
               <input type="text" placeholder="<?php echo $row['name'] ?>" class="tb" >
             </div>
             <div class="input-field">
               <input type="text" placeholder="<?php echo $row['email'] ?>" class="tb" >
             </div>
                   <h2>
                     <?php echo "Are You Sure!!!" ?>
                   </h2>
                 </div>
                 <div class="action">
                   <button class="deleteBtn" type="submit" name="UserDeleteSubmit" value='Delete' class="button">
                     <p>
                       <font color=green>Yes Delete</font>
                     </p>
                   </button>

                 </div>
                 <div class="action"> <a href="../dashboard.php"><button class="button">
                       <p>
                         <font color=red>Cancel</font>
                       </p>
                     </button></a></div>
           </form>
               
     </div>
<!-- JavaScript code to handle form submission -->
<script>
$(document).ready(function() {
$(".deleteBtn").click(function() {
    var emp_id = $(this).data("id");{
  // Make an AJAX call to delete the record
  $.ajax({
    url: "finaldelete.php",
    type: "POST",
    data: { emp_id: <?php echo $emp_id; ?> },
    success: function(response) {
      // Display success message and redirect to main page
      alert("Record deleted successfully.");
      window.location.href = "main.php";
    },
    error: function() {
      alert("Error deleting record.");
    }
  });
}});
});
