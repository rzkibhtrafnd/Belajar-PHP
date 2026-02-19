<?php
// Index Array
$buah = ["Apel", "Jeruk", "Mangga"];
echo $buah[0] . "\n";

// Associative Array
$product = [
    "id" => 1,
    "name" => "Laptop",
    "price" => 15000000
];
echo "Nama Produk: " . $product['name'] . "\n";

// Array of Array
$products = [
    [
        "id" => 1,
        "name" => "Laptop",
        "price" => 15000000
    ],
    [
        "id" => 2,
        "name" => "Smartphone",
        "price" => 5000000
    ],
    [
        "id" => 3,
        "name" => "Headphones",
        "price" => 1000000
    ]
];
echo "Nama Produk ke-2: " . $products[1]['name'] . "\n";
?>