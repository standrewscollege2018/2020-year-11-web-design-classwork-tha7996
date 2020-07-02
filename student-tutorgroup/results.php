<!-- display results from search -->

<?php

  // query
  // if directed from search page
  if(isset($_POST['query'])){

    $query = $_POST['query'];

    try{
      $student_sql = "SELECT * FROM student WHERE tutorgroupID = $query";

      $student_query = mysqli_query($dbconnect, $student_sql);
      $student_aa = mysqli_fetch_assoc($student_query);

      echo "$student_query";
      echo "$student_aa";



    }

    catch (Exception $e) {
      echo "No results found";
    }
  }
  else{
    $student_sql = "SELECT * FROM student";
  }
?>
