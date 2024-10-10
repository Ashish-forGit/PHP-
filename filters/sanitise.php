<?php
$var = "<h1>Hello  World</h1>";
$newStr  = filter_var($var , FILTER_SANITIZE_STRING);
echo $newStr;
echo "<br>";
?>