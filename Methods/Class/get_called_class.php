<?php

// Create a class
class CC {
	public $C_name = "Welcome to Cybercom";
	
	public function Cyber() {
		var_dump(get_called_class());
	}
}

CC::Cyber();

?>
