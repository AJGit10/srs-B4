<?php
include "db.php";

?>
<style>
   
    #country,#state,#city{
  border: 1px solid black;
  padding: 5px;
  width: 200px;
  border-radius: 0;
}
    </style>
<div class="container">
    <div class="form-group ">

        <label for="country"> Country</label><br>
        <select class="form-select" id="country">
            
            <option value=""> Select Country</option>
            <?php
            $query = "select * from country";
            // $query = mysqli_query($con, $qr);
            // $result = $conn->query($query);
            $result = mysqli_query($conn, $query);
             
            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

            ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php
                }
            }

            ?>

        </select>
    </div>
    <div class="form-group py-2">
        <label for="country"> State</label><br>
        <select class="form-select" id="state">
            <option value="">select State</option>

        </select>
    </div>
    <div class="form-group py-2 ">
        <label for="country"> City</label><br>
        <select class="form-select" id="city">
            <option value="">select City</option>
        </select>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    

<script>
    $(document).ready(function() {
        $("#country").on('change', function() {
            var countryid = $(this).val();

            $.ajax({
                method: "POST",
                url: "response.php",
                data: {
                    id: countryid
                },
                datatype: "html",
                success: function(data) {
                    $("#state").html(data);
                    $("#city").html('<option value="">Select city</option');

                }
            });
        });
        $("#state").on('change', function() {
            var stateid = $(this).val();
            $.ajax({
                method: "POST",
                url: "response.php",
                data: {
                    sid: stateid
                },
                datatype: "html",
                success: function(data) {
                    $("#city").html(data);

                }

            });
        });
    });
</script>