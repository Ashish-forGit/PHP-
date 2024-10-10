<?php
    //check if form was submitted
    if (isset($_POST['username'])) {
        //store the username in a cookie for 1 hour
        setcookie('last_username', $_POST['username'], time() + (3600), "/");
        $username = $_POST['username'];
    } elseif (isset($_COOKIE['last_username'])) {
        //use the cookie value if available
        $username = $_COOKIE['last_username'];
    } else {
        $username = '';
    }
?>
<!--LOGIN Form-->
<form method="POST" action="">
    <label>Username:</label>
    <input type="text" name="username" value="<?php echo htmlspecialchars($username, ENT_QUOTES, 'UTF-8'); ?>">
    <br>
    <label>Password:</label>
    <input type="password" name="password" required>
    <br>
    <button type="submit">Login</button>
</form>