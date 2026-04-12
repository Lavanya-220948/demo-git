<<<<<<< HEAD
<?php

/* r */
$f = fopen("chapter32.odt", "r");
fclose($f);

/* w */
$f = fopen("chapter32.odt", "w");
fwrite($f, "Write mode");
fclose($f);

/* a */
$f = fopen("chapter32.odt", "a");
fwrite($f, "\nAppend mode");
fclose($f);

/* x */
$f = fopen("chapter32.odt", "x");
fclose($f);

/* r+ */
$f = fopen("chapter32.odt", "r+");
fclose($f);

/* w+ */
$f = fopen("chapter32.odt", "w+");
fclose($f);

/* a+ */
$f = fopen("chapter32.odt", "a+");
fclose($f);

/* x+ */
$f = fopen("chapter32.odt", "x+");
fclose($f);

echo "All file modes executed!";
?>
=======
