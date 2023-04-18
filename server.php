<?php
require_once __DIR__ . '/Models/Product.php';
require_once __DIR__ . '/Models/Animal.php';
require_once __DIR__ . '/db.php';

$products = [];

foreach ($products_db as $key => $product) {
    array_push(
        $products,
        new Product(
            $product['name'],
            $product['description'],
            new Animal(),
            $product['category'],
            $product['price']
        )
    );
};
echo "<pre>";
var_dump($products);
echo "<pre>";
