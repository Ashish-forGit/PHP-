<?php
session_start();
// Echo session variables that were set on previous page
echo "Name is " . $_SESSION["username"] . ".<br>";
// echo "CGPA is " . $_SESSION["cgpa"] . ".";
?>