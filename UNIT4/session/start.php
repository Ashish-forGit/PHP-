<?php
// Start the session
session_start();
// Set session variables
$_SESSION["name"] = "Manoj";
$_SESSION["cgpa"] = 7.6;
echo "Session variables are set.";
?>