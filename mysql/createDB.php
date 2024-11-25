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

    
    $sql = "CREATE TABLE IF NOT EXISTS student (
        id INT AUTO_INCREMENT PRIMARY KEY,
        firstName VARCHAR(100) NOT NULL,
        lastName VARCHAR(100) NOT NULL,
        email VARCHAR(100) UNIQUE NOT NULL,
        city VARCHAR(100),
        marks INT NOT NULL
    )";

    if (!mysqli_query($link, $sql)) {
        die("Error creating table: " . mysqli_error($link));
    }

    // Insert, Update, or Delete data from form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $operation = $_POST['operation'];

        if ($operation === 'insert') {
            // Insert new student
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $marks = $_POST['marks'];

            $stmt = $link->prepare("INSERT INTO student (firstName, lastName, email, city, marks) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssi", $firstName, $lastName, $email, $city, $marks);

            if ($stmt->execute()) {
                echo "Record added successfully!<br>";
            } else {
                echo "Error: " . $stmt->error . "<br>";
            }

            $stmt->close();
            
        } 
        elseif ($operation === 'update') {
            
            $id = $_POST['id'];
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $marks = $_POST['marks'];

            $stmt = $link->prepare("UPDATE student SET firstName=?, lastName=?, email=?, city=?, marks=? WHERE id=?");
            $stmt->bind_param("sssiii", $firstName, $lastName, $email, $city, $marks, $id);

            if ($stmt->execute()) {
                echo "Record updated successfully!<br>";
            } else {
                echo "Error: " . $stmt->error . "<br>";
            }

            $stmt->close();
        } elseif ($operation === 'delete') {
            // Delete student
            $id = $_POST['id'];

            $stmt = $link->prepare("DELETE FROM student WHERE id=?");
            $stmt->bind_param("i", $id);

            if ($stmt->execute()) {
                echo "Record deleted successfully!<br>";
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
        <label for="id">Student ID (for Update/Delete):</label>
        <input type="number" name="id" id="id" placeholder="Leave empty for new entry"><br>

        <label for="firstName">First Name:</label>
        <input type="text" name="firstName" id="firstName" required><br>

        <label for="lastName">Last Name:</label>
        <input type="text" name="lastName" id="lastName" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <label for="city">City:</label>
        <input type="text" name="city" id="city"><br>

        <label for="marks">Marks:</label>
        <input type="number" name="marks" id="marks" required><br>

        <button type="submit" name="operation" value="insert">Insert</button>
        <button type="submit" name="operation" value="update">Update</button>
        <button type="submit" name="operation" value="delete" onclick="return confirm('Are you sure you want to delete this record?');">Delete</button>
    </form>

    <h3>Student Records</h3>
    <table border='1'>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>City</th>
            <th>Marks</th>
        </tr>

        <?php
        // Display records
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['firstName']}</td>
                <td>{$row['lastName']}</td>
                <td>{$row['email']}</td>
                <td>{$row['city']}</td>
                <td>{$row['marks']}</td>
            </tr>";
        }
        ?>

    </table>

    <?php
    // Close the connection
    mysqli_close($link);
    ?>
</body>
</html>
