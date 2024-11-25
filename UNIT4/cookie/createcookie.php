<?php

$cookie_name="user";
$cookie_value="Sonia";
// $cookie_value="";            //for if statement
setcookie("user", "sonia", time() + (86400), "/"); 
 //60*60*24=86400

// setcookie($cookie_name, $cookie_value, time() + 5, "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </body>
    <?php 
    // echo $_COOKIE[$cookie_name];
    if(!isset($_COOKIE["user"]))    //in case you want to check whether the user has disabled the cookie.
    {
        echo "cookie is not set";
        }
        else{
            echo $_COOKIE[$cookie_name];
        }
        
    ?>
</body>
</html>