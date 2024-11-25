<?php
$arr = array(
        array(1,2,3),
        array(4,5,6),
        array(7,8,9)
    );
$row = count($arr);
$col = count($arr[0]);

for($i=0; $i<$row; $i++){
    $sum = 0; 
    for($j=0; $j<$col; $j++){
        $sum += $arr[$i][$j];
    }
    echo "Sum of $i row: $sum <br>";
}
?>