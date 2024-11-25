<?php
// Start the session
session_start();

// Destroy the session
session_unset();    // Unset all session variables
session_destroy();  // Destroy session data

echo "Session destroyed. All session data has been cleared.";
?>
<a href="session_start.php">Start a new session</a>
