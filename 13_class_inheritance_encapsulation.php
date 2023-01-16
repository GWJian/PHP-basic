<?php

/* Car & motorcycle rental application */

// parent class
class Vehicle
{
    // private property -> can be access only by the class itself
    // and not its children
    private $wheels = 4;
    // protected property -> can be access only inside the class itself
    // as well as its children class
    protected $color = 'blue'; 
    // public property -> can be access anyway
    public $engine = 'engine'; 
}

// children class
class Car extends Vehicle
{
    public function getWheels()
    {
        return 'This vehicle have ' .$this->wheels . ' wheels.';
    }

    public function updateWheels($newWheels)
    {
        $this->wheels = $newWheels;
    }

    public function drive()
    {

    }

    public function park()
    {

    }

}

$car = new Car();
echo $car->getWheels();

echo '<br />';

class Motorcycle extends Vehicle
{
    private $wheels = 2;
    public $color = 'red';

    public function getWheels()
    {
        return 'This vehicle have ' .$this->wheels . ' wheels.';
    }

    public function updateWheels($newWheels)
    {
        $this->wheels = $newWheels;
    }

    public function ride()
    {

    }
}

$motorcycle = new Motorcycle();
$motorcycle->updateWheels(3);
echo $motorcycle->getWheels();
// echo $motorcycle->color;
