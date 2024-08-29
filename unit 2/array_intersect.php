<?php
$a =array("A"=>"red","B"=>"blue","C"=>"yellow");
$b = array("D"=>"green","E"=>"blue","F"=>"red");
$c = array("red","blue");

print_r(array_intersect($a,$b,$c));

?>