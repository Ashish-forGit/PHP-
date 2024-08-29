<?php
function addSuffix($suffix_var) {
    $prefix = "Hello ";

    
    $word = $prefix . $suffix_var;

    return "$word";
}

echo addSuffix("world");   
?>
