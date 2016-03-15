<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";
$name = $_POST["name"];
$request = $_POST["request"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO MyTableIMade (firstname, request)
VALUES ('$name', '$request')";

if ($conn->query($sql) === TRUE) {
  echo "Record recorded successfully!";
  echo '<meta http-equiv="refresh" content="0.5; url=http://preview.1lqgijkopnrn3ik91w5o5k1k0bgwrk9u7wd8qjk6dbcsor.box.codeanywhere.com/hello.php" />';
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>