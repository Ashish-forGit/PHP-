<?php
// Set the session cookie parameters before starting the session
session_set_cookie_params(10 * 60); // 10 minutes

// Start the session
session_start();

// Display session data if session is still active
if (isset($_SESSION['username'])) {
    echo "Hello, " . $_SESSION['username'] . "! Your session is active.";
} else {
    echo "Session has expired or not started.";
}
?>
<a href="session_destroy.php">End session</a>
