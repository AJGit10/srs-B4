
<?php
$url = 'https://www.google.com'; // URL of the Google site you want to access
$file = 'google.html'; // Name of the file you want to save the HTML data to

// Initialize curl
$ch = curl_init();

// Set curl options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute curl
$result = curl_exec($ch);

// Check for errors
if(curl_error($ch)) {
    echo 'Error:' . curl_error($ch);
}

// Close curl
curl_close($ch);

// Save HTML data to file
file_put_contents($file, $result);

?>