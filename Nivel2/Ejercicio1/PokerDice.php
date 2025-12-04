<?php

class PokerDice {

   private array $figures;
   private int $lastRoll;
   public static int $totalRollCounter = 0;

   public function __construct() {
    $this->figures = ["Ace", "K", "Q", "J", "7", "8"];
    $this->lastRoll = -1;
    }

   public function rollTheDice() {
        $this->lastRoll = rand(0, 5);
        self::$totalRollCounter++; 
    }

   public function tellFigure() : string {
         return $this->figures[$this->lastRoll];
    }

}

?>