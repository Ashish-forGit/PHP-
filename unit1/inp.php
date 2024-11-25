<?php
// Prompt the user for input
echo "Enter the length of the rectangle: ";
$length = trim(fgets(STDIN));

echo "Enter the width of the rectangle: ";
$width = trim(fgets(STDIN));

// Calculate the area
$area = $length * $width;

// Display the result
echo "The area of the rectangle is: " . $area . "\n";
?>