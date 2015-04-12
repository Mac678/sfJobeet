<?php

require_once 'product.php';
require_once 'backet.php';

$prod1 = new Product();
$prod1
        ->setName('Product1')
        ->setPrice(100);
        
        $prod2 = new Product();
$prod2
        ->setName('Product2')
        ->setPrice(102);
        
        $prod3 = new Product();
$prod3
        ->setName('Product3')
        ->setPrice(103);
        
        $prod4 = new Product();
$prod4
        ->setName('Product4')
        ->setPrice(104);
        
        $basket = new Basket();
        
        $basket->addProduct($prod1);
        $basket->addProduct($prod2, 2);
        
        echo '<pre>';
        var_dump([$basket->getProducts()]);
        
        echo '</pre>';
        
        $basket->updateQuantity($prod3, 3);
                
                echo '<br><pre>';
        var_dump([$basket->getProducts()]);
        echo '</pre>';
        
        
        
        
        