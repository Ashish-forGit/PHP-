<?php

$url= "https://goo.com";
$url= "https:_/_goo.com";
$url= filter_var($url, FILTER_SANITIZE_URL);
echo $url;
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    # code...
    echo("$url is a valid url");
}else{
    echo("$url is not a valid url");
}

echo "<br>";

?>