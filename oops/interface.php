<?php

interface parent1{
    function calc($a, $b);
}

interface parent2{
    function sub($c, $d);
}
class childClass implements parent1, parent2 {
    public function calc($a, $b) {
        return $a + $b;
    }
    public function sub($c, $d) {
        return $c - $d;
    }
}

$test = new childClass();
echo "Clac result : ".$test->calc(5, 10) . "<br>"; // Outputs: 15
echo "Sub result : ".$test->sub(10, 5) . "\n"; // Outputs: 5
?>