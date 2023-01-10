<?php

class Cat
{
    public $name;
    public $age;

    function __construct( $name ,$age) {
        // Only change code below this line
        $this->name = $name;
        $this->age = $age;
        // Only change code above this line
    }

    function meow()
    {
        // Only change code below this line
        echo $this->name . ' meow ';
        // Only change code above this line
    }
    function scratch()
    {
        // Only change code below this line
        echo $this->name . " scratch the sofa";
        // Only change code above this line
    }

    function age()
    {
        // Only change code below this line
        echo $this->name ." ". $this->age . " years old";
        // Only change code above this line
    }
}

// Only change code below this line
$oyan = new Cat(
    "oyan",//name
    1//age
);
// Only change code above this line

echo $oyan->meow(); // output "oyen meow"
echo '<br />';
echo $oyan->scratch(); // output "oyen scratch the sofa"
echo '<br />';
echo $oyan->age(); // output "oyen is __ years old"