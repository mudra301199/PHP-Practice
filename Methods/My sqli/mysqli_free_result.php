<?php
   $host = "localhost";
   $username  = "root";
   $passwd = "";
   $dbname = "project-mudra-patel";

   //Creating a connection
   $con = mysqli_connect($host, $username, $passwd, $dbname);

   mysqli_query($con, "CREATE TABLE myplayers(ID INT, First_Name VARCHAR(255), Last_Name VARCHAR(255), Place_Of_Birth VARCHAR(255), Country VARCHAR(255))");
   print("Table Created.....\n");
   mysqli_query($con, "INSERT INTO myplayers values(1, 'Sikhar', 'Dhawan', 'Delhi', 'India')");
   mysqli_query($con, "INSERT INTO myplayers values(2, 'Jonathan', 'Trott', 'CapeTown', 'SouthAfrica')");
   mysqli_query($con, "INSERT INTO myplayers values(3, 'Kumara', 'Sangakkara', 'Matale', 'Srilanka')");
   print("Record Inserted.....\n");

   //Retrieving the contents of the table
   $res = mysqli_query($con, "SELECT * FROM myplayers");

   print("Contents of the resultset...\n");
   //Contents of the resultset
   while ($row = mysqli_fetch_row($res)) {
      print("ID: ".$row[0]."\n");
      print("First_Name: ".$row[1]."\n");
      print("Last_Name: ".$row[2]."\n");
      print("Place_Of_Birth: ".$row[3]."\n");
      print("Country: ".$row[4]."\n");
   }

   //Closing the statement
   mysqli_free_result($res);

   //Closing the connection
   mysqli_close($con);
?>