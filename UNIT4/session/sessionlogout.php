<?php
   session_start();
   unset($_SESSION["username"]);
   unset($_SESSION["password"]);
   // destroy_session();
   echo 'You have been logged out from the session';
?>