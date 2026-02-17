<?php

/* r */
$f = fopen("mode.txt", "r");
fclose($f);

/* w */
$f = fopen("mode.txt", "w");
fwrite($f, "Write mode");
fclose($f);

/* a */
$f = fopen("mode.txt", "a");
fwrite($f, "\nAppend mode");
fclose($f);

/* x */
$f = fopen("newfile.txt", "x");
fclose($f);

/* r+ */
$f = fopen("mode.txt", "r+");
fclose($f);

/* w+ */
$f = fopen("mode.txt", "w+");
fclose($f);

/* a+ */
$f = fopen("mode.txt", "a+");
fclose($f);

/* x+ */
$f = fopen("newfile2.txt", "x+");
fclose($f);

echo "All file modes executed!";
?>
