<?php

$year = 2024;

$result = ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) ? "Leap Year" : "Not a Leap Year";

echo $result;

?>