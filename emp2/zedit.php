<?php
$emp_id = $_POST["emp_id"];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Information</title>
</head>
<body>
    <h2>Update Information</h2>
    <form action="zupdate.php" method="POST" enctype="multipart/form-data">
    <label for="id">ID:</label>
        <input type="number" name="id" value="<?php echo $emp_id;?>"><br><br>
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>
        <label for="file">File:</label>
        <input type="file" name="file" accept="image/*, audio/*, video/*"><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>
