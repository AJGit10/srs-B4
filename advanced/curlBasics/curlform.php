<?php

if(isset($_POST['submit'])){
    echo "Full Name IS : " . $_POST['first_Name']. " " . $_POST['last_Name'];
}
?>
<html>

<body>

 <form method = "POST" action = "" >

  <input  name="first_Name"  type="text">

  <input  name="last_Name"  type="text">

  <input  type="submit"  name="submit"  value="Submit" >

</form>

</body>

</html>