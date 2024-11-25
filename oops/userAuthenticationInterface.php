<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php
    
    interface Authenticator {
        public function authenticate(string $username, string $password): bool;
    }

    class AdminAuthenticator implements Authenticator {
        public function authenticate(string $username, string $password): bool {
            // Updated admin credentials
            if ($username === 'admin' && $password === 'admin1234') {
                return true;
            }
            return false;
        }
    }

    class UserAuthenticator implements Authenticator {
        public function authenticate(string $username, string $password): bool {
            // Updated user credentials
            if ($username === 'user' && $password === 'user1234') {
                return true;
            }
            return false;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $userType = $_POST['userType'];

        // Select the appropriate authenticator based on user type
        $authenticator = null;
        if ($userType === 'admin') {
            $authenticator = new AdminAuthenticator();
        } else {
            $authenticator = new UserAuthenticator();
        }

        // Authenticate the user
        if ($authenticator->authenticate($username, $password)) {
            echo 'Authentication successful!';
        } else {
            echo 'Authentication failed.';
        }
    }
    ?>

    <form method="POST">
        <label for="userType">User Type:</label>
        <select name="userType" id="userType">
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
        <br> <br>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        <button type="submit">Login</button>
    </form>
</body>
</html>
