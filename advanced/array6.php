<?php
$strings = ["apple", "banana", "cherry"];

function reverse_strings($strings): array {
    return array_map('strrev', $strings);
}

// Example usage:

$reversed = reverse_strings($strings);
print_r($reversed);
?>