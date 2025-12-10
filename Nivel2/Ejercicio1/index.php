<?php

$dices = [];

for ($i = 0; $i < 5; $i++) {
    $dices[] = new PokerDice();
} // Creates the dices and storage them in an array

foreach ($dices as $dice) {
    $dice->rollTheDice();
} // Uses the methods for each of the five dices.

?>