<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student database</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- PHP -->
    <?php

      // connect to database
      include("connect.php");

      if(isset($_GET['page'])){
        include("navbar.php");
        $page = $_GET['page'];
        include("$page.php");
      }
      else {
        include("home.php");
      }

     ?>

  </body>
</html>
