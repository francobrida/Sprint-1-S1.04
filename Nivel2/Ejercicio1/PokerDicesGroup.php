<?php

class PokerDicesGroup {

    private array $dices;

    public function __construct() {
        $this->dices = [];
        for ($i = 0; $i < 5; $i++) {
            $this->dices[] = new PokerDice();
        }
    }

    public function throw5Dices() : array {
        $figures = [];
        foreach ($this->dices as $dice) {
            $dice->rollTheDice();
            $figures[] = $dice->tellFigure();
        }
        return $figures;
    }

    public function getDices() : array {
        return $this->dices;
    }

}
?>