<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   mysqli_query($con, "CREATE TABLE Test(Name VARCHAR(10), AGE INT)");


   //Executing the query
   $query = "INSERT into Test values('Raju', 25),('Rahman', 30),('Sri Rama Chandra Murthi', 25)";
   mysqli_query($con, $query);

   //Error
   $list = mysqli_error_list($con);
   print_r($list);

   //Closing the connection
   mysqli_close($con);
?>