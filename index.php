<?php

// IMPORTS
include __DIR__ . "/Models/Category.php";
include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Types.php";

// CATEGORIES
echo "Category class test" . "<br>";

$categories = [
    new Category("Gatto", "descrizione cat1"),
    new Category("Volatile", "descrizione cat2"),
    new Category("Cane", "descrizione cat3"),
];

var_dump($categories);

// PRODUCTS
echo "<br><br>" . "Product class test" . "<br>";

$products = [
    new Product("Product1", 64, "Product 1 description", $categories[0]),
    new Product("Product2", 23, "Product 2 description", $categories[1]),
    new Product("Product3", 54, "Product 3 description", $categories[0]),
    new Product("Product4", 76, "Product 4 description", $categories[2]),
    new Product("Product5", 12, "Product 5 description", $categories[1]),
];

var_dump($products);

// PRODUCTS
echo "<br><br>" . "Expiration/discount test" . "<br>";

$prodDisc = new Product("DiscountedProduct", 100, "Desc...", $categories[1]);
$prodDisc->setExpDate("sda");
$prodDisc->setDiscount(41);

var_dump($prodDisc->getDiscount());
