<?php
session_start();
$_SESSION["USERNAME"]="JASSI";
?>
<html>
<body>
<?php
if(isset($_SESSION["USERNAME"]))
{
    echo "the session is created", $_SESSION["USERNAME"];
}
else{
    echo "The Session is not set";
}
?>
<a href="displaysession.php">Display session</a>
</body>
</html>
