<?php
$link = mysqli_connect("localhost", "root", "","demo");
if($link == false)
{
die("Connection could not be set up ". mysqli_connect_error());
}
$sql = "SELECT first_name FROM students WHERE marks =  (SELECT  MAX(marks) FROM students)";

if($result = mysqli_query($link, $sql))
{
    while($row = mysqli_fetch_array($result))
{

    echo "The student having highest marks is ".$row['first_name'];
}

}

mysqli_close($link);