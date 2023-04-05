<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   //Query to retrieve all the rows of customer table
   mysqli_query($con, "SELECT * FROM customer");

   //Effected rows
   $rows = mysqli_affected_rows($con);
   print("Number of affected rows: ".$rows);

   //Closing the connection
   mysqli_close($con);
?>