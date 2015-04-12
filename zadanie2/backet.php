<?php

require 'product.php';

class Basket {

private $products = array();

public function __construct() {
//$this->products = array();  <-  to samo co w linii 6
}

public function addProduct(Product $product, $quantity = 1) {
if ($this->hasProduct($product))
{$this->updateQuantity($product,
 $this->products[$product->getId()]['quantity'] + $quantity);
}
else
{
$this->products[$product->getId()] = array(
'product' => $product,
 'quantity' => $quantity
);
}

public function removeProduct(Product $product) {
unset($this->products[$product->getId()]);
}

public function updateQuantity(Product $product, $quantity) {
$this->products[$product->getId()]['quantity'] = $quantity;
}

public function getAmount() {
$amount = 0;
foreach ($this->products as $product) {
$amonut += $product['product']->getPrice() * $product['quantity'];
}

return $amount;
}

public function getProducts() {
return $this->products;
}


public function getNbProducts()
{
$quantity = 0;
foreach ($this->products as $product)
{
$quantity += $product['quantity'];
}
return $quantity;
}
/**
 * Sprawdza czy produkt jest juz w koszyku
 * @param Product $product Produkt ktorych chcemy dodac do sprawdzić
 * @return boolean True or False
 */
public function hasProduct(Product $product)
{
return array_key_exists($product->getId(), $this->products);
}
}
