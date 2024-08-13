<?php
$start = 1;
$num = 5;
$result = 1;

while ($start <= $num) {
    $result *= $start;
    $start++;
}

echo "The factorial of $num is: " . $result;
?>
