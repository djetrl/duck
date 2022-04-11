<?php
require_once 'duck.php';
require_once 'flyNoWays.php';
require_once 'MuteQuack.php';
class DecoyDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new flyNoWays();
		$this->Quackbehavior = new MuteQuack();
	}
	public function display() {
		echo 'я утка приманка.<br>';
	}
}
?>