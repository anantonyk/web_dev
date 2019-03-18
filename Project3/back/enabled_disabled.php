<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>enabled_disabled</title>
<?php
setcookie("test_cookie", "test", time() + 3600, '/');
?>
<html>
<body>

<?php
$txt1="Cookies are enabled.";
$txt2="Cookies are disabled.";
if(count($_COOKIE) > 0) {
    echo "<p>" . $txt1 . "</p>";
} else {
    echo "<p>" . $txt2 . "</p>";
}
?>

</body>
</html>