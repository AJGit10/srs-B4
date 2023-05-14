<?php
include "db.php";
?><!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#image-modal">
  View Image
</button>

<!-- Modal -->
<div class="modal fade" id="image-modal" tabindex="-1" role="dialog" aria-labelledby="image-modal-label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="image-modal-label">Image Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img id="image" src="upload/" alt="Image Preview" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<script>
// Add a click event listener to the "View Image" button
document.querySelector('#image-modal .modal-footer button').addEventListener('click', function() {
    // Set the source of the modal image to the URL of the original image
    document.querySelector('#modal-image').src = 'upload/';
});
</script>

<!-- Add Bootstrap dependencies -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>

<!-- Add Bootstrap stylesheets -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">

