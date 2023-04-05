<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   //close the connection
   $res = mysql_close($con)

   if($res){
      print("Connection closed");
   }
   else{
      print("Connection closing Failed ");
   }
?>