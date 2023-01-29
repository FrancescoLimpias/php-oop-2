<?php

// IMPORTS
include __DIR__ . "/Models/Category.php";
include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Types.php";

// CATEGORIES
$categories = [
    new Category("Gatto", "descrizione cat1"),
    new Category("Volatile", "descrizione cat2"),
    new Category("Cane", "descrizione cat3"),
];

// PRODUCTS
$products = [
    new Product("Product1", 64, "Product 1 description", $categories[0]),
    new Toy("Product2", 23, "Product 2 description", $categories[1], 10),
    new Food("Product3", 54, "Product 3 description", $categories[0], "19-02-2022", ["ing1", "ing2", "ing3", "ing4", "ing5"]),
    new Product("Product4", 76, "Product 4 description", $categories[2]),
    new Product("Product5", 12, "Product 5 description", $categories[1]),
];

// PRINT """CARDS"""
foreach ($products as $product) {
    echo $product->getHTML();
    echo "<br><br>";
}
