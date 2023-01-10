<?php

$user1 = [ 
    'name' => 'John', 
    'age' => 24 
]; 

$user2 = [  
    'name' => 'Jane',  
    'age' => 20  
]; 

$user3 = [  
    'name' => 'Jack',  
    'age' => 18  
];

?>
<ul>
    <li>
        <?= $user1['name']; ?> is <?= $user1['age']; ?> years old
    </li>
    <li>
        <?= $user2['name']; ?> is <?= $user2['age']; ?> years old
    </li>
    <li>
        <?= $user3['name']; ?> is <?= $user3['age']; ?> years old
    </li>
    </ui>