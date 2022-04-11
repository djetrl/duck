<?php
require_once 'duck.php';
require_once 'flyNoWays.php';
require_once 'Squeak.php';
class RubberDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new flyNoWays();
		$this->Quackbehavior = new squeak();
	}
	public function display() {
		echo 'я игрушечная утка.<br>';
	}
}
?>