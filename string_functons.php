<?php

echo "<h2>PHP String Functions</h2>";

$str = "Hello World!";
echo "Original String: $str <br>";

echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reverse: " . strrev($str) . "<br>";
echo "Position of 'World': " . strpos($str, "World") . "<br>";
echo "Replace 'World' with 'PHP': " . str_replace("World", "PHP", $str) . "<br>";
echo "Uppercase: " . strtoupper($str) . "<br>";
echo "Lowercase: " . strtolower($str) . "<br>";
echo "Substring (0, 5): " . substr($str, 0, 5) . "<br>";

?>
