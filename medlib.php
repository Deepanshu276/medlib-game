<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> medlib game</title>
  </head>
  <body>
    <form action="medlib.php" method="get">
      GUESS THE WORD:<input type="text" name="guess">
      <br>
      <input type="SUBMIT">
    </form>
    <?php
     $_name=$_GET["guess"];
     echo "We $_name all too soon the things we thought we could never $_name. We $_name the loves and the betrayals alike, $_name what we whispered and what we screamed, $_name who we were.";

    ?>
  </body>
</html>
