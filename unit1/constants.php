<?php
// define("PI", 3.14159);
// $radius = 5;
// $circumference = 2 * PI * $radius;
// $area = PI * $radius * $radius;

// echo "Circumference: $circumference\n";
// echo "Area: $area\n";


define("TAX","0.1");
$price= 20;
$final_price = $price + TAX*$price;
echo "The final price is $final_price";
define("TAX","0.2");
$final_price = $price + TAX*$price;
echo "The final price is $final_price";
?>