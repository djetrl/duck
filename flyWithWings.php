<?php 
require_once "flybehavior.php";

class FlyWithWings implements FlyBehavior {
	public function fly() {
		echo 'Я лечу!<br>';
	}
}
?>