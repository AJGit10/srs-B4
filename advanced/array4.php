<?php
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function sum_even_numbers($numbers) {
    // Use array_filter to extract only the even numbers
    $even_numbers = array_filter($numbers, function($num) {
        return $num % 2 == 0;
    });
    
    // Use array_sum to add up the even numbers
    return array_sum($even_numbers);
}

function sum_odd_numbers($numbers) {
    // Use array_filter to extract only the even numbers
    $odd_numbers = array_filter($numbers, function($num) {
        return $num % 2 !== 0;
    });
    
    // Use array_sum to add up the even numbers
    return array_sum($odd_numbers);
}

echo "Sum Of Even numbers :" .sum_even_numbers($numbers);
echo "<br>";
echo "Sum Of Odd numbers :" .sum_odd_numbers($numbers);


?>