<?php
$result = array(
    array("Manoj",7.8,"pass"),
    array("Aditya",8.5,"pass"),
    array("Anuj",4.9,"fail")
);


echo "<pre>";
print_r($result);

echo "</pre>";

echo "<table border='2px'>";
echo "<tr>";
echo "<th> Name </th>";
echo "<th> CGPA </th>";
echo "<th> Status</th>";
echo "</tr>";

foreach($result as $res)
{
    echo "<tr>";
    foreach($res as $r1)
    {
        echo "<td> $r1;</td>";
    }
    echo "</tr>";
}
echo "<table border='2px'>";