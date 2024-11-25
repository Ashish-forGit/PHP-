<?php
$c;
function sum($a, $b)
{
    
   global $c;
    return $c=$a+$b;

}
sum(2,4);
echo $c;
