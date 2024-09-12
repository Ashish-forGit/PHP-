<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" placeholder="Enter your name"> <br>

        <label for="name">Password</label>
        <input type="password" name="password" placeholder="Enter your password"> <br>

        <input type="submit" name="save">

    </form>






    <?php
    
    if (isset($_POST['save'])) {
        echo "Welcome ". $_POST["name"] . "<br>".
        "Your Password id ". $_POST["password"];
    }
    ?>
</body>
</html>