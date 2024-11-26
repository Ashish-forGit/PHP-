<!DOCTYPE html>
<html>
<head>
    <title>Student Management System</title>
</head>
<body>
    <?php
    
    $link = mysqli_connect("localhost", "root", "", "demo");

    if ($link === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Create the student table if it doesn't exist
    $sql = "CREATE TABLE IF NOT EXISTS student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(100) NOT NULL,
        lastName VARCHAR(100) NOT NULL,
        age INT NOT NULL,
        grade INT NOT NULL
    )";

    if (!mysqli_query($link, $sql)) {
        die("Error creating table: " . mysqli_error($link));
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $operation = $_POST['operation'];

        if ($operation === 'insert') {
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $age = $_POST['age'];
            $grade = $_POST['grade'];

            // Corrected parameter types for binding
            $stmt = $link->prepare("INSERT INTO student (firstName, lastName, age, grade) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssii", $firstName, $lastName, $age, $grade);

            if ($stmt->execute()) {
                echo "Record added successfully!<br>";
            } else {
                echo "Error: " . $stmt->error . "<br>";
            }

            $stmt->close();
        } 
    }

    $result = mysqli_query($link, "SELECT * FROM student");
    ?>

    <h2>Student Management System</h2>

    <form method="POST" action="">
        <h3>Manage Student</h3>
        <label for="id">Student ID :</label>
        <input type="number" name="id" id="id" placeholder="Enter id"><br>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age" required><br>

        <label for="grade">Grade:</label>
        <input type="number" name="grade" id="grade" required><br>

        <button type="submit" name="operation" value="insert">Insert</button>
    </form>

    <h3>Student Records</h3>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Age</th>
            <th>Grade</th>
        </tr>

        <?php
        // Display records
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['firstName']}</td>
                    <td>{$row['lastName']}</td>
                    <td>{$row['age']}</td>
                    <td>{$row['grade']}</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No records found.</td></tr>";
        }
        ?>
    </table>

    <?