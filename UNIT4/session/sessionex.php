<?php
session_start();

// Check if the form was submitted
if (isset($_POST['name']) && !empty(trim($_POST['name']))) {
    // Store the user's name in a session variable
    $_SESSION['username'] = $_POST['name'];
}

// Check if the session has a username
if (isset($_SESSION['username'])) {
    $name = $_SESSION['username'];
} else {
    $name = '';
}
?>

<!-- Form to submit the user's name -->
<form method="POST" action="">
    <label>Enter your name:</label>
    <input type="text" name="name" value="<?= htmlspecialchars($name) ?>" required>
    <button type="submit">Submit</button>
</form>

<!-- Greeting message -->
<?php if ($name): ?>
    <p>Hello, <?= htmlspecialchars($name) ?>! Welcome back!</p>
<?php endif; ?>
