<?php
$array1 = array('a', 'b', 'c', 'd', 'e');
$array2 = array('c', 'd', 'e', 'f', 'g');


$result1 = array_diff($array1, $array2);
echo "Elements in \$array1 but not in \$array2:\n";
print_r($result1);


?>