<?php

$array1 = [1, 2, 3, 4, 5];
$array2 = [3, 4, 5, 6, 7];
function find_common_elements($array1, $array2) 

{
    $common_elements = array_intersect($array1, $array2);
    return array_values($common_elements);
   
}

// Example usage:

$common = find_common_elements($array1, $array2);
print_r($common);
?>