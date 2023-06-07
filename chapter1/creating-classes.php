<?php

class Product
{
    /*  when you declare properties in PHP, please use modifiers  */
    public $name = 'SOAP';
    public $price = 8;

    /*  creating methods  */
    public function priceAsCurrency()
    {
        return $this->price / 100;
    }
}

$product = new Product();
echo 'Name: '.$product->name."\n";
echo "\n".'Price: '.$product->price."\n";
echo 'Using a method: '.$product->priceAsCurrency()."\n";
var_dump($product);
