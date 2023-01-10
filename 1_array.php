<?php 

$names = [ 'john', 'jane', 'jack' ];

?>
<ul>
    <?php foreach( $names as $name ) : ?>
    <li><?= $name; ?></li>
    <?php endforeach; ?>
</ul>

<ul>
    <?php 
        foreach ($names as $name) { 
            echo "<li>$name</li>"; 
        }
    ?>
</ul>