<?php

class Employee {

    private String $name;
    private int $salary;

    public function __construct ($name, $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function checkTaxes(){
        $message = $this->name . "<br>";
        
        $message .= ($this->salary > 6000)? "Paga Impuestos" : "No paga impuestos";
        return $message;
    }

}


?>