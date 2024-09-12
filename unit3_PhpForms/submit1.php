<?php
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";



    echo "Welcome ". $_REQUEST["name"] ."<br>".
            "Your password is :". $_REQUEST["password"]."<br>";

    echo $_SERVER["PHP_SELF"];


?>