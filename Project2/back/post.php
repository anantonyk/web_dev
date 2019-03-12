<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>post</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
	<p>Welcome, <?php echo $_POST["name"]; ?>!<br></p>
     <p> Your email address is: <?php echo $_POST["email"]; ?></p>
</body>
</html>