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
          $BDname = $_SESSION["BDName"];
         
 // Create connection
$conn = new mysqli($servername, $username, $password, $BDname);
// Check connection
if ($conn->connect_error) {
    die("<p>"."Connection failed: " . $conn->connect_error."</p>");
}


$tablename=$_POST["tablename"];
 $firstname = $_POST["firstname"];
          $sql = "SELECT * FROM $tablename WHERE firstname = '$firstname'";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
              }
          } else {
              echo "0 results";
          }
          $conn->close();
      }
?>
</body>