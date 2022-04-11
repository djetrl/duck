<?php
require_once 'duck.php';
require_once 'flywithwings.php';
require_once 'Quack.php';
class MallardDuck extends Duck {
	public function __construct() {
		$this->flyBehavior = new flyWithWings();
		$this->Quackbehavior = new quack_();
	}
	public function display() {
		echo 'Я кряква.<br>';
	}
}
?>