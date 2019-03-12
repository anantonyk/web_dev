<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>get</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$d=mktime(11, 14, 54, 8, 12, 2011);
echo"<p>". "Created date is " . date("Y-m-d h:i:sa", $d)."</p>";
?>
</body>
</html>