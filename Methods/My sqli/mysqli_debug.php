<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

    if ($conn->connect_error) {
      die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
   } 
   echo 'Success... ' . mysqli_get_host_info($conn) . "\n";
   mysqli_debug("d:t:o,debug.txt");
   mysqli_autocommit($conn,FALSE);
   mysqli_query($conn,"INSERT INTO category (id,name) VALUES (10,'sai')");
   mysqli_commit($conn);
   
   mysqli_close($conn);
?>
