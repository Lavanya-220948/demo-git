<<<<<<< HEAD
<?php
$dir = "uploads/";

/* Upload */
if(isset($_POST['upload'])) {
    $file = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
}

/* Delete */
if(isset($_GET['delete'])) {
    unlink($dir.$_GET['delete']);
}

/* Download */
if(isset($_GET['download'])) {
    $file = $dir.$_GET['download'];
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    readfile($file);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Mini File Manager</title>
</head>
<body>

<h2>Mini File Manager</h2>

<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button name="upload">Upload</button>
</form>

<h3>Files</h3>

<table border="1">
<tr>
<th>Name</th>
<th>Size</th>
<th>Last Modified</th>
<th>Action</th>
</tr>

<?php
$files = scandir($dir);
foreach($files as $file) {
    if($file != "." && $file != "..") {
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>".filesize($dir.$file)." bytes</td>";
        echo "<td>".date("Y-m-d H:i:s", filemtime($dir.$file))."</td>";
        echo "<td>
        <a href='?download=$file'>Download</a> |
        <a href='?delete=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>
=======
<?php
$dir = "uploads/";

/* Upload */
if(isset($_POST['upload'])) {
    $file = $_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'], $dir.$file);
}

/* Delete */
if(isset($_GET['delete'])) {
    unlink($dir.$_GET['delete']);
}

/* Download */
if(isset($_GET['download'])) {
    $file = $dir.$_GET['download'];
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    readfile($file);
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Mini File Manager</title>
</head>
<body>

<h2>Mini File Manager</h2>

<form method="post" enctype="multipart/form-data">
<input type="file" name="file">
<button name="upload">Upload</button>
</form>

<h3>Files</h3>

<table border="1">
<tr>
<th>Name</th>
<th>Size</th>
<th>Last Modified</th>
<th>Action</th>
</tr>

<?php
$files = scandir($dir);
foreach($files as $file) {
    if($file != "." && $file != "..") {
        echo "<tr>";
        echo "<td>$file</td>";
        echo "<td>".filesize($dir.$file)." bytes</td>";
        echo "<td>".date("Y-m-d H:i:s", filemtime($dir.$file))."</td>";
        echo "<td>
        <a href='?download=$file'>Download</a> |
        <a href='?delete=$file'>Delete</a>
        </td>";
        echo "</tr>";
    }
}
?>

</table>

</body>
</html>
>>>>>>> e29e784ed58de88f72a9f29ba13f987a0758d197
