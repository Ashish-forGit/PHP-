


<?php
$day = 29;
$month = 2;
$year = 2024;

$isLeapYear = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);

if ($month < 1 || $month > 12) {
    echo "Invalid month.";
} elseif ($day < 1 || $day > 31) {
    echo "Invalid day.";
} elseif (($month == 4 || $month == 6 || $month == 9 || $month == 11) && $day > 30) {
    echo "Invalid day for this month.";
} elseif ($month == 2 && $day > 29) {
    echo "Invalid day for February.";
} elseif ($month == 2 && $day == 29 && !$isLeapYear) {
    echo "Invalid day for February in a non-leap year.";
} elseif ($year < 1) {
    echo "Invalid year.";
} else {
    echo "The date is valid.";
}

?>
