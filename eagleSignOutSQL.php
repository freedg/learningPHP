<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pelicanSheet";
$id = $_POST["id"];
$item = $_POST["item"];
$in_or_out = $_POST["in_or_out"];
$purpose = $_POST["purpose"];
$returned = $_POST["returned"];
include "eagleDictionary.php";


foreach ($idDictionary as $key => $val) {
    if($id == $key) {
      $id = $val;
    }
}
 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO signInOut (NAME, ITEM, PURPOSE, IN_OR_OUT)
VALUES ('$id', '$item', '$purpose', '$in_or_out')";

if ($conn->query($sql) === TRUE) {
  header("Location: http://preview.k61ljxwyspz4zpvit70qm8a671oflxrqq62i4vxfyknvcxr.box.codeanywhere.com/eagleSignOut.php");
  die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>