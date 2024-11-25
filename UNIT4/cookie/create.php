<?php
//  $cookie_name="user";
//  $cookie_value="Neha";

 setcookie("user", "Neha", time()+60, "/");

?>
<html>
<body>
<?php
//  echo $_COOKIE["user"];
 if(!isset($_COOKIE["user"]))    //in case you want to check whether the user has disabled the cookie.
    {
        echo "cookie is not set";
        }
        else{
            echo $_COOKIE["user"];
        }
?>

</body>
</html>





