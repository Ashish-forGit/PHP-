<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>
    <h1>User Registration Form</h1>
    <form method="POST">
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="security_question">Answer to Security Question:</label><br>
        <input type="text" id="security_question" name="security_question" required><br><br>

        <button type="submit">Register</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $securityAnswer = trim($_POST['security_question']);

        $errors = [];

        // Email validation using regex
        if (!preg_match('/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/', $email)) {
            $errors[] = "Invalid email format.";
        }

        // Password validation using regex: At least 8 characters, 1 special character
        if (!preg_match('/^(?=.*[\W_]).{8,}$/', $password)) {
            $errors[] = "Password must be at least 8 characters long and include at least one special character.";
        }

        // If there are no errors, display success message
        if (empty($errors)) {
            echo "<h3>Registration Successful!</h3>";
            echo "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>";
            echo "<p><strong>Security Question Answer:</strong> " . htmlspecialchars($securityAnswer) . "</p>";
        } else {
            // Display errors
            echo "<h3>Error(s) in Registration:</h3>";
            echo "<ul>";
            foreach ($errors as $error) {
                echo "<li>" . htmlspecialchars($error) . "</li>";
            }
            echo "</ul>";
        }
    }
    ?>
</body>
</html>
