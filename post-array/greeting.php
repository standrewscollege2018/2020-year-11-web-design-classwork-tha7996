<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
    // Check whether username exists
      if (!isset($_POST['username'])){
        header("Location: post.php");
      }
      $username = $_POST['username'];
      echo "Greetings $username";

     ?>

     <form action="fizzbuzz.php" method="post">
       Enter number: <input type="int" name="number" placeholder="Enter number">
       <button type="submit" name="button">Submit</button>
     </form>


  </body>
</html>
