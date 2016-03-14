<html>
  <head>
    <title>PHP Test</title>
    <style>
    input[type=text], select {
      width: 500px;
      padding: 12px 20px;
      margin: 8px 0px;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    input[type=submit] {
      width: 500px;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
}
    </style>
  </head>
  <body>
    <p>
      put some text in:
    </p>
    <form action="plain.php" method="post">
      <input type="text" name="name"><br>
      <input type="submit">
    </form>
    <?php
    echo $_POST["words"];
    ?>
  </body>
</html>
turn