<?php
$link = mysqli_connect('localhost','root', "","demo");
if($link == false)
{
    die("Could not connect". mysqli_connect_error());
}

$sql = "SELECT first_name FROM students WHERE first_name LIKE 'M%'";

if($result= mysqli_query($link, $sql))
{
    while($row = mysqli_fetch_array($result)){

        echo $row['first_name'];
 
 }
}
else{
    echo "Query could not be executed";
}


mysqli_close($link);
