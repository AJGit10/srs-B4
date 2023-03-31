<?php
// session_start();

include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/public/meta.php');

$fetch = $user->userInfo();
$idOfChairPerson = $fetch['aptId'];


if (isset($_POST['addNoteSubmit'])) {
    $meetId = $_POST['noteId'];   
    $meetAptId = $fetch['aptId'];
    $meetTitle = $_POST['noteTitle'];
    $meetDate = time();
    $meetDetails = $_POST['noteDetails'];

    $meeting->add($meetId, $meetAptId, $meetTitle, $meetDate , $meetDetails);

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../user/style1.css">
    <title>Meeting Page</title>
    
</head>

<body>

    <div class="login-form">
        
        <form action="" method="post">
            <h1>Add New Meet</h1>
            <div class="content">
                <div class="input-field">
                    <input type="text" placeholder="Meet ID" class="tb" name="noteId" required>
                    
                <div class="input-field">

                <input type="text" value="<?= $idOfChairPerson ?>" class="tb" name="aptId" size="50" disabled>
                </div>

                <div class="input-field">
                    <input type="text" placeholder="Title" class="tb" name="noteTitle" required>
                </div>
                <div class="input-field">
                    <input type="text" placeholder="Meeting Date" class="tb" name="createdAt" required>
                </div>
                <div class="input-field">
                <textarea type="text" class="tb" name="noteDetails" rows="4" cols="50" required></textarea>
                </div>
            </div>
            <div class="action">
                <button type="submit" name="addNoteSubmit" value='Submit' class="button">submit</button><br>
                <a href="dashboard.php"><button class="button">Back</button></a>
                <!-- <button><input type="submit" name="submit" value="signup"></button> -->
            </div>
        </form>
    </div>
</body>

</html>

<!-- <?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/footer.php');
?> -->