<?php
include "db.php";
?>
<!-- HTML -->
<input type="file" id="fileInput" />
<button onclick="checkFile()">Check File</button>

<!-- JavaScript -->
<script>
function checkFile() {
  var fileExists = checkIfFileExists();

  if (fileExists) {
    var fileInput = document.getElementById("fileInput");
    var file = fileInput.files[0];
    var fileName = file.name;
    var buttonLabel = document.querySelector("button").textContent;
    document.querySelector("button").textContent = fileName + " " + buttonLabel;
  } else {
    // The file doesn't exist, so allow the user to upload a new file
    var fileInput = document.getElementById("fileInput");
    fileInput.click();
  }
}

function checkIfFileExists() {
  // Implement your logic here to check if the file exists in the database or storage
  // Return true if the file exists, false otherwise
  return false; 
  
}
</script>


