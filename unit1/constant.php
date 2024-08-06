<?php

define("TAX_RATE", 0.5); 
$productPrice = 100; 
$finalPrice = $productPrice + ($productPrice * TAX_RATE);


echo "Product Price: $" . $productPrice,"\n";
echo "\n" ,"Tax Rate: " . (TAX_RATE * 100) . "%\n";
echo "Final Price after Tax: $" . $finalPrice . "\n";

define("TAX_RATE", 0.20); 
echo "Attempted new Tax Rate: " . (TAX_RATE * 100) . "%\n"; 
?>
