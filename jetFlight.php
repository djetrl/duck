<?php 
require_once "flybehavior.php";

class Jet_fly implements FlyBehavior {
	public function fly() {
		echo 'Я лечу на реактивной тяге!<br>';
	}
}
?>