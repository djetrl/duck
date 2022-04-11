<?php
require_once 'duck.php';
require_once 'jetFlight.php';
require_once 'illegible_quack.php';
class duck_jetFlight extends Duck {
	public function __construct() {
		$this->flyBehavior = new Jet_fly();
		$this->Quackbehavior = new illegible();
	}
	public function display() {
		echo 'я реактивная утка.<br>';
	}
}
?>