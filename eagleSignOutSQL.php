<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eagleSheet";
$id = $_POST["id"]; #$id = 1000485122
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
$sql = "INSERT INTO signInOut (NAME, ITEM, PURPOSE, RETURN_DATE, IN_OR_OUT)
VALUES ('$id', '$item', '$purpose', '$returned', '$in_or_out')";

if ($conn->query($sql) === TRUE) {
  header("Location: http://preview.1lqgijkopnrn3ik91w5o5k1k0bgwrk9u7wd8qjk6dbcsor.box.codeanywhere.com/eagleSignOut.php");
  die();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>