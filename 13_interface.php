<?php

/* Car & motorcycle rental application */

/**
 * This is the framework for you to create your  class.
 * Any methods here must 
 *  be in the class that implemented the interface.
 */
interface ParkYourVehicleInterface
{
    public function park();
}

interface VehicleWheelsInterface
{
   public function getWheels();
   public function updateWheels();
}

// children class
class Car implements VehicleWheelsInterface
{

    public function getWheels()
    {

    }

    public function updateWheels()
    {

    }

    public function drive()
    {

    }

    public function park()
    {

    }

}


class Motorcycle
{
    public function ride()
    {

    }

    public function park()
    {

    }
}