<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   $stmt = mysqli_prepare($con, "UPDATE employee set INCOME=INCOME-? where INCOME>=?");
   mysqli_stmt_bind_param($stmt, "si", $reduct, $limit);
   $limit = 20000;
   $reduct = 5000;

   //Executing the statement
   mysqli_stmt_execute($stmt);
   print("Records Updated......\n");

   //Affected rows
   $count = mysqli_stmt_affected_rows($stmt);

   //Closing the statement
   mysqli_stmt_close($stmt);

   //Closing the connection
   mysqli_close($con);

   print("Rows affected ".$count);
?>