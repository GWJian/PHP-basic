<?php

interface Fuel {
	// Only change code below this line
	public function getFuelType();
	// Only change code above this line
}

abstract class Vehicle {
    protected $make;
    protected $model;
    protected $year;
    protected $pricePerDay;

    public function __construct($make, $model, $year, $pricePerDay) {
		// Only change code below this line
		$this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->pricePerDay = $pricePerDay;
		// Only change code above this line
    }
    
    abstract public function rentalRate($days);
}

class Car extends Vehicle implements Fuel {
    protected $seats;

    public function __construct($make, $model, $year, $pricePerDay, $seats) {
        parent::__construct($make, $model, $year, $pricePerDay);
		// Only change code below this line
		$this->seats = $seats;		
		// Only change code above this line
    }

    public function rentalRate($days) {
        return $this->pricePerDay * $days;
    }

    public function getFuelType() {
        return "Gasoline";
    }
}

class Motorcycle extends Vehicle implements Fuel {
    protected $cc;

    public function __construct($make, $model, $year, $pricePerDay, $cc) {
		// Only change code below this line
		parent::__construct( $make, $model, $year, $pricePerDay );
		$this->cc = $cc;
		// Only change code above this line
    }

	// Only change code below this line
	public function rentalRate($days) {
        return $this->pricePerDay * $days;
    }
	
    public function getFuelType() {
        return "Gasoline";
    }
	// Only change code above this line
}

$car = new Car("Toyota", "Camry", 2021, 50, 5);
$motorcycle = new Motorcycle("Harley", "Davidson", 2021, 30, 1500);

echo "Rental rate for car for 3 days: $" . $car->rentalRate(3) . "<br />";
echo "Rental rate for motorcycle for 3 days: $" . $motorcycle->rentalRate(3) . "<br />";
echo "Fuel type for car: " . $car->getFuelType() . "<br />";
echo "Fuel type for motorcycle: " . $motorcycle->getFuelType() . "<br />";