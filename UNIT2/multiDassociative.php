
<?php
$books = 
array("C++" => array("name" => "Beginning with C","copies" =>8),
      "PHP" => array("name" => "Basics of PHP","copies" => 10),
      "Laravel" => array("name" => "MVC","copies" => 3)
);
 
$keys = array_keys($books);
for($i = 0; $i < count($books); $i++) {
    echo "<h1>$keys[$i]</h1>";
    foreach($books[$keys[$i]] as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }
}
?>