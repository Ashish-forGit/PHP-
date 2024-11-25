<?php
$arr=[1,2,3,4];
print_r($arr);
function ele(&$arr,$in){
    unset($arr[$in]);

}
ele($arr,2);
print_r($arr);
?>