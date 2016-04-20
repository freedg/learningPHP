<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eagleSheet";
$id = $_POST["id"];
$item = $_POST["item"];
$in_or_out = $_POST["in_or_out"];
$time = $_POST["time"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO signInOut (id, item, in_or_out, time)
VALUES ('$id', '$item', '$in_or_out', '$time')";

if ($conn->query($sql) === TRUE) {
  header("Location: http://preview.1lqgijkopnrn3ik91w5o5k1k0bgwrk9u7wd8qjk6dbcsor.box.codeanywhere.com/eagleSignOut.php");
  die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>