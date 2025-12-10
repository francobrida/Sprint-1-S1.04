<?php
require_once "Employee.php";

$employee = new Employee("Pedro Rodriguez", 2400);

echo $employee->checkTaxes();

?>