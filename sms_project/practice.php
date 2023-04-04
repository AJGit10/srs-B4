<?php
// $cookie_name = "user";
// $cookie_value = "Ajay Zalte";
// setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); 
// echo "ajay";
// exit;
//  $str = "<h1>Hellow AJay!!!</h2>";
//  $newstr = filter_var($str, FILTER_SANITIZE_STRING);
//  echo $newstr;      

$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo ("Integer is valid");
}else{
    echo ("Integer is not valid");
}
?>