<?php
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/protected/header.php');

$fetch = $user->userInfo();
// $idOfChairPerson = $fetch['aptId'];

use PHPmailer\PHPmailer\PHPmailer;
use PHPmailer\PHPmailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPmailer.php';
require 'phpmailer/src/SMTP.php';

// if(isset($_POST["newUserSubmit"] ) || isset($_POST["updateUserSubmit"])){
    $mail = new PHPmailer(true);

    $mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth= true;
$mail->Username = 'smsportal01@gmail.com';
$mail->Password = 'ihecogloarbhjcdt';
$mail->SMTPSecure= 'ssl';
$mail->Port = 465;

$mail->setFrom('smsportal01@gmail.com');
$mail->addAddress($_POST["eMail"]);

$mail->isHTML(true);
$text2 = "User Addition And Updation";
$mail->Subject = $text2;
$text = "This is your email and password For SMS Portal. DO NOT SHARE THIS WITH ANYONE ELSE. <br>";
$text3="Username :";
$text4="Password :";
$text5= $_POST["firstName"] . ' ' . $_POST["lastName"] ;
$mail->Body = $text.$text5."<br>".$text3.$_POST['eMail']."<br>".$text4.$_POST['password'];


$mail->send();


// if (isset($_POST['newUserSubmit'])) {
//     $userfirstName = $_POST['firstName'];   
//     $userlastName = $_POST['lastName'];
//     $userMail = $_POST['eMail'];
//     $userPassword = $_POST['password'];
//     $userAptId = $fetch['aptId'];
//     $userRollId =3;

//     $user->add($userfirstName, $userlastName, $userMail, $userPassword, $userAptId, $userRollId);
// }

// if (isset($_POST['updateUserSubmit'])) {
//     $userId = $_POST['userId'];
//     $userfirstName = $_POST['firstName'];
//     $userlastName = $_POST['lastName'];
//     $userEmail = $_POST['eMail'];
//     $userAptId = $_POST['aptId'];

//     $user->updateUserInfo($userId, $userfirstName, $userlastName, $userEmail,$userAptId);
// }
echo
"
<script>
alert('Email Sent Successfully  And User Added SuccessFully');

document.location.href = './user/chairmenDash.php';
</script>
";
// }

?>