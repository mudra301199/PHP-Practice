<?php
 

class MagicMethod {

    function __call($name , $parameters){

        echo "Name of method =>" . $name."\n";

        echo "Parameters provided\n";

        print_r($parameters);

    }
}
 
// Instantiating MagicMethod

$obj = new MagicMethod();
 

$obj->hello("Magic" , "Method");
 
?>