<?php
$to="anisha11kumari@gmail.com";
$subject="hi this is test email";
$message="hello baby";
$from="ashish93343@gmail.com";
$headers = "From: $from";

for ($i=0; $i < 5; $i++) { 
    if (mail($to,$subject,$message,$headers)) {
        # code...
        echo "mailSent";
    } else{
        echo "mailNotSent";
    }
}



?>
<!-- ; For Win32 only. in php.ini xampp apache=>config=> php.ini
; https://php.net/sendmail-from
;sendmail_from = ashish93343@gmail.com -->

<!-- [mail function] in php.ini
; For Win32 only.
; https://php.net/smtp
SMTP=smtp.gmail.com
; https://php.net/smtp-port
smtp_port=25 -->

<!-- [mail function]
; For Win32 only.
; https://php.net/smtp
SMTP=smtp.gmail.com
; https://php.net/smtp-port
smtp_port=25

; For Win32 only.
; https://php.net/sendmail-from
sendmail_from = ashish93343@gmail.com

; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; https://php.net/sendmail-path
sendmail_path = C:\xampp\sendmail\sendmail.exe -->


<!-- ; For Unix only.  You may supply arguments as well (default: "sendmail -t -i").
; https://php.net/sendmail-path
;sendmail_path = C:\xampp\sendmail\sendmail.exe -->

<!-- c drive => xamp=> sendmail folder=> sendmail.ini=>sendmail.exe

smtp_server=smtp.gmail.com

; smtp port (normally 25)

smtp_port=587 -->

<!-- 
error_logfile=error.log

; create debug log as debug.log (defaults to same directory as sendmail.exe)
; uncomment to enable debugging

debug_logfile=debug.log

; if your smtp server requires authentication, modify the following two lines

auth_username=ashish93343@gmail.com
auth_password=rsrk lfoj sfdn bogf -->

<!-- force_sender=ashish93343@gmail.com -->