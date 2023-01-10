<!-- https://portal.forwardschool.co/library/cs-1-2-software-design-and-architecture-55877/453636/path/step/226591256/ -->


<?php



// ========================================================================================================
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }
}

$numbers = [ 2, 3, 4, 5, 6 ];

$total = 0;

foreach( $numbers as $num )
{
    $total = Math::add( $total, $num );
}

// for ( $i = 0; $i < count( $numbers ); $i++ )
// {
//     $total = Math::add( $total, $numbers[$i] ); // ex:$numbers[0]
// }

// round 1 - 0 + 2, $total = 2
// round 2 - 2 + 3, $num = 3, $total = 5
// round 3 - 5 + 4, $num = 4, $total = 9
// round 4 - 9 + 5, $num = 5, $total = 14
// round 5 - 14 + 6, $num = 6, $total = 20

echo $total;


// ==============================================================================================================


class ShippingCalculator
{
    public static function multiply ($weight,$distance)
    {
        return $weight * $distance;
    }
}

echo '<br />';
echo ShippingCalculator::multiply( 10,100 );

// ==============================================================================================================

class CAT
{
    public static function meow ( $meow )
    {
        return $meow;
    }
    public static function scratch ( $meow )
    {
        return $meow;
    }
    public static function age ( $meow )
    {
        return $meow;
    }
}


echo '<br />';
echo CAT::meow('oyen meow');
echo '<br />';
echo CAT::scratch('oyen scratch the sofa');
echo '<br />';
echo CAT::age('oyen is 1 years old');





?>