<?php



  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
  // connect ot database. Arguments: host, username, password, database name
  $dbconnect = mysqli_connect("localhost", "root", "", "el-sombrero");



  // error catching
  if(mysqli_connect_errno()){
    echo 'Connection failed: '.mysqli_connect_errno();
    exit;
  }

 ?>
