<?php 
require_once "Quackbehavior.php";

class squeak implements QuackBehavior {
	public function quack() {
		echo 'Я пищу!<br>';
	}
}
?>