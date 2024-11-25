<?php
$var=22.9;

if(filter_var($var, FILTER_VALIDATE_EMAIL))
{
    echo "it is integer";
}
else
{
    echo "not integer";
}

?>