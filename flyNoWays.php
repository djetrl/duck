<?php 
require_once "flybehavior.php";

class FlyNoWays implements FlyBehavior {
	public function fly() {
		echo 'я не лечу!<br>';
	}
}
?>