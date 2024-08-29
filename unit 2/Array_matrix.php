<?php


$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];


echo "Before Transpose of Matrix<br>";
foreach($matrix  as $row){
    echo implode(" ", $row) . "\n"."<br>";
}



function sumRows($matrix) {
    $rowSums = [];
    foreach ($matrix as $row) {
        $rowSums[] = array_sum($row);
    }
    return $rowSums;
}

function transposeMatrix($matrix) {
    $transposed = [];
    foreach ($matrix as $row) {
        foreach ($row as $key => $value) {
            $transposed[$key][] = $value;
        }
    }
    return $transposed;
}

// Output the sum of each row
$rowSums = sumRows($matrix);
echo "Sum of each row:\n"."<br>";
foreach ($rowSums as $index => $sum) {
    echo "Row " . ($index + 1) . " sum: $sum\n"."<br>";
}


$transposedMatrix = transposeMatrix($matrix);
echo "\nTransposed matrix:\n"."<br>";
foreach ($transposedMatrix as $row) {
    echo implode(" ", $row) . "\n"."<br>";
}

?>
