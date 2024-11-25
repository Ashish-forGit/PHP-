<?php
$link = mysqli_connect('localhost','root', "","demo");
if($link == false)
{
    die("Could not connect". mysqli_connect_error());
}

$sql = "SELECT ucase(first_name) FROM students";

if($result= mysqli_query($link, $sql))
{
    while($row = mysqli_fetch_array($result)){

        echo $row['ucase(first_name)'];
        echo "<br>";
 
 }
}
else{
    echo "Query could not be executed";
}


mysqli_close($link);
