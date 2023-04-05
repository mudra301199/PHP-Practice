<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   //MySQL Server version
   $version = mysqli_get_server_info($con);
   print("Client Library Version Number: ".$version);

   //Closing the connection
   mysqli_close($con);
?>