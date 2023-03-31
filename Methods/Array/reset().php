<?php
   $input = array('foot', 'bike', 'car', 'plane');
   $mode = end($input);
   print "$mode <br />";
   
   $mode = reset($input);
   print "$mode <br />";
   
   $mode = current($input);
   print "$mode <br />";
?>