
<?php 

$strings = ["the quick brown fox ",   "jumped over",   "the lazy dog"];

function toTitleCase($strings) {
    return array_map(function($str) {
      return ucwords($str);}, $strings);
  }
  
  $result = toTitleCase($strings);
  $output = json_encode($result);
  echo $output;
echo"<br>";

  


foreach ($strings as $element) {
  echo strtoupper($element) . "<br>";
}
?>

 <!-- "THE QUICK BROWN FOX" ,"JUMPED OVER" , "THE LAZY DOG"   -->