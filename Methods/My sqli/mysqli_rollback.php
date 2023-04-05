<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   //Setting auto commit to false
   mysqli_autocommit($con, False);
   mysqli_query($con, "CREATE TABLE IF NOT EXISTS my_team(ID INT, First_Name VARCHAR(255), Last_Name VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
   //Inserting a records into the my_team table
   mysqli_query($con, "insert into my_team values(1, 'Shikhar', 'Dhawan', 'Delhi', 'India')");
   mysqli_query($con, "insert into my_team values(2, 'Jonathan', 'Trott', 'CapeTown', 'SouthAfrica')");
   mysqli_query($con, "insert into my_team values(3, 'Kumara', 'Sangakkara', 'Matale', 'Srilanka')");
   mysqli_query($con, "insert into my_team values(4, 'Virat', 'Kohli', 'Delhi', 'India')");

   $res = mysqli_query($con, "SELECT * FROM my_team");
   print("No.of rows (at the time of commit): ".mysqli_affected_rows($con)."\n");

   //Saving the changes
   mysqli_commit($con);

   //Truncating the table
   mysqli_query($con, "DELETE FROM my_team where id in(3,4)"); 
   $res = mysqli_query($con, "SELECT * FROM my_team");
   print("No.of rows (before roll back): ".mysqli_affected_rows($con)."\n");

   //Roll back
   mysqli_rollback($con);

   //Contents of the table
   $res = mysqli_query($con, "SELECT * FROM my_team");
   print("No.of rows (after roll back): ".mysqli_affected_rows($con));

   //Closing the connection
   mysqli_close($con);
?>