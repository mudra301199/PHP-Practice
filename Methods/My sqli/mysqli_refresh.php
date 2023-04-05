<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   //Setting auto commit to true
   mysqli_autocommit($con, False);
   //Inserting a records into the my_team table
   mysqli_query($con, "insert into my_team values(1, 'Shikhar', 'Dhawan', 'Delhi', 'India')");
   mysqli_query($con, "insert into my_team values(2, 'Jonathan', 'Trott', 'CapeTown', 'SouthAfrica')");
   mysqli_query($con, "insert into my_team values(3, 'Kumara', 'Sangakkara', 'Matale', 'Srilanka')");
   mysqli_query($con, "insert into my_team values(4, 'Virat', 'Kohli', 'Delhi', 'India')");

   mysqli_refresh($con, MYSQLI_REFRESH_TABLES);

   //Closing the connection
   mysqli_close($con);

?>   