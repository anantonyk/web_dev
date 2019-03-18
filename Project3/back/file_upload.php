<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>file_upload</title>
</head>
<body>
    <?php
$target_dir = "C:/wamp64/www/Project3/uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;


// Check if file already exists
if (file_exists($target_file)) {
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $uploadOk = 0;
}
$txt1="Sorry, your file was not uploaded.";
$txt2=" - this file has been uploaded.";
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<p>" . $txt1 . "</p>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<p>". basename( $_FILES["fileToUpload"]["name"]). $txt2 . "</p>" ;
    } else {
        echo "<p>" . $txt1 . "</p>";
    }
}
?>
</body>
</html>