<?php

class Animals 
{
	// Only change code below this line
    protected $species;
    protected $weight;
    protected $age;

    public function __construct($species, $weight, $age) {
        $this->species = $species;
        $this->weight = $weight;
        $this->age = $age;				
    }

	// Only change code above this line
}

class Mammals extends Animals 
{
	// Only change code below this line
    public function get_hair()
    {
        return 'Mammals have hair.';
    }
    // Only change code above this line
}

class Dogs extends Mammals 
{
	// Only change code below this line
    public function bark()
    {
        return 'Woof!';
    }
	// Only change code above this line
}

$dog = new Dogs("Chihuahua", 25, 3);

echo $dog->get_hair();
echo "<br>";
echo $dog->bark();