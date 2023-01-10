<?php

// normal class
class NormalCalculator
{
    private $x; // number 1
    private $y; // number 2

    public function __construct( $number1, $number2 )
    {
        $this->x = $number1;
        $this->y = $number2;
    }

    public function add()
    {
        return $this->x + $this->y;
    }

}

$calculator = new NormalCalculator( 2, 3 ); // 2 is $number1, 3 is $number2
echo $calculator->add(); // output: 5

echo '<br />';

// static class
class StaticCalculator
{
    public static function add( $number1, $number2 )
    {
        return $number1 + $number2;
    }
}

echo StaticCalculator::add( 2, 3 );