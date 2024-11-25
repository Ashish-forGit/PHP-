<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
if(isset($_SESSION["username"]))
{
    echo "My username is " . $_SESSION["username"];
}
else{
    echo "Please login to see profile";
}

?>

</body>
</html>