<?php
  $servername = "127.0.0.1";
  $username = "root";
  $password = "qwe123";
  $dbname = "listdb";
  $conn = mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
    echo "Failed database : ".$conn;
  }
 ?>
