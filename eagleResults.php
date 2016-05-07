<html>
  <head>
    <title>Submissions</title>
    <style>
    table, th, td {
      border: 1px solid black;
      border-collapse: collapse;
    }
    th, td {
      padding: 5px;
    }
    </style>
  </head>
  <body>
    <h1>
      Pelican Check Out
    </h1>
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
            <td>". $row["IN_OR_OUT"] ."</td>
          </tr>";
      }
     echo "</table>";
    } else {
        echo "<h2>0 results</h2>";
    }
    $conn->close();
    ?>
    
    
  </body>
</html>