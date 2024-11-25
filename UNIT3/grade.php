<!-- Exercise: Student Grade Calculator
Task:
Create a form where a student can input their marks for three subjects. Based on the total marks, calculate and display the student's grade (A, B, C, D, or F) according to the following criteria:

A: 90% and above
B: 80% – 89%
C: 70% – 79%
D: 60% – 69%
F: Below 60%
Requirements:
Create a form that allows input for three subject marks.
Use PHP to calculate the total percentage.
Display the grade based on the total percentage. -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Grade Calculator</title>
</head>
<body>
    <h2>Calculate Student Grade</h2>
    
    <form method="POST" action="">
        <label for="subject1">Marks in Subject 1:</label>
        <input type="number" name="subject1" required><br><br>

        <label for="subject2">Marks in Subject 2:</label>
        <input type="number" name="subject2" required><br><br>

        <label for="subject3">Marks in Subject 3:</label>
        <input type="number" name="subject3" required><br><br>

        <input type="submit" name="calculate" value="Calculate Grade">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get the marks from the form
        $subject1 = $_POST['subject1'];
        $subject2 = $_POST['subject2'];
        $subject3 = $_POST['subject3'];

        // Calculate the total and percentage
        $totalMarks = $subject1 + $subject2 + $subject3;
        $percentage = ($totalMarks / 300) * 100;

        // Determine the grade based on the percentage
        if ($percentage >= 90) {
            $grade = "A";
        } elseif ($percentage >= 80) {
            $grade = "B";
        } elseif ($percentage >= 70) {
            $grade = "C";
        } elseif ($percentage >= 60) {
            $grade = "D";
        } else {
            $grade = "F";
        }

        // Display the result
        echo "<h3>Total Marks: $totalMarks / 300</h3>";
        echo "<h3>Percentage: $percentage%</h3>";
        echo "<h3>Grade: $grade</h3>";
    }
    ?>
</body>
</html>
