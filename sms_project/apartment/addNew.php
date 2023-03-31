<?php
// session_start();
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');
$auth->isLoggedin();


if (isset($_POST['newApartmentSubmit'])) {
    $aptName = $_POST['aptName'];   
    $aptId = $_POST['aptId'];
    $aptAddress = $_POST['aptAddress'];
    $aptCity = $_POST['aptCity'];
    // $AptUserId = $_POST['userId'];

    $apartment->add($aptId, $aptName, $aptAddress, $aptCity);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/style1.css">   
    <title>New Apartment Form</title>
    
</head>

<body>
    
    <div class="login-form">
        
        <form action="" method="post">
            <h1>Add New Apartment</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Apartment name" class="tb" name="aptName" required>
                    
                </div>
                <div class="input-field">

                    <input type="text" placeholder="Apartment Id" autocomplete="nope" name="aptId" required>
                </div>

                <div class="input-field">
                    <input type="text" placeholder="Address" autocomplete="nope" name="aptAddress" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="City" class="tb" name="aptCity" required>
                </div>
            </div>
            <div class="action">
                <button type="submit" name="newApartmentSubmit" value='Create' class="button">Create</button><br>
                <a href="dashboard.php"><button class="button">Back</button></a>
                
            </div>
        </form>
    </div>
</body>

</html>

<?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?>