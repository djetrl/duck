<?php 
require_once "Quackbehavior.php";

class MuteQuack implements Quackbehavior {
	public function quack() {
		echo 'Я не квакаю!<br>';
	}
}
?>