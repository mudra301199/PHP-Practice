<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   //Setting auto commit to false
   mysqli_autocommit($con, False);

   //Inserting a records into the category table
   mysqli_query($con, "insert into category values('Name1', 'active', 'India')");
   mysqli_query($con, "insert into category values('Name2', 'inactive', 'SouthAfrica')");
   mysqli_query($con, "insert into category values('Name3', 'inactive', 'Srilanka')");
   mysqli_query($con, "insert into category values('Name4', 'active', 'India')");

   //Verifying the contents of the table
   $result = mysqli_query($con, "SELECT * FROM category");
   print_r($result);

   mysqli_commit($con);

   //Closing the connection
   mysqli_close($con);
?>