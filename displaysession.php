<?php
session_start();
echo "THe Session is being created <br>";
echo "Welcome ", $_SESSION["USERNAME"];
?>
<html>
<body>
<a href="logoutsession.php">Log Out</a>
</body>
</html>