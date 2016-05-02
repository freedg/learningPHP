<html>
  <head>
    <title>Submissions</title>
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pelicanSheet";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM signInOut";
    $result = $conn->query($sql);

   if ($result->num_rows > 0) {
      // output data of each row
      echo "<table border='1' style='width:100%'>         
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Timestamp</th>
                <th>Item</th>
                <th>Purpose</th>
                <th>Return Date</th>
                <th>Taking or Returning</th>
              </tr>";
      while($row = $result->fetch_assoc()) {
        echo "
          <tr>
            <td>". $row["ID"] ."</td>
            <td>". $row["NAME"] ."</td>
            <td>". $row["TIMESTAMP"] ."</td>
            <td>". $row["ITEM"] ."</td>
            <td>". $row["PURPOSE"] ."</td>
            <td>". $row["RETURN_DATE"] ."</td>
            <td>". $row["IN_OR_OUT"] ."</td>
          </tr>";
      }
     echo "</table>";
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    
    
  </body>
</html>