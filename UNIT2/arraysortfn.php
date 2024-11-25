. Write a PHP script to sort the following associative array :
array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40") in
a) ascending order sort by value
b) ascending order sort by Key
c) descending order sorting by Value
d) descending order sorting by Key
<?php
// Echo a message indicating the start of the section for sorting associative arrays in ascending order by value
echo "
Associative array : Ascending order sort by value";

// Define an associative array and sort it in ascending order by value using asort()
$array2 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
asort($array2);

// Iterate through the sorted array and echo the key-value pairs
foreach ($array2 as $y => $y_value) {
    echo "Age of " . $y . " is : " . $y_value . "";
}

// Echo a message indicating the start of the section for sorting associative arrays in ascending order by key
echo "
Associative array : Ascending order sort by Key";

// Define an associative array and sort it in ascending order by key using ksort()
$array3 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
ksort($array3);

// Iterate through the sorted array and echo the key-value pairs
foreach ($array3 as $y => $y_value) {
    echo "Age of " . $y . " is : " . $y_value . "";
}

// Echo a message indicating the start of the section for sorting associative arrays in descending order by value
echo "
Associative array : Descending order sorting by Value";

// Define an associative array and sort it in descending order by value using arsort()
$age = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
arsort($age);

// Iterate through the sorted array and echo the key-value pairs
foreach ($age as $y => $y_value) {
    echo "Age of " . $y . " is : " . $y_value . "";
}

// Echo a message indicating the start of the section for sorting associative arrays in descending order by key
echo "
Associative array : Descending order sorting by Key";

// Define an associative array and sort it in descending order by key using krsort()
$array4 = array("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40");
krsort($array4);

// Iterate through the sorted array and echo the key-value pairs
foreach ($array4 as $y => $y_value) {
    echo "Age of " . $y . " is : " . $y_value . "";
} 


Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6 
List of seven lowest temperatures : 60, 62, 63, 63, 64, 
List of seven highest temperatures : 76, 78, 79, 81, 85,