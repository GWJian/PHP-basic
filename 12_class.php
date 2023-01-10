<?php

class Student
{
    private $name;

    public function __construct( $name )
    {
        $this->name = $name;
    }

    public function getFirstName()
    {
        $data = explode( ' ', $this->name );
        return $data[0];
    }

    public function getLastName()
    {
        $data = explode( ' ', $this->name );
        return $data[1];
    }
}

$student1 = new Student('John Doe');
$student2 = new Student('Jane Doe');

echo $student1->getFirstName();
echo '<br />';
echo $student1->getLastName();