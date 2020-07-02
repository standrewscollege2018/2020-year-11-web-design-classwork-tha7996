<?php

  // makes query easier
  $b_name = $_POST['booking_name'];
  $b_time = $_POST['booking_time'];
  $b_size = $_POST['booking_size'];

  // query to insert booking
  $sql = "INSERT INTO bookings (booking_name, booking_time, booking_size)
          VALUES ('$b_name', $b_time, $b_size)";

  // carry out query
  $query = mysqli_query($dbconnect, $sql);

?>

<p style='font-family:sans-serif; padding:10px;'>Thanks! Your booking has been processed!</p>
<img src="assets/tacos.png" alt="tacos" style='max-width: 100%; height: auto;'>
