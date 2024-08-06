<?php

$a = 10;
$b = 5;
$c = 5;
$d = 5;
$e = 1;

$sum = $a + $b;
$diff = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
$remainder = $a % $b;

$x = 20;
$y = 15;

$x += $y;
$y -= 5;

$count = 0;
$count++;
$count--;

$isEqual = ($a == $b);
$isNotEqual = ($a != $b);
$isGreater = ($a > $b);
$isLess = ($a < $b);
$isGreaterOrEqual = ($a >= $b);
$isLessOrEqual = ($a <= $b);

$finalComplexSol = ($a + $b) * $c / ($d - $e);

echo "Sum: $sum\n";
echo "<br>";
echo "Difference: $diff\n";
echo "<br>";
echo "Product: $product\n";
echo "<br>";
echo "Quotient: $quotient\n";
echo "<br>";
echo "Remainder: $remainder\n";
echo "<br>";
echo "X after addition assignment: $x\n";
echo "<br>";
echo "Y after subtraction assignment: $y\n";
echo "<br>";
echo "Count after increment and decrement: $count\n";
echo "<br>";
echo "Is Equal: $isEqual\n";
echo "<br>";
echo "Is Not Equal: $isNotEqual\n";
echo "<br>";
echo "Is Greater: $isGreater\n";
echo "<br>";
echo "Is Less: $isLess\n";
echo "<br>";
echo "Is Greater or Equal: $isGreaterOrEqual\n";
echo "<br>";
echo "Is Less or Equal: $isLessOrEqual\n";
echo "<br>";
echo "final complex solution: $finalComplexSol\n";

?>
