<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Prompt the user for the first number
echo "Enter the first number: ";
$num1 = trim(fgets(STDIN)); // Read input and remove any extra whitespace

// Prompt the user for the second number
echo "Enter the second number: ";
$num2 = trim(fgets(STDIN)); // Read input and remove any extra whitespace

// Calculate the sum
$sum = $num1 + $num2;

// Display the result
echo "The sum of $num1 and $num2 is: $sum\n";
?>
</body>
</html>