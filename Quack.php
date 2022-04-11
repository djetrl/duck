<?php 
require_once "Quackbehavior.php";

class quack_ implements QuackBehavior {
	public function quack() {
		echo 'Я квакаю!<br>';
	}
}
?>