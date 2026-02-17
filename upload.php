<?php

if(isset($_POST['upload'])) {

    $filename = $_FILES['myfile']['name'];
    $tempname = $_FILES['myfile']['tmp_name'];
    $folder = "uploads/".$filename;

    if(move_uploaded_file($tempname, $folder)) {
        echo "File uploaded successfully!<br>";
        echo "<a href='download.php?file=".$filename."'>Download File</a>";
    } else {
        echo "Upload failed!";
    }
}
?>
