 <?php
include "db.php"; 
$emp_id = $_POST["emp_id"];

$query1 = "SELECT * FROM employee WHERE emp_id = '$emp_id'";
$result1 = mysqli_query($conn, $query1);
$row = mysqli_fetch_assoc($result1);


?>

<style>
    #display-image{ 
    width: 100%;
    justify-content: center;
    padding: 5px;
    margin: 15px;
}
img{
    margin: 5px;
    width: 350px;
    height: 250px;
}
</style>

<div id="display-image">
        <?php
        $query = "SELECT image FROM employee WHERE emp_id=$emp_id";
        $result = mysqli_query($conn, $query);

echo"query=".$query;
        
    
        
 
        while ($data = mysqli_fetch_assoc($result)) 
        {
        ?>
            <img src="	
upload/01 march.png">
 
        <?php
        print_r($data);
        exit();
        }
        ?>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> 

