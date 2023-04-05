<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   $con -> query("CREATE TABLE Test(Name VARCHAR(255), AGE INT)");
   $con -> query("insert into Test values('Raju', 25),('Rahman', 30),('Sarmista', 27)");
   print("Table Created.....\n");

   $stmt = $con -> prepare( "SELECT * FROM Test WHERE Name in(?, ?)");
   $stmt -> bind_param("ss", $name1, $name2);
   $name1 = 'Raju';
   $name2 = 'Rahman';

   //Executing the statement
   $stmt->execute();

   //Retrieving the result
   $res = $stmt->get_result();
   $row = $res->fetch_row();

   $len = $res ->lengths;
   print_r($len);

   //Closing the statement
   $stmt->close();

   //Closing the connection
   $con->close();
?>