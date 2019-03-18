<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>connect</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<?php
$servername = $_POST["servername"];
$username = $_POST["username"];
$password = $_POST["password"];

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "<p>". "Connected successfully"."</p>";

$_SESSION["servername"]=$servername;
$_SESSION["username"]=$username;
$_SESSION["password"]=$password;

$conn->close();

?>

</body>