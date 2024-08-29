<?php
function swap(&$a, &$b) {
    $temp = $a;
    $a = $b;
    $b = $temp;
    return "$a , $b";
}

$x = 3;
$y = 4;

echo "Un-Swapped values: "."$x". " $y <br>" ; 
$result = swap($x, $y);

echo "Swapped values: " . $result; 
?>
