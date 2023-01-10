<?php

// nested array
$users = [
    [ 
        'name' => 'John', 
        'age' => 24 
    ],
    [  
        'name' => 'Jane',  
        'age' => 20  
    ],
    [  
        'name' => 'Jack',  
        'age' => 18  
    ]
];

?>
<ul>
    <?php 
    foreach ( $users as $user ) {
        echo "<li>" . $user['name'] . " is " . $user['age'] .  " years old</li>";
    } 
    ?>
</ul>

<ul>
    <?php foreach ( $users as $user ) : ?>
    <li><?= $user['name']; ?> is <?= $user['age']; ?> years old</li>
    <?php endforeach; ?>
</ul>