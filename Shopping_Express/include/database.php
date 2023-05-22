<?php
// define("PROJECT_ROOT", $_SERVER['DOCUMENT_ROOT'].'/projects/srs-b4-Intern-4/ajay');
define("DBUSERNAME","root");
define("DBPASSWORD","");
define("DBHOSTNAME","localhost");
define("DBNAME","shopping_web");

// Create connection
global $conn;
$conn = new mysqli(DBHOSTNAME, DBUSERNAME, DBPASSWORD,DBNAME);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?>