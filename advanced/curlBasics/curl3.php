
<?php

$handle = curl_init();

// $url = "https://localhost/advanced/curlBasics/curlform.php";

$postData = array(

  'firstName' => 'Lady',

  'lastName'  => 'Gaga',

  'submit'    => 'ok'

); 

curl_setopt_array($handle,

  array(

  CURLOPT_URL => $url,

  // Enable the post response.

CURLOPT_POST   => true,

CURLOPT_POSTFIELDS => $postData,

CURLOPT_RETURNTRANSFER => true,

  )

);

 $data = curl_exec($handle);

curl_close($handle);

echo $data;

?>                   