<?php

interface Shipping {
    // Only change code below this line
    public function calculateShipping();
    // Only change code above this line
}

abstract class Product {
    protected $name;
    protected $price;
    protected $quantity;

public function __construct($name, $price, $quantity) {
    // Only change code below this line
    $this->name = $name;
    $this->price = $price;
    $this->quantity = $quantity;
    // Only change code above this line
}
}

class Book extends Product implements Shipping {
    protected $author;
    // Only change code below this line

    public function __construct($name, $price, $quantity, $author) {
        parent::__construct($name, $price, $quantity);
        $this->author =$author;
    }

    public function calculateShipping(){
        return '5$';
    }
// Only change code above this line
}

class Phone extends Product implements Shipping {
    protected $brand;
    protected $weight;
    protected $distance;

    // Only change code below this line
    public function __construct($name, $price, $quantity, $brand, $weight, $distance) {
        parent::__construct($name, $price, $quantity);
        $this->brand =$brand;
        $this->weight =$weight;
        $this->distance =$distance;
    }


    public function calculateShipping() {
        return $this->weight * $this->distance .'$';
    }

    // Only change code above this line
}

$book = new Book("PHP for Beginners", 20.99, 5, "John Doe");
$phone = new Phone("iPhone 12", 999, 2, "Apple", 0.5, 100);

echo "Shipping cost for book: " . $book->calculateShipping() . "<br />";
echo "Shipping cost for phone: " . $phone->calculateShipping() . "<br />";