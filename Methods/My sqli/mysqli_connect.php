<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   if($con){
      print("Connection Established Successfully");
   }
   else{
      print("Connection Failed ");
   }
?>