<?php

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

// Tampilkan semua nama produk
echo "Daftar Produk:\n";
foreach ($products as $product) {
    echo "- " . $product['name'] . "\n";
}

// Hitung total harga semua produk
$totalPrice = 0;
foreach ($products as $product) {
    $totalPrice += $product['price'];
}
echo "Total Harga: Rp " . number_format($totalPrice, 0, ',', '.') . "\n";

// Tampilkan produk dengan harga di atas 1 juta
echo "Produk dengan harga di atas 1 juta:\n";
foreach ($products as $product) {
    if ($product['price'] > 1000000) {
        echo "- " . $product['name'] . " (Rp " . number_format($product['price'], 0, ',', '.') . ")\n";
    }
}