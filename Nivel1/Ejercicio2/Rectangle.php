<?php

class Rectangle extends Shape {

    public function __construct($width, $height) {
        return parent::__construct($width, $height);
    }

    public function calculateArea(){
         return $this->getWidth() * $this->getHeight();
    }
}

?>