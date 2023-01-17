<?php

/* Car & motorcycle rental application */

/** 
 * abstract class behave the same as any parent class.
 * The only difference is it cannot be initialize
 * 
 * */ 
abstract class Vehicle
{
    protected $wheels = 4;
    protected $color = 'blue'; 
    protected $engine = 'engine'; 

    public function getWheels()
    {
        return 'This vehicle have ' .$this->wheels . ' wheels.';
    }

    public function updateWheels($newWheels)
    {
        $this->wheels = $newWheels;
    }
}

// children class
class Car extends Vehicle
{
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
    protected $wheels = 2;
    protected $color = 'red';

    public function ride()
    {

    }
}