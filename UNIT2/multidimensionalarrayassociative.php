<?php
$result = array(
    array(
        "name" => "Manoj",
        "cgpa" => 7.8,
        "status" => "pass"
    ),
    array(
        "name" => "Aditya",
        "cgpa" => 8.5,
        "status" => "pass"
    ),
    array(
        "name" => "Anuj",
        "cgpa" => 4.9,
        "status" => "fail"
    )
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