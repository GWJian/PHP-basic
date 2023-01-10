<?php

class Dog
{
    public $name;
    public $breed;
    public $weight; // kg

    function __construct( $name, $breed, $weight ) 
    {
        $this->name = $name;
        $this->breed = $breed;
        $this->weight = $weight; //kg
    }

    function bark()
    {
        echo $this->name . ' bark ';
    }

    function eat()
    {
        echo $this->name . ' eating';
    }

    function run()
    {
        echo $this->name . ' run';
    }

    function sleep()
    {
        echo $this->name . ' sleep';
    }

    function weightInPounds()
    {
        // from kg to pounds
        echo $this->weight*2.2;
    }
}

// dog name spike
$spike = new Dog(
    'Spike',
    'bulldog',
    23 // kg
);

// echo $spike->name;
// echo $spike->breed;
// echo $spike->weight;

echo $spike->bark();
echo $spike->weightInPounds(); // 50.6
// echo $spike->run();
// echo $spike->eat();

echo '<br />';

$adam = new Dog(
    'Adam',
    'chiwahwah',
    9 //kg
);

echo $adam->bark();
echo $adam->weightInPounds(); // 19.8
// echo $adam->run();
// echo $adam->eat();