<?php
// Check if a theme was submitted
if (isset($_POST['theme'])) {
    // Save the selected theme in a cookie for 30 days
    setcookie('theme', $_POST['theme'], time() + (30 * 24 * 60 * 60));
    $theme = $_POST['theme'];
} elseif (isset($_COOKIE['theme'])) {
    // Retrieve the theme from the cookie
    $theme = $_COOKIE['theme'];
} else {
    // Default theme is light
    $theme = 'light';
}
// Apply the theme
$background = $theme == 'dark' ? '#333' : '#fff';
$color = $theme == 'dark' ? '#fff' : '#000';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dark Mode Preference</title>
</head>
<body style="background-color: <?= $background ?>; color: <?= $color ?>;">
    <h1>Welcome to the <?= ucfirst($theme) ?> Mode!</h1>
    <!-- Theme switch form -->
    <form method="POST" action="">
        <button type="submit" name="theme" value="light">Light Mode</button>
        <button type="submit" name="theme" value="dark">Dark Mode</button>
    </form>
</body>
</html>
