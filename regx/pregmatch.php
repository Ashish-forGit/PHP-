<?php
$string = "PHP is a akhdf vdgakfucekwa php dcgkcvau cevfcue";

$exp= preg_match("/PHP/", $string);

$exp1= preg_match_all("/PHP/i", $string, $array);

if ($exp) {
  
    echo "PHP is found in the string";
} else{
    echo "PHP is not found in the string";
}
echo "<br>";
if ($exp1) {
  
    echo "PHP is found in the string";
} else{
    echo "PHP is not found in the string";
}

echo "<pre>";
print_r($array);
echo "<pre>";
?>