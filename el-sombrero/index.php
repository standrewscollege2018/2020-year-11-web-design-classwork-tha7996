<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/ff961fc1c0.js" crossorigin="anonymous"></script>
  </head>
  <body>

    <?php

      include('connect.php');
      include('navbar.php');

      // check if link has been clicked, and redirect to appropiate page
      if(isset($_GET['page'])){
        include($_GET['page'].".php");
      }
      else{
        include("home.php");
      }

      include('bottom-banner.php')
     ?>

  </body>
</html>
