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

   //Fetching all the fields
   $info = mysqli_fetch_fields($res);
   foreach ($info as $ele) {
      print("ID: ".$ele->name."\n");
      print("First_Name: ".$ele->table."\n");
      print("Last_Name: ".$ele->max_length."\n");
      print("Place_Of_Birth: ".$ele->charsetnr."\n");
      print("Country: ".$ele->flags."\n");
      print("Country: ".$ele->type."\n");
      print("\n");
   }
   //Closing the statement
   mysqli_free_result($res);

   //Closing the connection
   mysqli_close($con);
?>