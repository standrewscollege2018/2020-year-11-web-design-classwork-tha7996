<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>display</title>
  </head>
  <body>

    <?php

      if(!isset($_POST['username'])){
        header("location: enter.php");
      }


      session_start();
      echo $_SESSION['demo']['username'] ;

     ?>

     <a href="unsetsession.php">unsetsession</a>

  </body>
</html>
