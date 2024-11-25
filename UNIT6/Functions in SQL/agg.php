<?php
$link = mysqli_connect('localhost','root', "","demo");
if($link == false)
{
    die("Could not connect". mysqli_connect_error());
}

$sql = "SELECT COUNT(marks) FROM students";

if($result= mysqli_query($link, $sql))
{
    while($row = mysqli_fetch_array($result)){

        echo $row['COUNT(marks)'];
 
 }
}
else{
    echo "Query could not be executed";
}


mysqli_close($link);
