<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      if (!isset($_POST['number'])){
        header("location: greeting.php");
      }

      $number = $_POST['number'];

      if ($number % 3 == 0){
        echo "fizz";
      }
      if ($number % 5 == 0){
        echo "buzz";
      }
      else if (($number % 3 != 0) and ($number % 5 != 0)) {
        echo "$number";
      }

     ?>

    <a href="get.php?number=1">Link 1</a>
    <a href="get.php?number=2">Link 2</a>



  </body>
</html>
