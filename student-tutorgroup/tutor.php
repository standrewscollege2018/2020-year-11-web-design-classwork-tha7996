<!-- display tutor names -->

<?php

  // query
  $tutor_sql = "SELECT * FROM tutorgroup";
  // get from database using
  $tutor_query = mysqli_query($dbconnect, $tutor_sql);
  $tutor_aa = mysqli_fetch_assoc($tutor_query);


  echo '<div class="tutor-container">';
  do {
    // link
    echo "\n <a href='index.php?tutor=".$tutor_aa['tutorgroupID']."&page=student'>";
    echo "<div class='tutor-card'>".$tutor_aa['name']."</div></a>";
  }
  while ($tutor_aa = mysqli_fetch_assoc($tutor_query));

  echo "\n</div>\n";

?>
