<?php
// Open the CSV file for reading
$file = fopen('data.csv', 'r');

// Initialize an empty array to hold the records
$records = array();

// Read each line in the CSV file and add it to the array
while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
    array_push($records, $data);
}

// Close the file
fclose($file);
echo  "[ " ."<br>"; 
// Print the array of records in the desired format
foreach ($records as $record) {
    
    echo "[" . implode("", $record,) . "]<br>\n";
}
echo  "] " ."<br>"; 
?>