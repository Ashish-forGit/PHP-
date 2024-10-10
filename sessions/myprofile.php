<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: sessionlogin.php"); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="sessionlogout.php">Logout</a>
</body>
</html>