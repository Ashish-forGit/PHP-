<?php
$to="ashish93343@gmail.com";
$subject="hi this is test email";
$message="Test Email";
$from="ishak93343@gmail.com";
$headers = "From: $from";

if (mail($to,$subject,$message,$headers)) {
    # code...
    echo "mailSent";
} else{
    echo "mailNotSent";
}


?>
<!-- //smtp_port = 1025
change in php.ini / then mailhog run -->