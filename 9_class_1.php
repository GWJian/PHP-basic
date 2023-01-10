<?php

class Dog
{
    public $name;
    public $breed;
    public $weight;

    function bark()
    {
        echo 'bark';
    }

    function eat()
    {
        echo 'eat';
    }

    function run()
    {
        echo 'run';
    }

    function sleep()
    {
        echo 'sleep';
    }
}

// dog name spike
$spike = new Dog();

$spike->name = 'Adam';
$spike->breed = 'builddog';
$spike->weight = 23;

echo $spike->name;

$spike->eat();