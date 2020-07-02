<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>enter</title>
  </head>
  <body>

    <?php
      session_start();
      if(isset($_SESSION['demo']['username'])){
        header("location: display.php");
      }

     ?>

     <!-- form for username -->
    <form action="setsession.php" method="post">Enter username:
      <input type="text" name="username" placeholder="Enter username">
      <button type="submit" name="button">Submit</button>
    </form>

  </body>
</html>
