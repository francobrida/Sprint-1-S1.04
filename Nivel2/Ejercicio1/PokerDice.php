<?php

class PokerDice {

   public static array $figures = ["Ace", "K", "Q", "J", "7", "8"];
   private int $lastRoll;
   public static int $totalRollCounter = 0;

   public function __construct() {
    $this->lastRoll = rand(0, 5);
    }

   public function rollTheDice() : void {
        $this->lastRoll = rand(0, 5);
        self::$totalRollCounter++; 
    }

   public function tellFigure() : string {
         return self::$figures[$this->lastRoll];
    }

    public static function tellTotalRolls() : int {
        return self::$totalRollCounter;
    }

}

?>