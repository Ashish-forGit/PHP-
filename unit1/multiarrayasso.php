<?php
// Creating a multidimensional array
$students = array(
    array(
        "name" => "Alice",
        "age" => 20,
        "courses" => array("Math", "Physics", "Chemistry")
    ),
    array(
        "name" => "Bob",
        "age" => 22,
        "courses" => array("Biology", "English", "History")
    ),
    array(
        "name" => "Charlie",
        "age" => 21,
        "courses" => array("Computer Science", "Math", "English")
    )
);
print_r($students);


// Displaying the multidimensional array
echo "<table border=2px>";
foreach ($students as $key=>$student) {
    echo "<tr>";
        echo $student;

        foreach($student as $s1)
    {
echo "<td> $s1 </td>";
    }
    echo "</tr>";
}
?>
