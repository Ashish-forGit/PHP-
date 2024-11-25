<?php
// $numbers = [3, 7, 2, 8, 1, 4, 10, 5];

// // Step 1: Filter out even numbers
// $oddNumbers = [];
// foreach ($numbers as $num) {
//     if ($num % 2 !== 0) {
//         $oddNumbers[] = $num;
//     }
// }

// // Step 2: Square the remaining odd numbers
// $squaredNumbers = [];
// foreach ($oddNumbers as $num) {
//     $squaredNumbers[] = $num * $num;
// }

// // Step 3: Sort the squared numbers in descending order
// rsort($squaredNumbers);

// // Step 4: Calculate the sum of the squared numbers
// $sum = 0;
// foreach ($squaredNumbers as $num) {
//     $sum += $num;
// }

// print_r($squaredNumbers); 
// // Output: [49, 25, 9, 1]
// echo "Sum: " . $sum; // Output: Sum: 84




$fruits = ["apple", "banana", "orange", "grape"];
$search = "orange";
$replace = "kiwi";

// Search for the string and replace if found
$index = array_search($search, $fruits);
if ($index !== false) {
    $fruits[$index] = $replace;
} else {
    // Add the new string to the end if not found
    $fruits[] = $replace;
}

print_r($fruits); // Output: ["apple", "banana", "kiwi", "grape"]


?>
