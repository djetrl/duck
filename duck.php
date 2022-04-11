<?php 
require_once 'flybehavior.php';
require_once 'QuackBehavior.php';
abstract class Duck {
	protected $flyBehavior;
	
	abstract public function display();
	public function performFly() {
		$this->flyBehavior->fly();
	}
	
	protected $Quackbehavior;
	
	public function performquack() {
		$this->Quackbehavior->quack();
	}
	public function swim() {
		echo 'Все утки умеют плавать, даже деревянные<br>';
	}
}
?>