<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

      session_start();
      // check if username has been set
      if(!isset($_SESSION['demo']['username'])){
        header("location: enter.php");
      }

      $_SESSION['demo']['username'] = $_POST['username'];

    ?>

    <a href="display.php">display info</a>

  </body>
</html>
