<!-- display all students -->

<?php

  // query
  // if directed from tutorgroup page
  if(isset($_GET['tutor'])){
    $tutor_id = $_GET['tutor'];
    $student_sql = "SELECT * FROM student WHERE tutorgroupID = $tutor_id";
  }
  else{
    $student_sql = "SELECT * FROM student";
  }
  // get from database using
  $student_query = mysqli_query($dbconnect, $student_sql);
  $student_aa = mysqli_fetch_assoc($student_query);


  echo '<div class="tutor-container">';
  do {
    echo "\n  <div class='tutor-card'><p>".$student_aa['firstname'].' '.$student_aa['lastname']."</p></div>", ' ';
  }
  while ($student_aa = mysqli_fetch_assoc($student_query));
  echo '</div>';

?>
