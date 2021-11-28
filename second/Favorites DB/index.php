<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>replit</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <?php
    include ("back.php");
    ?>
  </head>
  <body>
    <form action="index.php" method="post">
<fieldset>
  <legend>Favorites</legend>
  <div id="label">
    <label>Name</label>
  </div>
  <div>
  <input type="text" class="name" name="name">
  </div>
  <div id="label">
    <label>Color</label>
  </div>
  <div>
  <input type="text"name="color" list="color"class="color">
  <datalist id="color">
  <option value="red">
  <option value="green">
  <option value="blue">
  <option value="yellow">
  <option value="golden">
  <option value="pink">
  <option value="peach">
    </datalist>
  </div>
<button onclick="bt()" id="submit">Submit</button>

</fieldset>
  </form>
  <script src="script.js"></script>
  </body>
</html>