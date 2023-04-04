<?php

trait foo { }
class bar {
  use foo;
}

print_r(class_uses(new bar));

print_r(class_uses('bar'));

spl_autoload_register();

// use autoloading to load the 'not_loaded' class
print_r(class_uses('not_loaded', true));

?>