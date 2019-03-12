<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>destroy</title>
</head>
<body>

<?php
// remove all session variables
session_unset(); 
// destroy the session 
session_destroy(); 
echo "<p>". "Session has destroyed."."</p>";
?>

</body>
</html>