<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   $res = mysqli_change_user($con, "mudra2", "", "project");

   if($res){
      print("User changed successfully");
   }else{
      print("Sorry Couldn't change the user");
   }

   //Closing the connection
   mysqli_close($con);
?>