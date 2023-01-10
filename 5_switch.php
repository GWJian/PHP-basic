<?php
$users = [ 
    [ 
        'name' => 'John', 
        'age' => 24, 
        'is_student' => false, 
    ], 
    [  
        'name' => 'Jane',  
        'age' => 20, 
        'is_student' => true,  
    ], 
    [  
        'name' => 'Jack',  
        'age' => 18, 
        'is_student' => true,   
    ] 
];
?>
<h4>Switch</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <li>
        <?php
            // first example using if-else
            // if ( $user['is_student'] == true ) {
            //     echo $user['name'] . " is a student";
            // }

            // if ( $user['is_student'] == false ) {
            //     echo $user['name'] . " is not a student";
            // }

            // second example using switch
            switch( $user['is_student'] ) {
                case true:
                    echo $user['name'] . " is a student";
                    break;
                case false:
                    echo $user['name'] . " is not a student";
                    break;
            }
        ?>
    </li>
    <?php endforeach; ?>
</ul>