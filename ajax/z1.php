<input type="text" id="search-input" placeholder="Enter employee name">
<button type="button" id="search-button">Search</button>

<div id="result-container">
  <!-- Employee records will be displayed here -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script>
$(document).ready(function() {
  $('#search-button').click(function() {
    var employeeName = $('#search-input').val(); // Get the employee name entered in the search input field
    $.ajax({
      url: 'zdelete.php', // URL of the PHP script that fetches employee records
      type: 'POST',
      data: {name: employeeName},
      success: function(response) {
        $('#result-container').html(response); // Display the fetched employee records in the result container
      },
      error: function(xhr, status, error) {
        console.log('Error:', error);
      }
    });
  });
});
</script>
