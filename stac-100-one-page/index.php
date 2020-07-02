<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Stac100</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <?php
      if(isset($_GET["page"])){
        $page = $_GET['page'];
        include("$page.php");
      }
      else {
        include("home.php");
      }
     ?>

  </body>
</html>
