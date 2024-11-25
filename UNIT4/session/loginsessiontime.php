<?php
// Set session cookie parameters for a 10-minute session (600 seconds)
$session_duration = 10; // 5seconds

// Set the cookie parameters before starting the session
session_set_cookie_params($session_duration);

// Start the session
session_start();

// Check if session is already set
if (!isset($_SESSION['username'])) {
    // Set session variables if not already set
    $_SESSION['username'] = "JohnDoe";
    echo "Session started. Welcome, " . $_SESSION['username'] . "!";
} else {
    echo "Welcome back, " . $_SESSION['username'] . "!";
}
?>
<a href="session_display.php">Go to display page</a>
