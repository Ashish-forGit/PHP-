
<?php
//sanitize string
$str = 20;
// $newstr = filter_var($str, FILTER_SANITIZE_STRING);
if(filter_var($str, FILTER_VALIDATE_INT))
{
  echo "Valid";
}
else
{
    echo  "not valid";
}
// echo $newstr;
// echo "<br>";
