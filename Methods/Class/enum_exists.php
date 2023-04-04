<?php
    
enum Season { 
    case Spring; 
    case Winter;
}
  
if(enum_exists(Season::class)){
    echo "Season enum is defined" ;
} else {
    echo "Season enum is not defined" ;
}
  
?>