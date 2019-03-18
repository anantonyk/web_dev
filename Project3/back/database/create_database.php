<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>create_database</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
	<?php

 if(!isset($_SESSION["servername"]) && !isset($_SESSION["username"]) && !isset($_SESSION["password"])){
          echo "Session is not set";
        }else {
          $servername = $_SESSION["servername"];
          $username = $_SESSION["username"]; 
          $password = $_SESSION["password"]; 

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("<p>"."Connection failed: " . $conn->connect_error."</p>");
} 
$BDname=$_POST["BDname"];
// Create database
$sql = "CREATE DATABASE ".$BDname;
if ($conn->query($sql) === TRUE) {
    echo "<p>"."Database created successfully"."</p>";
} else {
    echo "<p>"."Error creating database: " . $conn->error."</p>";
}
 $_SESSION["BDName"] = $BDname;

$conn->close();
}
?>
</body>