<?php

$file = "sample.txt";

/* FILE WRITE */
$f = fopen($file, "w");
fwrite($f, "Hello PHP File Handling!");
fclose($f);

/* FILE READ */
$f = fopen($file, "r");
echo fread($f, filesize($file));
fclose($f);

echo "<br><br>";

/* file_get_contents */
echo file_get_contents($file);

/* file_put_contents */
file_put_contents($file, "\nNew line added!", FILE_APPEND);

/* file() */
print_r(file($file));

echo "<hr>";

/* FILE INFO */
echo "Exists: ".file_exists($file)."<br>";
echo "Size: ".filesize($file)."<br>";
echo "Type: ".filetype($file)."<br>";
echo "Access Time: ".fileatime($file)."<br>";
echo "Modified Time: ".filemtime($file)."<br>";
echo "Created Time: ".filectime($file)."<br>";
echo "Permissions: ".fileperms($file)."<br>";
echo "Owner: ".fileowner($file)."<br>";
echo "Group: ".filegroup($file)."<br>";
echo "Inode: ".fileinode($file)."<br>";

echo "<hr>";

/* FILE MANAGEMENT */
copy($file, "copy.txt");
rename("copy.txt", "renamed.txt");
unlink("renamed.txt");

mkdir("testfolder");
echo is_file($file);
echo is_dir("testfolder");
rmdir("testfolder");

echo "<hr>";

/* DIRECTORY HANDLING */
print_r(scandir("."));

$dir = opendir(".");
while($file = readdir($dir)) {
    echo $file."<br>";
}
closedir($dir);

echo "Current Dir: ".getcwd()."<br>";
chdir("..");
echo "Changed Dir: ".getcwd()."<br>";

echo "<hr>";

/* FILE LOCKING */
$f = fopen("lock.txt", "w");
if(flock($f, LOCK_EX)) {
    fwrite($f, "File locked and written!");
    flock($f, LOCK_UN);
}
fclose($f);

?>
