<?php

// BEFORE 


class Product {
    // Only change code below this line
    protected $name;
    protected $price;
    protected $quantity;
    protected $type;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getProductType() {
        return $this->type;
    }

    public function setProductType($type) {
        $this->type = $type;
    }
    
    // Only change code above this line
}

class Book extends Product {
    // Only change code below this line
    protected $author;
    protected $ISBN;
    
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }
    
    // Only change code above this line
}

class Clothing extends Product {
    // Only change code below this line
    protected $size;
    protected $color;
    
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    
    // Only change code above this line
}

class OnlineStore {
    protected $products = array();

    // Only change code below this line
    public function addProduct( Product $product )
    {
        $this->products[] = $product;
    }
    
    // Only change code above this line
    
    public function getAllProducts() {
        return $this->products;
    }
}

$store = new OnlineStore();

$book1 = new Book();
$book1->setName("Harry Potter and the Sorcerer's Stone");
$book1->setPrice(20.99);
$book1->setQuantity(10);
$book1->setProductType("Book");
$book1->setAuthor("J.K. Rowling");
$book1->setISBN("9780590353427");

$clothing1 = new Clothing(3, "Men's T-Shirt", 14.99, 20, "Medium", "Blue");
$clothing1->setName("Men's T-Shirt");
$clothing1->setPrice(14.99);
$clothing1->setQuantity(20);
$clothing1->setProductType("Clothing");
$clothing1->setSize("Medium");
$clothing1->setColor("Blue");

$store->addProduct($book1);
$store->addProduct($clothing1);

$allProducts = $store->getAllProducts();
foreach ($allProducts as $product) {
    switch( $product->getProductType() ) {
        case 'Book':
            echo "Book: " . $product->getName() . " by " . $product->getAuthor() . " - $" . $product->getPrice() . " (" . $product->getQuantity() . " in stock) - ISBN: " . $product->getISBN() . "<br />";
            break;
        case 'Clothing':
            echo "Clothing: " . $product->getName() . " - $" . $product->getPrice() . " (" . $product->getQuantity() . " in stock) - Size: " . $product->getSize() . " - Color: " . $product->getColor() . "<br />";
            break;
    }
}

// AFTER

class Product {
    // Only change code below this line
    protected $name;
    protected $price;
    protected $quantity;
    protected $type;

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
    }

    public function getProductType() {
        return $this->type;
    }

    public function setProductType($type) {
        $this->type = $type;
    }
    
    // Only change code above this line
}

class Book extends Product {
    // Only change code below this line
    protected $author;
    protected $ISBN;
    
    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getISBN()
    {
        return $this->ISBN;
    }

    public function setISBN($ISBN)
    {
        $this->ISBN = $ISBN;
    }

    public function display()
    {  
        echo "Book: " . $this->getName() . " by " . $this->getAuthor() . " - $" . $this->getPrice() . " (" . $this->getQuantity() . " in stock) - ISBN: " . $this->getISBN() . "<br />";
    }
    
    // Only change code above this line
}

class Clothing extends Product {
    // Only change code below this line
    protected $size;
    protected $color;
    
    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function display()
    {
        echo "Clothing: " . $this->getName() . " - $" . $this->getPrice() . " (" . $this->getQuantity() . " in stock) - Size: " . $this->getSize() . " - Color: " . $this->getColor() . "<br />";
    }
    
    // Only change code above this line
}

class OnlineStore {
    protected $products = array();

    // Only change code below this line
    public function addProduct( Product $product )
    {
        $this->products[] = $product;
    }
    
    // Only change code above this line
    
    public function getAllProducts() {
        return $this->products;
    }
}

$store = new OnlineStore();

$book1 = new Book();
$book1->setName("Harry Potter and the Sorcerer's Stone");
$book1->setPrice(20.99);
$book1->setQuantity(10);
$book1->setProductType("Book");
$book1->setAuthor("J.K. Rowling");
$book1->setISBN("9780590353427");

$clothing1 = new Clothing(3, "Men's T-Shirt", 14.99, 20, "Medium", "Blue");
$clothing1->setName("Men's T-Shirt");
$clothing1->setPrice(14.99);
$clothing1->setQuantity(20);
$clothing1->setProductType("Clothing");
$clothing1->setSize("Medium");
$clothing1->setColor("Blue");

$store->addProduct($book1);
$store->addProduct($clothing1);

$allProducts = $store->getAllProducts();
foreach ($allProducts as $product) {
    $product->display();
}