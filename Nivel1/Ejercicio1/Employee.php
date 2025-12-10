<?php

class Employee {

    private string $name;
    private int $salary;

    public function __construct (string $name,int $salary){
        $this->name = $name;
        $this->salary = $salary;
    }

    public function checkTaxes(): string {
        $message = $this->name . "<br>";
        
        $message .= ($this->salary > 6000)? "Paga Impuestos" : "No paga impuestos";
        return $message;
    }

}


?>