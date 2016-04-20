<html>
  <head>
    <title>Item Sign In and Out</title>
    <style type="text/css">
      form {
        display: table;
      }
      p {
        display: table-row;
      }
      label {
        display: table-cell;
        font-size: 30px;
      }
      input {
        display: table-cell;
        margin: 5px;
        margin-top: auto;
        margin-bottom: 5px;
        margin-left: 25px;
        height: 40px;
        vertical-align:top;
        font-size: 25px;
      }
      input.radio{
        transform:scale(2);
      }
      h1 {
        margin-bottom: 9px;
        font-size: 45px;
      }
    </style>
  </head>
  <body>
    <h1>
      Pelican Case Item Sign In and Out
    </h1>
    <div class="container">
    <form action="eagleSignOutSQL.php" method="post">
      <p>
        <label>Student ID:</label>
        <input autocomplete="off" type="text" name="id">
      </p>
      <p>
        <label>Time (hh:mm):</label>
        <input autocomplete="off" type="text" name="time">
      </p>
      <p>
        <label>Item thing:</label>      
        <input type="text" name="item">
      </p>
      <p>
        <label>Taking</label>
        <input type="radio" name="in_or_out" value="out" class="radio">
      </p>
      <p>
        <label>Returning</label>
        <input type="radio" name="in_or_out" value="in" class="radio">
      </p>
      <input type="submit">
    </form>
    </div>
  </body>
</html>