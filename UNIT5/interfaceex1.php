<?php
interface Authenticator {
    public function authenticate($username, $password);
}
class AdminAuthenticator implements Authenticator {
    public function authenticate($username, $password) {
        if ($username === 'admin' && $password === 'admin123') {
            echo "Admin login successful!";
        } else {
            echo "Admin login failed!";
        }
    }
}
class UserAuthenticator implements Authenticator {
    public function authenticate($username, $password) {
        if ($username === 'user' && $password === 'user123') {
            echo "User login successful!";
        } else {
            echo "User login failed!";
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $authenticator = ($role === 'admin') ? new AdminAuthenticator() : new UserAuthenticator();
    $authenticator->authenticate($username, $password);
}
?>
<form method="post">
    <label>Role: 
        <select name="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </label>
    <label>Username: <input type="text" name="username"></label>
    <label>Password: <input type="password" name="password"></label>
    <button type="submit">Login</button>
</form>
