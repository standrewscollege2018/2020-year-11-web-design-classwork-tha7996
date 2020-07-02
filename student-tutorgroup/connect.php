<?php

  // connect ot database. Arguments: host, username, password, database name
  $dbconnect = mysqli_connect("localhost", "root", "", "studentdb2");
  // error catching
  if(mysqli_connect_errno()){
    echo 'Connection failed: '.mysqli_connect_errno();
    exit;
  }

 ?>
