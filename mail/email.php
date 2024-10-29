<?php
$to="ashish93343@gmail.com";
$subject="hi this is test email";
$message="Test Email";
$from="ishak93343@gmail.com";
$headers = "From: $from\r\n";
mail($to,$subject,$message,$headers);
echo "mailSent";
?>