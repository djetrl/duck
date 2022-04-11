<?php
header ('Content-type: text/html; charset=utf-8');
require_once 'mallardduck.php';
require_once 'RedHeadDuck.php';
require_once 'RubberDuck.php';
require_once 'DecoyDuck.php';
require_once 'duck_jetFlight.php';
echo 'MallardDuck.<br> ';
$duck1 = new MallardDuck();
$duck1->display();
$duck1->performFly();
$duck1->performquack();
$duck1->swim();


echo '<br> ';
echo 'RedHeadDuck.<br> ';

$duck2 = new RedHeadDuck();
$duck2->display();
$duck2->performFly();
$duck2->performquack();
$duck2->swim();

echo '<br> ';
echo 'RubberDuck.<br> ';

$duck3 = new RubberDuck();
$duck3->display();
$duck3->performFly();
$duck3->performquack();
$duck3->swim();

echo '<br> ';
echo 'DecoyDuck.<br> ';

$duck4 = new DecoyDuck();
$duck4->display();
$duck4->performFly();
$duck4->performquack();
$duck4->swim();

echo '<br> ';
echo 'duck_jetFlight.<br> ';

$duck5 = new duck_jetFlight();
$duck5->display();
$duck5->performFly();
$duck5->performquack();
$duck5->swim();
?>