<?php

class Shape {

    private $width;
    private $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getHeight(){
        return $this->height;
    }

    public function setWidth($width){
        $this->width = $width;
    }

    public function setHeight($height){
        $this->height = $height;
    }

}

class Triangle extends Shape {

    public function __construct($width, $height) {
        return parent::__construct($width, $height);
    }

    public function calculateArea() {
        return ($this->getWidth() * $this->getHeight()) / 2;
    }
}

class Rectangle extends Shape {

    public function __construct($width, $height) {
        return parent::__construct($width, $height);
    }

    public function calculateArea(){
         return $this->getWidth() * $this->getHeight();
    }
}

?>