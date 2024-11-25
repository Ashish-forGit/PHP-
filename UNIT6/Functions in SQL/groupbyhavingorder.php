<?php
$link = mysqli_connect('localhost','root', "","demo");
if($link == false)
{
    die("Could not connect". mysqli_connect_error());
}

$sql = "SELECT city, SUM(marks) FROM students GROUP BY city having avg(marks)>60 order by SUM(marks) desc";

if($result= mysqli_query($link, $sql))
{
    while($row = mysqli_fetch_array($result)){

        echo $row['city']. " = ". $row['SUM(marks)'];

       echo "<br>";
 
 }
}
else{
    echo "Query could not be executed, ".mysqli_error($link);
}


mysqli_close($link);
