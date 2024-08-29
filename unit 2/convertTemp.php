<?php

function convertTemp($celsius) {
    $fahrenheit = ($celsius * 9/5) + 32;
    return $fahrenheit;
    
}
 
$cels =-66;
$far = convertTemp($cels);
echo "Farenheit $far ";


?>