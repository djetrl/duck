<?php 
require_once "Quackbehavior.php";

class illegible implements QuackBehavior {
	public function quack() {
		echo 'illegible!<br>';
	}
}
?>