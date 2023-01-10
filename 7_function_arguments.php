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

function getStudentInfo( $name = '', $age = 0 )
{
    return "<li>" . $name . " is " . $age .  " years old.</li>";
}

?>
<h4>Over 20 years old</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <?php if ( $user['age'] > 20 ) : ?>
    <?= getStudentInfo( $user['name'], $user['age'] ); ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h4>20 years old and above</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <?php if ( $user['age'] >= 20 ) : ?>
    <?= getStudentInfo( $user['name'], $user['age'] ); ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h4>less than 20 years old</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <?php if ( $user['age'] < 20 ) : ?>
    <?= getStudentInfo( $user['name'], $user['age'] ); ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h4>20 years old and below</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <?php if ( $user['age'] <= 20 ) : ?>
    <?= getStudentInfo( $user['name'], $user['age'] ); ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h4>equal to 20 years old</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <?php if ( $user['age'] == '20' ) : ?>
    <?= getStudentInfo( $user['name'], $user['age'] ); ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>

<h4>equal to 20 years old</h4>
<ul>
    <?php foreach ( $users as $user ) : ?>
    <?php if ( $user['age'] === '20' ) : ?>
    <?= getStudentInfo( $user['name'], $user['age'] ); ?>
    <?php endif; ?>
    <?php endforeach; ?>
</ul>