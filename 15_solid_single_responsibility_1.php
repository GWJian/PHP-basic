<?php

// BEFORE
class Employee {
    private $name;
    private $salary;
    private $taxRate;

    public function __construct($name, $salary, $taxRate) {
      $this->name = $name;
      $this->salary = $salary;
      $this->taxRate = $taxRate;
    }
  
    public function getName() {
      return $this->name;
    }
  
    public function getSalary() {
      return $this->salary;
    }
  
    public function setSalary($salary) {
      $this->salary = $salary;
    }
  
    public function getTaxRate() {
      return $this->taxRate;
    }
  
    public function setTaxRate($taxRate) {
      $this->taxRate = $taxRate;
    }
  
    public function calculatePaycheck() {
      return $this->salary * (1 - $this->taxRate);
    }
  }
  
  $employee = new Employee('John',4000,11);
  $employee->calculatePaycheck();

// AFTER
class Employee
{
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salaray = $salary;
    }

    public function getName() {
        return $this->name;
    }
    
    public function getSalary() {
        return $this->salary;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setSalary($salary) {
        $this->salary = $salary;
    }

}

class PaycheckCalculator
{
    private $taxRate;

    public function __construct( $taxRate )
    {
        $this->taxrate = $taxRate;
    }

    public function calculatePaycheck(Employee $employee) {
        return $employee->getSalary() * (1 - $this->taxRate);
    }
}

$employee = new Employee('John',4000);
$paycheckCalculator = new PaycheckCalculator(11);
$paycheckCalculator->calculatePaycheck();