<?php
$num = 1234;
$sum = 0;


$numStr = (string)$num;

for ($i = 0; $i < strlen($numStr); $i++) {
    $digit = (int)$numStr[$i];
    $sum += $digit;
}

echo "The sum of the digits of $num is: $sum";
?>
