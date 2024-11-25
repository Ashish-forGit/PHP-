<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form with Constructor</title>
</head>
<body>

<form method="POST" action="">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required><br>

    <label for="course">Course:</label>
    <input type="text" name="course" id="course" required><br>

    <input type="submit" value="Submit">
</form>

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

    public function displayInfo() {
        echo "Student Name: $this->name<br>";
        echo "Age: $this->age<br>";
        echo "Course: $this->course<br>";
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    // Create a Student object
    $student = new Student($name, $age, $course);

    // Display the student information
    $student->displayInfo();
}
?>

</body>
</html>
