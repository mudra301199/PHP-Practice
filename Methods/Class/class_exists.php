<?php
  
// Create a class
class CC {
    public $C_name = "Welcome to Cybercom"; 
} 
  
// Check class name exist or not
if(class_exists('CC')) {
    echo "Class name exists";
}
else {
    echo "Class name does not exist";
}
  
?>