<?php 
include("./include/config.php");
setcookie('userName', $row['userName'],time()-60);
session_unset();

session_destroy();

header("Location: index.php");


?>
