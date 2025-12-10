<?php
require_once "PokerDice.php";
require_once "PokerDicesGroup.php";

$pokerHand = new PokerDicesGroup(); 
$figures = $pokerHand->throw5Dices();

foreach ($figures as $figure) {
    echo $figure . "\n";
}


?>