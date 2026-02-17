<?php

echo "<h2>PHP Datatypes</h2>";

// Datatypes
$str = "Hello PHP";
$int = 100;
$float = 10.55;
$bool = true;
$arr = array("Apple", "Banana", "Mango");

echo "String: $str <br>";
echo "Integer: $int <br>";
echo "Float: $float <br>";
echo "Boolean: $bool <br>";
echo "Array: ";
print_r($arr);

echo "<hr>";

/* LOCAL SCOPE */
echo "<h3>Local Scope</h3>";
function localTest() {
    $x = 10;  // local variable
    echo "Local variable inside function: $x <br>";
}
localTest();
// echo $x; // will give error

/* GLOBAL SCOPE */
echo "<h3>Global Scope</h3>";
$g = 50;
function globalTest() {
    global $g;
    echo "Global variable inside function: $g <br>";
}
globalTest();

/* STATIC SCOPE */
echo "<h3>Static Scope</h3>";
function staticTest() {
    static $count = 0;
    $count++;
    echo "Static count value: $count <br>";
}
staticTest();
staticTest();
staticTest();

?>
