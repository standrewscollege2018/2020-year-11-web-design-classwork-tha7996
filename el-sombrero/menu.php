<div class="menu-content">

  <!-- sidebar of filters/courses  -->
  <div class="menu-filters">
    <a href="index.php?page=menu&course=1">Entrees</a>
    <a href="index.php?page=menu&course=2">All Mains</a>
    <a href="index.php?page=menu&course=2&category=1">Beef</a>
    <a href="index.php?page=menu&course=2&category=2">Chicken</a>
    <a href="index.php?page=menu&course=2&category=3">Pork</a>
    <a href="index.php?page=menu&course=2&category=4">Vegetarian</a>
    <a href="index.php?page=menu&course=2&category=5">Mixed Specials</a>
    <a href="index.php?page=menu&course=3">Desserts</a>
  </div>

  <div class="items">

    <?php

      echo "<div class='menu-items'>";

        // print course name
        echo "<h1>";
        if(isset($_GET['category'])){
          echo mysqli_fetch_assoc(mysqli_query($dbconnect, "SELECT name FROM categorydb WHERE categoryID =".$_GET['category']))['name'];
        }
        else{
          echo mysqli_fetch_assoc(mysqli_query($dbconnect,
            "SELECT course.coursename FROM menudb JOIN course ON menudb.courseID = course.courseID
            WHERE menudb.courseID =".$_GET['course']))['coursename'];
        }
        echo "</h1>";


        // check if category has been clicked
        if(isset($_GET['course'])){

          // if course is mains and a subcateogry has been selected
          if ($_GET['course'] == 2 and isset($_GET['category'])){
            $sql = "SELECT * FROM menudb WHERE courseID = ".$_GET['course']." AND categoryID = ".$_GET['category'];
          }
          else {
            $sql = "SELECT * FROM menudb WHERE courseID = ".$_GET['course'];
          }
        }
        else{
          $sql = "SELECT * FROM menudb WHERE courseID = 1";
        }



        // get from database using HttpQueryString
        $query = mysqli_query($dbconnect, $sql);
        $aa = mysqli_fetch_assoc($query);


        // check if menu course has items
        if(!empty($aa)){

          do {
            // print item information
            echo "  <p><strong>".$aa['name']."</strong> ".$aa['description']." $".$aa['price']."<p>";
          }
          // get data from database
          while ($aa = mysqli_fetch_assoc($query));
        }
        else {
          echo "<h3>No items found!</h3>";
        }

      echo "</div>";

    ?>





  </div>

</div>
