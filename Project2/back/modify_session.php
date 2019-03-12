<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>get_modify</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
?>
<br><br>
<form action="../get_modify.html">
      <input type="submit" value="Back" name="submit">
    </form>
</body>
</html>