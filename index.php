<?php

include __DIR__ . "/Models/Category.php";
include __DIR__ . "/Models/Product.php";
include __DIR__ . "/Models/Types.php";

$categories = [
    new Category("Gatto", "descrizione cat1"),
    new Category("Volatile", "descrizione cat2"),
    new Category("Cane", "descrizione cat3"),
];