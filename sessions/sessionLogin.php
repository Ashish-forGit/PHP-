<?php
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <h2>Enter Username And Password</h2>
    <?php
        $msg="";
        if(isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])){
            if($_POST['username']==123 && $_POST['password']==123){
                $_SESSION['username']=123;
                echo "You have entered valid user name and password";
            }
            else{
                $msg="wrong username or password";
            }
        }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        User Name:<input type="text" name="username"></br><br>
        Password:<input type="password" name="password"><br>
        <button type ="submit" name="login">Login</button>
        <h4><?php echo $msg; ?></h4>
    </form>
    <a href="myprofile.php">My profile</a>
    <a href="sessionlogout.php">Logout</a>
    
</body>
</html>