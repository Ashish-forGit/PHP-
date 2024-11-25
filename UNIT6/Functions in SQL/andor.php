<?php
$link = mysqli_connect('localhost','root', "","demo");
if($link == false)
{
    die("Could not connect". mysqli_connect_error());
}

$sql = "SELECT * FROM students where first_name='manish' and marks>80";

if($result= mysqli_query($link, $sql))
{
if(mysqli_num_rows($result)>0)
{
    echo "<table border = 2>";
    echo "<tr>";
    echo "<th>id</th>";
    echo "<th>first name</th>";
    echo "<th>last name</th>";
    echo "<th>marks</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($result))
    {

        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['fname']."</td>";
        echo "<td>".$row['lname']."</td>";
        echo "<td>".$row['marks']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
else
{
    echo "no records";
}
}
else{
    echo "Query could not be executed";
}


mysqli_close($link);
