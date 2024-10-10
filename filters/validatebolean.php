<?php
$var = false;
var_dump( filter_var($var, FILTER_VALIDATE_INT));

if (filter_var($var, FILTER_VALIDATE_INT)) {
    # code...
    echo "<br> $var is Integer. ";
}else{
    echo "<br> $var is not Integer. ";
}
?>