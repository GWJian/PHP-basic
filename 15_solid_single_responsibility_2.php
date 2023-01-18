<?php

// BEFORE
class ShoppingCart {
    private $items = [];
    private $totalPrice = 0;
  
    public function addItem($item, $price) {
      $this->items[] = $item;
      $this->totalPrice += $price;
    }
  
    public function getTotalPrice() {
      return $this->totalPrice;
    }
  
    public function processPayment($paymentMethod) {
      // code to process payment
    }
  
    public function fulfillOrder() {
      // code to fulfill order
    }
  }

  $cart = new ShoppingCart();
  $cart->processPayment();

// AFTER
class ShoppingCart
{
    private $items = [];
    private $totalPrice = 0;

    public function addItem($item, $price) {
        $this->items[] = $item;
        $this->totalPrice += $price;
    }

    public function getTotalPrice() {
        return $this->totalPrice;
    }
}

class PaymentProcessor
{
    public function processPayment($paymentMethod) {
        // code to process payment
    }
}

class OrderFulfiller
{
    public function fulfillOrder() {
        // code to fulfill order
    }
}

$paymentProcessor = new PaymentProcessor();
$paymentProcessor->processPayment();