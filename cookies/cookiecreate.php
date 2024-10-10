<?php
    $cookie_name ="user";
    $cookie_value ="adi";
    setcookie($cookie_name,"", time() + (60),'/');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
        <?php
        if (isset($_COOKIE["user"])) {
            echo "The cookie is set with variable name : ",$_COOKIE[$cookie_name];
        }

        else {
            echo "Cookie is not set";
        }
        ?>
    
</body>
</html>