<?php
 

class MagicMethod {

    function __get($name){

        echo "You are trying to get '" . $name . 

          "' which is either inaccessible 

           or non existing member"; 

    }
}
 

$obj = new MagicMethod();

$obj->value;
 
?>