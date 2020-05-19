<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
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



  </body>
</html>
