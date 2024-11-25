<?php
$name=array("Manoj","Rahul","Aneesh");
$marks=array("75","89","44"
);
$c=array_combine($name,$marks);
print_r($c);

echo "<br>";

$courses=array("PHP","Laravel","Node js","HTML","CSS","ASP.NET");
echo "<pre>";
print_r(array_chunk($courses,2));
echo "</pre>";


$courses=array("a"=>"PHP","b"=>"Laravel","c"=>"Node js","d"=>"HTML","e"=>"CSS","f"=>"ASP.NET");
$crs=array_chunk($courses,2);
echo "<pre>";
print_r($crs);
echo "</pre>";
 foreach($crs as $c1)
 {
    foreach($c1 as $c2)
    {
        echo $c2;
    }
 }


 echo "<br>";
$a=array("Block 33","Block 34","Block 34","Block 36","Block 36");
print_r(array_count_values($a));

echo "<br>";

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
$a3=array("c"=>"orange","b"=>"magenta");
print_r(array_merge($a1,$a2,$a3));
echo "<br>";

$a=array("red","green");
array_push($a,"blue","yellow");
print_r($a);


echo "<br>";

$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2,true));


?>
