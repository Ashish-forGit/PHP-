<?php
function removeElem(&$arr, &$index) {
  
    if (isset($arr[$index])) {
       
        $removedElement = $arr[$index];
        
        
        unset($arr[$index]);

        
        $arr = array_values($arr);

    
        return $removedElement;
    } else {
        return null; 
    }
}

$xyz = array(1, 2, 3, 4, 5, 6);
$i = 2;

$removedElem = removeElem($xyz, $i);

echo "Removed Element: $removedElem\n";
print_r($xyz); 
?>
