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
echo "<p>"."Get session:"."</p>";
echo "<p>"."Favorite color is " . $_SESSION["favcolor"] . ".<br>"."</p>";
echo "<p>"."Favorite animal is " . $_SESSION["favanimal"] . "." ."</p>";
?>
<br><br>
<form action="../get_modify.html">
      <input type="submit" value="Back" name="submit">
    </form>

</body>
</html>