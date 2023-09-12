<?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db   = 'db_agriculate';

  $conn = mysqli_connect($host, $user, $pass, $db);
  
  if($conn){
   // echo "Done";
  }

  mysqli_select_db($conn, $db);
?>