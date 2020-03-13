<?php
require_once('Class/Autoloader.php');

Autoloader::register();

$player1 = new Player("Danny");
$player2 = new Player("Maggie", 40);
$healer = new Wizard("Leoctus");

$player2->attacking($player1);

$player2->attacking($player1);

$player1->attacking($player2);

$healer->healing($player1);

$player2->attacking($healer);

Tools::debug([$player1, $player2, $healer]);