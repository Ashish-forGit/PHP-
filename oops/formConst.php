<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>

<?php

class Student {
    public $name;
    public $age;
    public $course;


    public function __construct($name, $age, $course) {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    
    public function displayDetails() {
        echo "<h3>Student Details:</h3>";
        echo "Name: " . $this->name . "<br>";
        echo "Age: " . $this->age . "<br>";
        echo "Course: " . $this->course . "<br>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form values
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];
    
    $student = new Student($name, $age, $course);

    $student->displayDetails();
}

?>

<h2>Student Information Form</h2>
<form method="POST" action="">
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="age">Age:</label><br>
    <input type="number" id="age" name="age" required><br><br>
    
    <label for="course">Course:</label><br>
    <input type="text" id="course" name="course" required><br><br>
    
    <input type="submit" value="Submit">
</form>

</body>
</html>
