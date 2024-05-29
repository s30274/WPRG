<?php

class Product {
    private $name="", $price=0.0, $quantity=0;
    public function __construct($name, $price, $quantity)
    {
        $this->name=$name;
        $this->price=$price;
        $this->quantity=$quantity;
    }

    public function setName($name) {
        $this->name=$name;
    }
    public function setPrice($price) {
        $this->price=$price;
    }
    public function setQuantity($quantity) {
        $this->quantity=$quantity;
    }

    public function getName() {
        return $this->name;
    }
    public function getPrice() {
        return $this->price;
    }
    public function getQuantity() {
        return $this->quantity;
    }

    public function toString() {
        return "Product: ".$this->name.", Price: ".$this->price.", Quantity: ".$this->quantity;
    }
}

class Cart {
    private $products;
    public function __construct() {
        $this->products=array();
    }
    public function addProduct($product) {
        array_push($this->products, $product);
    }
    public function removeProduct($product) {
        $index = array_search($product, $this->products);
        array_splice($this->products, $index, 1);
    }
    public function getTotal() {
        $sum = 0;
        for($i=0; $i<count($this->products); $i++) {
            $sum+=$this->products[$i]->getPrice();
        }
        return $sum;
    }
    public function toString() {
        $string = "Products in cart: \n";
        for($i=0; $i<count($this->products); $i++){
            $string .= $this->products[$i]->toString()."\n";
        }
        $string .= "Total price: ".$this->getTotal();
        return $string;
    }
}

$product = new Product("Laptop", 1500, 1);
$product2 = new Product("Komputer", 1300, 1);
$product3 = new Product("Monitor", 400, 1);
$cart = new Cart();
echo $product->toString()."\n";
$cart->addProduct($product);
$cart->addProduct($product2);
$cart->addProduct($product3);
$cart->removeProduct($product2);
echo $cart->toString()."\n";