<?php
$day = 29;
$month = 2;
$year = 2025;

if($day > 31 || $day < 1 || $month > 12 || $month < 1 || $year < 0){
    echo "Invalid date";
}else if($day == 31 && ($month == 2 || $month == 4 || $month == 6 || $month == 9 || $month == 11)){
    echo "Invalid date";
}else if($day == 30 && $month == 2){
    echo "Invalid Date";
}else if($day == 29 && $month == 2 && ($year%4 != 0 || ($year%400==0 && $year%100!=0))){
    echo "Invalid Date";
}else{
    echo "Valid Date";
}
?>