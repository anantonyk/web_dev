<?php
// Start the session
session_start();
?>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>connect</title>
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
          $BDname = $_SESSION["BDName"];
         
 // Create connection
$conn = new mysqli($servername, $username, $password, $BDname);
// Check connection
if ($conn->connect_error) {
    die("<p>"."Connection failed: " . $conn->connect_error."</p>");
}
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $email = $_POST["email"];
 $tablename = $_POST["tablename"];
$sql = "INSERT INTO $tablename (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";


if ($conn->query($sql) === TRUE) {
    echo "<p>"."New record created successfully"."</p>";
} else {
    echo "<p>"."Error: " . $sql . "<br>" . $conn->error."</p>";
}

$conn->close();
}
?>
</body>