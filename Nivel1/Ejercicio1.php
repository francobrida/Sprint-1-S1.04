<?php

class Employee {

    private String $name;
    private int $salary;

    public function __construct ($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    // Getters 

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    // Setters

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

    public function checkTaxes(){
        $message = $this->name . "<br>";
        
        $message .= ($this->salary > 6000)? "Paga Impuestos" : "No paga impuestos";
        return $message;
    }

}


?>