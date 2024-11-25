<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$Intvar = (string) $a;
// $b = (unset) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($Intvar);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?>