<?php

class Rectangle extends Shape {

    public function calculateArea(){
         return $this->getWidth() * $this->getHeight();
    }
}

?>