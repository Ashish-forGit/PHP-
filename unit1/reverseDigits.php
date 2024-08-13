<?php
$num = 1234;
$numStr = (string)$num;
$reversedStr = "";

for ($i = strlen($numStr) - 1; $i >= 0; $i--) {
    $reversedStr .= $numStr[$i];
}


$reversedNum = (int)$reversedStr;

echo "The reversed number is: $reversedNum";
?>
