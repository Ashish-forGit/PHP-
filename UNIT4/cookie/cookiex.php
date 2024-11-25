<?php
// Check if form was submitted
if (isset($_POST['username'])) {
    // Store the username in a cookie for 1 year
    setcookie('last_username', $_POST['username'], time() + (365 * 24 * 60 * 60));
    $username = $_POST['username'];
} elseif (isset($_COOKIE['last_username'])) {
    // Use the cookie value if available
    $username = $_COOKIE['last_username'];
} else {
    $username = '';
}
?>
<!-- Login Form -->
<form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" value="<?= htmlspecialchars($username) ?>" required>
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>
