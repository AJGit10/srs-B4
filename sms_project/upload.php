<?php
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/protected/header.php');
include($_SERVER["DOCUMENT_ROOT"] . '/sms_project/public/meta.php');


if (isset($_POST["submit"]) && isset($_FILES["submitImage"])) {
    $profilPic = $_POST['profile'];
    $allowed_exts = array('jpg', 'jpeg', 'png');
    $temp = explode(".", $_FILES['file']['name']);
    $extension = end($temp);
    if (!(($_FILES['file']['type'] == 'image/jpeg')
      || ($_FILES['file']['type'] == 'image/jpg')
      || ($_FILES['file']['type'] == 'image/png'))
      && in_array($extension, $allowed_exts)) {
        echo "File is invalid Use Only JPG,JPEG,PNG format";
    } else {
        $user->add($profilPic); 
    }
    
    }
if(isset($_POST["submit"]) && isset($_FILES["submitImage"]) ){

    echo "Yes Uploaded!!!";

} else{
    header("location: ./chairmen/uploadProfile.php");
}
?>