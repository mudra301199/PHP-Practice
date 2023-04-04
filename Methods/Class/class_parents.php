<?php

class foo { }
class bar extends foo {}

print_r(class_parents(new bar));

// you may also specify the parameter as a string
print_r(class_parents('bar'));

spl_autoload_register();

// use autoloading to load the 'not_loaded' class
print_r(class_parents('not_loaded', true));

?>