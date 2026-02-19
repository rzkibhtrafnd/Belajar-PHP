<?php

// Loop Array
$products = ["Laptop", "Smartphone", "Headphones"];
foreach ($products as $product) {
    echo "- " . $product . "\n";
}

// Loop Associative Array
$product = [
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

foreach ($product as $key => $value) {
    echo "Index $key berisi data:". $value['name'] . " dengan harga Rp " . number_format($value['price'], 0, ',', '.') . "\n";
}

// Loop Array Database
foreach ($product as $item) {
    echo "ID: " . $item['id'] . "\n";
    echo "Name: " . $item['name'] . "\n";
    echo "Price: Rp " . number_format($item['price'], 0, ',', '.') . "\n";
    echo "-------------------\n";
}
?>