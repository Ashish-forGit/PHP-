<?php
$a = 10;
$b = 20;
$c = 15;

$max = ($a >= $b) ? ($a >= $c ? $a : $c) : ($b >= $c ? $b : $c);

echo "The largest number is: " . $max;
?>