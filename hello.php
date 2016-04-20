<html>
  <head>
    <title>PHP Test</title>
    <style>
      input[type=text], select {
        margin: 0.5px 0;
        padding: 4px;
      }
    </style>
  </head>
  <body>
    put some text in:<br>
    <form action="mysql.php" method="post">
      username: <input type="text" name="name"><br>
      site id: <input type="text" name="request"><br>
      <input type="submit">
    </form>
    <?php
    echo $_POST["name"];
    echo $_POST["request"];
    ?>
  </body>
</html>
turn