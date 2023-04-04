<?php

session_start();
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/helper.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/auth.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/user.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/apartment.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/meeting.php');
include($_SERVER["DOCUMENT_ROOT"].'/sms_project/library/chairmen.php');
// include($_SERVER["DOCUMENT_ROOT"].'/sms_project/send.php');


 
$auth= new Auth();
$user = new User();
$apartment= new Apartment();
$meeting= new Meet();
$chairmen= new Chairmen();
// $send = new Send();



?>