<?php
class base {
    public $name = "Parent Class";
    public function calc($a, $b) {
        return $a * $b;
    }
}

class derived extends base {
    public $name = "Child Class";
    public function calc($a, $b) {
        return parent::calc($a, $b);
    }
}

$test = new derived();
echo $test->name;
echo "<br>";
echo $test->calc(2, 3);
?>
