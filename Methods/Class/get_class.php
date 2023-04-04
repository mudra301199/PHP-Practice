<?php

// Create a class
class Cc {

	public function Cyber() {
		echo "Class name: " . get_class($this);
	}
}

// Create an object
$obj = new Cc();

$obj->Cyber();

?>
