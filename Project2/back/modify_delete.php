<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modify_delete</title>
    <link rel="stylesheet" href="style.css">
</head >
<?php
// set the expiration date to one hour ago
$cookie_name = "anantonyk";
setcookie($cookie_name, "", time() - 3600);
?>

<body>

<?php
echo "<p>". "Cookie is deleted." . "</p>";
?>

</body>
</html>