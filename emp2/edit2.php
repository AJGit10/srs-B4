<?php
include "db.php";

$emp_id = $_POST["emp_id"];

?>



<?php 
$query1 = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);

$file= $row['image'];
$file1= $row['audio'];
$file2= $row['video'];
 $image= str_replace( "\\", '/', $file );
 $audio= str_replace( "\\", '/', $file1 );
 $video= str_replace( "\\", '/', $file2 );


?>

<form id="data" method="post" enctype="multipart/form-data">
<input type="id" name="first" value="<?php echo $row["emp_id"]; ?>"><br>
<input type="name" name="name" value="<?php echo $row["name"]; ?>"><br>
<input type="email" name="last" value="<?php echo $row["email"]; ?>"><br>
<input name="image" type="file" ><p><?php echo "Previous File: ";echo basename( $image ). " ";echo basename( $audio ). " ";echo basename( $video );?></p> 
<button>Submit</button>
</form>

<script>
$("#data").submit(function() {

var formData = new FormData($(this)[0]);

$.post($(this).attr("action"), formData, function(data) {
    $.ajax({
      url: "update.php",
      type: "POST",
      
      // data: {imp_id:imp_id,name:name,email:email},
      data: formData,

      
      success: function(response) {
        $('#result-container').html(response);

        // Display success message and redirect to main page
        alert("Record updated successfully.");
        // window.location.href = "main4.php";
      }
});

return false;
});
});


</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
