<?php

interface foo { }
class bar implements foo {}

print_r(class_implements(new bar));

// you may also specify the parameter as a string
print_r(class_implements('bar'));

spl_autoload_register();

// use autoloading to load the 'not_loaded' class
print_r(class_implements('not_loaded', true));

?>