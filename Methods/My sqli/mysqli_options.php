<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   mysqli_options($con, MYSQLI_OPT_NET_CMD_BUFFER_SIZE, 15);

   if($con){
      print("Connection Established Successfully");
   }else{
      print("Connection Failed ");
   }
?>