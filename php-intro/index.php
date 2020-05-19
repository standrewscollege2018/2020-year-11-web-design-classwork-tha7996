<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <?php

      echo "<a href="post.php">post demonstration</a>";

      echo "<h1>Hello world</h1>";

      // Variable
      $name = "Toby";
      echo "<p>hello $name</p>";

      $number = 10;
      echo $number * 10;

      if ($number * 10 < 40) {
        echo "<p>bigger than 40</p>";
      }
      else if ($number * 10 == 40){
        echo "<p>equal to 40</p>";
      }
      else {
        echo "<p>Smaller than 40</p>";
      }

      // countdown task
      do{
        echo "<p>$number</p>";
        $number -= 1;
      }
      while (0<$number);
      echo "<h2>Blast off!</h2>";


      // fizzbuzz task
      $number = 1;
      do{
        if ($number % 3 == 0){
          echo "fizz";
        }
        if ($number % 5 == 0){
          echo "buzz";
        }
        else if (($number % 3 != 0) and ($number % 5 != 0)) {
          echo "$number";
        }
        $number += 1;
        echo "<p></p>";
      }
      while($number < 100);

     ?>

  </body>
</html>
