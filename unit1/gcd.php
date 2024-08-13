<?php
$num1 = 48;
$num2 = 18;

$originalNum1 = $num1;
$originalNum2 = $num2;


while ($num2 != 0) {
    $temp = $num2;
    $num2 = $num1 % $num2;
    $num1 = $temp;
}


echo "The GCD of $originalNum1 and $originalNum2 is: " . $num1;
?>
