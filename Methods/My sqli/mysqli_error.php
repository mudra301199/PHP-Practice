<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

    //Query to retrieve all the rows of employee table
   $con -> query("SELECT * FROM wrong_table_name");

   //Error 
   $error = $con ->error;
   print("Error Occurred: ".$error);

   //Closing the connection
   $con -> close();
?>