<php?
include "db.php";

$emp_id="";

$sql = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  
  // Get file paths from database
  $image_path = $row['image'];
  $audio_path = $row['audio'];
  $video_path = $row['video'];
  
  // Button to show image
  echo '<button onclick='showAttachment(\''.$image_path.'\')'>Show Image</button>';
  
  // Button to show audio
  echo '<button onclick="showAttachment(\''.$audio_path.'\')">Show Audio</button>';
  
  // Button to show video
  echo '<button onclick="showAttachment(\''.$video_path.'\')">Show Video</button>';
}
?>

<!-- JavaScript function to show attachment in a pop-up window -->
<script>
function showAttachment(path) {
  // Create a new window for the attachment
  var win = window.open('', '_blank');
  
  // Check file type and set appropriate content type
  if (path.endsWith('.mp3')) {
    win.document.contentType = 'audio/mpeg';
  } else if (path.endsWith('.mp4')) {
    win.document.contentType = 'video/mp4';
  } else {
    win.document.contentType = 'image/*';
  }
  
  // Load the attachment into the new window
  win.document.write('<embed src="' + path + '" type="' + win.document.contentType + '" />');
}
</script>
