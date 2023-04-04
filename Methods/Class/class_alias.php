<?php
interface foo {}
class_alias('foo', 'bar');
echo interface_exists('bar') ? 'yes!' : 'no'; // prints yes!
?>