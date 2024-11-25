<!-- Exercise 2: Employee Shift Management
Write a PHP script that manages a company's employee 
shift schedule using a multidimensional associative array.
 Each employee has a name, department, 
 and a list of shifts (day, time, and hours worked). 
 The program should calculate the total hours worked
  for each employee and display their department, 
  shifts, and total work hours. -->


<?php
// Multidimensional associative array storing employee shift data
$employees = [
    "Michael" => [
        "Department" => "Sales",
        "Shifts" => [
            ["Day" => "Monday", "Time" => "9 AM - 5 PM", "Hours" => 8],
            ["Day" => "Wednesday", "Time" => "9 AM - 5 PM", "Hours" => 8],
            ["Day" => "Friday", "Time" => "9 AM - 4 PM", "Hours" => 7]
        ]
    ],
    "Sarah" => [
        "Department" => "HR",
        "Shifts" => [
            ["Day" => "Tuesday", "Time" => "10 AM - 6 PM", "Hours" => 8],
            ["Day" => "Thursday", "Time" => "10 AM - 5 PM", "Hours" => 7]
        ]
    ],
    "David" => [
        "Department" => "IT",
        "Shifts" => [
            ["Day" => "Monday", "Time" => "8 AM - 4 PM", "Hours" => 8],
            ["Day" => "Wednesday", "Time" => "8 AM - 4 PM", "Hours" => 8],
            ["Day" => "Friday", "Time" => "8 AM - 2 PM", "Hours" => 6]
        ]
    ]
];

// Iterate through the array and display each employee's total hours worked
foreach ($employees as $employee => $details) {
    echo "Employee: " . $employee . "<br>";
    echo "Department: " . $details["Department"] . "<br>";
    
    $totalHours = 0;
    foreach ($details["Shifts"] as $shift) {
        echo "Shift Day: " . $shift["Day"] . ", Time: " . $shift["Time"] . ", Hours: " . $shift["Hours"] . "<br>";
        $totalHours += $shift["Hours"];
    }
    
    echo "Total Hours Worked: " . $totalHours . "<br><br>";
}
?>