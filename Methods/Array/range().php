<?php
   foreach (range(0, 6) as $number) {
      echo "$number, ";
   }
   print "\t";
   
   foreach (range(0, 100, 10) as $number) {
      echo "$number, ";
   }
   print "\t";
   
   foreach (range('a', 'c') as $letter) {
      echo "$letter, ";
   }
   print "\t";
   
   foreach (range('f', 'a') as $letter) {
      echo "$letter, ";
   }
   print "\t";
?>