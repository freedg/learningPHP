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
        height: 40px;
        margin-left: 25px;
        margin-top: auto;
        font-size: 25px;
      }
      input.radio{
        transform:scale(1.5);
        margin-left: -75px;
        display: initial;
      }
      h1 {
        margin-bottom: 9px;
        font-size: 45px;
      }
    </style>
  </head>
  <body>
    <h1>
      Team 93 Media Equipment Checkout
    </h1>
    <h2>
      Honestly I think the main problem with this system is how many things need to be filled out
      <br>
      Like is the return date even neccessary? I can't think of a time when someone would have something out for more than a day.
    </h2>
    <div class="container">
    <form action="eagleSignOutSQL.php" method="post">
      <p>
        <label>Name:</label>
        <input autocomplete="off" type="text" name="id">
      </p>
      <p>
        <label>Piece of Equipment:</label>      
        <input type="text" name="item">
      </p>
      <p>
        <label>Purpose:</label>
        <input type="text" name="purpose">
      </p>
      <p>
        <label>Expected Return Date:</label>
        <input type="text" name="returned">
      </p>
      <p>
        <label>Taking</label>
        <input type="radio" name="in_or_out" value="Taking" class="radio">
      </p>
      <p>
        <label>Returning</label>
        <input type="radio" name="in_or_out" value="Returning" class="radio">
      </p>
      <br>
      <p>
        <input type="submit">
      </p>
    </form>
    </div>
  </body>
</html>